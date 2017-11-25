<?php

require_once __DIR__.'/../config.php';

function saveUser($username, $password) {
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO user (username, password) values(:username, :password)');
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);

    $result = $statement->execute();

    return $result;
}
