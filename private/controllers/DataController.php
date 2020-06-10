<?php

namespace Website\Controllers;

class DataController {
	public function getUser() {
		$id = cssCheck($_POST['target']);
		$user = getUserById($id);

		if ($user) {
			$user['password'] = NULL;
			return json_encode($user);
		} else {
			return false;
		}
	}
}