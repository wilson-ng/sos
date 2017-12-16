<?php

require_once __DIR__.'/../../sql/user.php';
require_once __DIR__.'/../../model/User.php';

if (isset($_POST['buttonSubmit'])) {
    $user = new User();
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setType('customer');

    if (saveUser($user)) {
        header('Location: '.$host);
    }
}

include '../../view/user/register.php';
