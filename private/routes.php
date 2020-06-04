<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	SimpleRouter::get('/', 'websitecontroller@home')->name('home');
	SimpleRouter::get('/home', 'websitecontroller@home')->name('home');
	SimpleRouter::get('/contact', 'websitecontroller@contact')->name('contact');
	SimpleRouter::get('/privacy', 'websitecontroller@privacy')->name('privacy');
	SimpleRouter::get('/over', 'websitecontroller@over')->name('over');

	SimpleRouter::get('/inschrijven', 'registercontroller@register')->name('register.form');
	SimpleRouter::post('/inschrijven/verwerken', 'registercontroller@registerProcess')->name('register.process');
	SimpleRouter::get('/login', 'registercontroller@login')->name('login.form');
	SimpleRouter::post('/login/verwerken', 'registercontroller@login')->name('login.process');

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

