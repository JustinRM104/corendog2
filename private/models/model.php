<?php

function cssCheck($data) {
    $newData = $data;

    if (is_array($data)) {
        foreach ($newData as $key => $value) {
            $key = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }
    } else { $newData = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); }

    return $newData;
}

function passwordValid($password, $confirmPassword) {
    $error = "";

    if (strlen($password) < 6) { $error = "Het wachtwoord moet minimaal 6 karakters bevatten."; }
    if ($password != $confirmPassword) { $error = $error . "<br> Ingevoerde wachtwoorden komen niet overeen."; }
    if ($error !== "") { return $error; }

    return false;
}

function emailAvalaible($email) {
    try {
        $connection = dbConnect();
        $sql = "SELECT * FROM `users` WHERE `email` = :email";
        $stmt = $connection->prepare($sql);
        $stmt->execute(['email' => $email]);
    
        if ($stmt->rowCount() >= 1) { return false; }
        return true;
    } catch (\PDOException $e) {
        return true;
    }
}

function createUser($data) {
    try {
        $connection = dbConnect();
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

        return true;
    } catch (\PDOException $e) {
        return false;
    }
}

function getUserByEmail($email) {
    $connection = dbConnect();
    $sql = "SELECT * FROM `users` WHERE email = :email";
    $stmt = $connection->prepare($sql);
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() === 1) {
        return $stmt->fetch();
    }

    return false;
}

function getUserById($id) {
    $connection = dbConnect();
    $sql = "SELECT * FROM `users` WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute(['id' => $id]);

    if ($stmt->rowCount() === 1) {
        return $stmt->fetch();
    }

    return false;
}

function loginCheck() {
    if (!empty($_SESSION['user_id'])) {
        return true;
    }

    return false;
}

function alreadyLoggedInCheck() {
    if (loginCheck()) {
        redirect(url('home'));
        exit;
    }
}

function getUsers($from, $sort, $location) {
    try {
        $connection = dbConnect();

        $sql = "SELECT `id`, `firstname`, `lastname`, `rating`, `picture` FROM `users` WHERE `location` = :location ORDER BY :sort LIMIT " . $from . ",5";
        $stmt = $connection->prepare($sql);
        $stmt->execute(['sort' => $sort, 'location' => $location]);
    
        if ($stmt->rowCount() >= 1) { return $stmt->fetchAll(); }
        return "noData";
    } catch (\PDOException $e) {
        return "noData";
    }   
}
