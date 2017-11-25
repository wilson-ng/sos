<?php

require_once __DIR__.'/../../sql/user.php';

if (isset($_POST['buttonSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (saveUser($username, $password)) {
        header('Location: http://localhost.dev:8081/');
    }
}

include '../../view/user/register.php';
