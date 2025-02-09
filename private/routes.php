<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	SimpleRouter::get('/', 'WebsiteController@home')->name('home');
	SimpleRouter::get('/home', 'WebsiteController@home')->name('home');
	SimpleRouter::get('/contact', 'WebsiteController@contact')->name('contact');
	SimpleRouter::get('/privacy', 'WebsiteController@privacy')->name('privacy');
	SimpleRouter::get('/over', 'WebsiteController@over')->name('over');

	SimpleRouter::get('/inschrijven', 'RegisterController@register')->name('register.form');
	SimpleRouter::post('/inschrijven/verwerken', 'RegisterController@registerProcess')->name('register.process');
	SimpleRouter::get('/inschrijven/voltooid', 'RegisterController@registerSucces')->name('register.succes');

	SimpleRouter::get('/login', 'LoginController@login')->name('login.form');
	SimpleRouter::post('/login/verwerken', 'LoginController@loginProcess')->name('login.process');
	SimpleRouter::get('/uitloggen', 'LoginController@logout')->name('logout');

	SimpleRouter::post('/receivedata', 'DataController@receiveData')->name('receiveData');

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

