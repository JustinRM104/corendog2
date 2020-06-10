<?php

namespace Website\Controllers;

class RegisterController {
	public function register() {
		alreadyLoggedInCheck();

		$template_engine = get_template_engine();	
		echo $template_engine->render('inschrijven', ['showNavigation' => false, 'showFooter' => false]);
	}

	public function registerProcess() {
		alreadyLoggedInCheck();

		$errors = [];
		$data = [
			'email' => filter_var($_POST["email"], FILTER_VALIDATE_EMAIL),
			'password' => trim($_POST["password"]),
			'confirmPassword' => trim($_POST["confirmed-password"]),
			'firstname' => trim($_POST["firstname"]),
			'lastname' => trim($_POST["lastname"]),
			'date-born' => trim($_POST["date-born"]),
			'location' => trim($_POST["location"]),
		];
		$data = cssCheck($data);

		// Check email
		if ($data['email'] === false) { $errors['email'] = "Het email adress dat u heeft ingevoerd is ongeldig."; }
		if (!isset($errors['email'])) { 
			$emailCheck = emailAvalaible($data['email']);
			if (!$emailCheck) { $errors['email'] = "Het email adress dat u heeft ingevoerd is al in gebruik."; }
		}

		// Check password
		$passwordCheck = passwordValid($data['password'], $data['confirmPassword']);
		if ($passwordCheck !== false) { $errors['password'] = $passwordCheck; }

		if (count($errors) === 0) {
			$succes = createUser($data);

			if ($succes) {
				redirect(url('register.succes'));
			} else {
				$errors['unknown'] = "Er is een onbekende fout ongetreden.";
			}
		}

		$template_engine = get_template_engine();	
		echo $template_engine->render('inschrijven', ['errors' => $errors, 'showNavigation' => false, 'showFooter' => false]);
	}

	public function registerSucces() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('registered', ['showNavigation' => false, 'showFooter' => false]);	
	}
}