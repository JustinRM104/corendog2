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

function checkPassword($password, $confirmPassword) {
    $error = NULL;

    if (strlen($password) < 6) { $error = "Het wachtwoord moet minimaal 6 karakters bevatten."; }
    if ($password != $confirmPassword) { $error = "Ingevoerde wachtwoorden komen niet overeen."; }
    if ($error) { return $error; }

    return false;
}

function emailAvailable($email) {
    try {
        $connection = dbConnect();
        $sql = "SELECT * FROM `users` WHERE `email` = :email";
        $stmt = $connection->prepare($sql);
        $stmt->execute(['email' => $email]);
    
        if ($stmt->rowCount() >= 1) { return true; }
        return false;
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
