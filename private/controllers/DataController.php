<?php

namespace Website\Controllers;

class DataController {
	public function receiveData() {
		$request = cssCheck($_POST['request']);

		if ($request === "getUser") {
			$id = cssCheck($_POST['target']);
			$user = getUserById($id);

			if ($user) {
				$user['password'] = NULL;
				$user['location'] = normalLocName($user['location']);
				$user['picture'] = getUserImage($user['picture']);

				return json_encode($user);
			}

			return false;
		}
		else if ($request === "showUsers") {
			$from = cssCheck($_POST['from']);
			$sort = cssCheck($_POST['sort']);
			$location = cssCheck($_POST['location']);

			$users = getUsers($from, $sort, $location);

			if ($users != "noData") {
				foreach ($users as $key => $value) {
					$users[$key]['picture'] = getUserImage($users[$key]['picture']);
				}
			} else {
				return "noData";
			}

			return json_encode($users);
		}
	}
}