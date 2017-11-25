<?php

$usernameDatabase = "root";
$passwordDatabase = "root";
$databaseName = "sos";
$hostDatabase = "database-host";

$pdo = new PDO(
    "mysql:dbname=$databaseName;host=$hostDatabase",
    $usernameDatabase,
    $passwordDatabase
);
