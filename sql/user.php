<?php

require_once __DIR__.'/../config.php';
require_once __DIR__.'/../model/User.php';

function saveUser($user) {
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO user (username, password, type) values(:username, :password, :type)');
    $statement->bindParam(':username', $user->getUsername());
    $statement->bindParam(':password', $user->getPassword());
    $statement->bindParam(':type', $user->getType());

    $result = $statement->execute();

    return $result;
}

function loginUser($username, $password) {
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);
    $statement->execute();

    $user = $statement->fetchObject(User::class);

    return $user;
}
