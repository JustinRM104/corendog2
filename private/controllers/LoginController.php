<?php

namespace Website\Controllers;

class LoginController {
	public function login() {
		alreadyLoggedInCheck();

		$template_engine = get_template_engine();	
		echo $template_engine->render('login', ['showNavigation' => false, 'showFooter' => false]);
	}

	public function loginProcess() {
		alreadyLoggedInCheck();

		$errors = [];
		$data = [
			'email' => filter_var($_POST["email"], FILTER_VALIDATE_EMAIL),
			'password' => trim($_POST["password"]),
		]; 
		$data = cssCheck($data);

		$emailCheck = emailAvalaible($data['email']);
		if ($emailCheck) { $errors['email'] = "Geen account met dit email adress bekend."; }

		$user = getUserByEmail($data['email']);
		if (!$user) { $errors['email'] = "Geen account met dit email adress bekend."; }

		if (count($errors) === 0) {
			if (password_verify($data['password'], $user['password'])) {
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['email'] = $user['email'];
				redirect(url('home'));
			} else {
				$errors['password'] = "Wachtwoord is niet correct.";
			}
		}

		$template_engine = get_template_engine();	
		echo $template_engine->render('login', ['errors' => $errors, 'showNavigation' => false, 'showFooter' => false]);
	}

	public function logout() {
		$_SESSION['user_id'] = NULL;
		$_SESSION['email'] = NULL;
		redirect(url('home'));
	}
}