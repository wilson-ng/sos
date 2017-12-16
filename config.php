<?php

session_start();

$host = 'http://sos.localhost:8081/';

$usernameDatabase = "root";
$passwordDatabase = "root";
$databaseName = "sos";
$hostDatabase = "database-host";

$pdo = new PDO(
    "mysql:dbname=$databaseName;host=$hostDatabase",
    $usernameDatabase,
    $passwordDatabase
);
