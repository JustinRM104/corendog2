<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	SimpleRouter::get('/', 'websitecontroller@home')->name('home');
	SimpleRouter::get('/home', 'websitecontroller@home')->name('home');
	SimpleRouter::get('/contact', 'websitecontroller@contact')->name('contact');

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

