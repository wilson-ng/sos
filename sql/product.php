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

function saveProduct($product) {
    global $pdo;

    $statement = $pdo->prepare('INSERT INTO product (name, quantity, price, image) values (:name, :quantity, :price, :image);');
    $statement->bindValue(':name', $product->getName());
    $statement->bindValue(':quantity', $product->getQuantity());
    $statement->bindValue(':price', $product->getPrice());
    $statement->bindValue(':image', $product->getImage());
    return $statement->execute();
}
