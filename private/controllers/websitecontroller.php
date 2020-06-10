<?php

namespace Website\Controllers;

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */

class WebsiteController {

	public function home() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('home', ['showNavigation' => true, 'showFooter' => true]);

	}

	public function contact() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('contact', ['showNavigation' => true, 'showFooter' => true]);

	}

	public function privacy() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('privacy', ['showNavigation' => true, 'showFooter' => true]);

	}

	public function over() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('over', ['showNavigation' => true, 'showFooter' => true]);

	}
}