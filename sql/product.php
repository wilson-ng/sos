<?php

require_once __DIR__.'/../config.php';
require_once __DIR__.'/../model/Product.php';

function getAllProduct() {
    global $pdo;

    $statement = $pdo->prepare('SELECT * FROM product;');
    $statement->execute();

    $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

    return $products;
}
