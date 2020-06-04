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

		foreach ($data as $key => $value) {
			$key = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		}

		// Check email
		if ($data['email'] === false) { $errors['email'] = "Het email adress dat u heeft ingevoerd is ongeldig."; }

		// Check password
		if (empty($data['password']) ||  strlen($data['password'] < 6) ) {
			$errors['password'] = "Het wachtwoord moet minimaal 6 karakters bevatten.";
		} else {
			if ($data['password'] != $data['confirmPassword']) {
				$errors['password'] = "Ingevoerde wachtwoorden komen niet overeen.";
			}
		}

		if (count($errors) === 0) {
			$connection = dbConnect();
			$sql = "SELECT * FROM `users` WHERE `email` = :email";
			$stmt = $connection->prepare($sql);
			$stmt->execute(['email' => $data['email']]);

			if ($stmt->rowCount() === 0) {
				$sql = "INSERT INTO `users` (`email`, `password`, `firstname`, `lastname`, `location`) VALUES (:email, :password, :firstname, :lastname, :location)";
				$stmt = $connection->prepare($sql);
				$hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
				$params = [
					'email' => $data['email'],
					'password' => $hashedPassword,
					'firstname' => $data['firstname'],
					'lastname' => $data['lastname'],
					'location' => $data['location']
				];

				$stmt->execute($params);
				echo "done";
				exit;
			} else {
				$errors['email'] = "Email is al in gebruik.";
			}
		}
	}
}