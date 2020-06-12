<?php
// Dit bestand hoort bij de router, enb bevat nog een aantal extra functiesdie je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect() {

	$config = get_config('DB');

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO( $dsn, $config['USER'], $config['PASSWORD'] );

		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		return $connection;

	} catch ( \PDOException $e ) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}

}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url($path = '') {
	return get_config( 'BASE_URL' ) . $path;
}

function get_config($name) {
	$config = require __DIR__ . '/config.php';
	$name = strtoupper( $name );

	if ( isset( $config[ $name ] ) ) {
		return $config[$name];
	}

	throw new \InvalidArgumentException( 'Er bestaat geen instelling met de key: ' . $name );
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine() {

	$templates_path = get_config( 'PRIVATE' ) . '/views';

	return new League\Plates\Engine( $templates_path );

}

function normalLocName($shortenedLoc) {
	$normalLocNames = [
		'nh' => "Noord-Holland",
		'zh' => "Zuid-Holland",
		'lb' => "Limburg",
		'gr' => "Groningen",
		'dr' => "Drenthe",
		'zl' => "Zeeland",
		'ut' => "Utrecht",
		'nb' => "Noord-Brabant",
		'ov' => "Overijssel",
		'fl' => "Flevoland",
		'gl' => "Gelderland",
		'fr' => "Friesland"
	];

	if ($normalLocNames[$shortenedLoc]) {
		return $normalLocNames[$shortenedLoc];
	}

	return $shortenedLoc;
}

function getUserImage($name) {
	$public = get_config('WEBROOT');

	if (file_exists($public . "/images/pf_images/" . $name)) {
		return site_url("/images/pf_images/") . $name;
	} else {
		return site_url("/images/pf_images/default.jpg");
	}
}