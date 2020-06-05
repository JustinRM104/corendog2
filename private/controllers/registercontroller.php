<?php

namespace Website\Controllers;

class registercontroller {
	public function login() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('login');
	}

	public function register() {
		$template_engine = get_template_engine();	
		echo $template_engine->render('inschrijven');
	}

	public function registerProcess() {
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
			$emailCheck = emailAvailable($data['email']);
			if ($emailCheck) { $errors['email'] = "Het email adress dat u heeft ingevoerd is al in gebruik."; }
		}

		// Check password
		$passwordCheck = checkPassword($data['password'], $data['confirmPassword']);
		if ($passwordCheck !== false) { $errors['password'] = $passwordCheck; }

		if (count($errors) === 0) {
			$succes = createUser($data);

			if ($succes) {
				echo "Gelukt!";
				exit;
			} else {
				$errors['unknown'] = "Er is een onbekende fout ongetreden.";
			}
		}

		$template_engine = get_template_engine();	
		echo $template_engine->render('inschrijven', ['errors' => $errors]);
	}
}