<?php

require_once __DIR__.'/../../sql/user.php';

if (isset($_POST['buttonSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user = loginUser($username, $password)) {
        // ini akan dijalankan setelah login sukses.
        $_SESSION['username'] = $user->getUsername();

        if ($user->isCustomer()) {
            header('Location: '.$host);
        } else {
            header('Location: '.$host.'controller/dashboard/index.php');
        }
    }
}

include '../../view/user/login.php';
