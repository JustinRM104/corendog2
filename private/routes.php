<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get('/', 'websitecontroller@home')->name('home');
	// STOP: Tot hier al je eigen URL's zetten

	SimpleRouter::get('/not-found', function() {
		http_response_code(404);

		$template_engine = get_template_engine();
		return $template_engine->render('404');
	} );

} );

SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found');
	}
}
);

