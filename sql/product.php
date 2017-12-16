<?php

require_once __DIR__.'/../config.php';
require_once __DIR__.'/../model/Product.php';

function saveProduct($product) {
    global $pdo;

    $statement = null;
    if (null === $product->getId()) {
        $statement = $pdo->prepare('INSERT INTO product (name, price, quantity, image) values (:name, :price, :quantity, :image)');
    } else {
        $statement = $pdo->prepare('UPDATE product SET name=:name, price=:price, quantity=:quantity, image=:image WHERE id=:id');
        $statement->bindValue(':id', $product->getId());
    }
    $statement->bindValue(':name', $product->getName());
    $statement->bindValue(':price', $product->getPrice());
    $statement->bindValue(':quantity', $product->getQuantity());
    $statement->bindValue(':image', $product->getImage());

    return $statement->execute();
}

function getAllProduct() {
    global $pdo;

    $statement = $pdo->prepare('SELECT * FROM product');
    $statement->execute();

    $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

    return $products;
}

function findProduct($productId) {
    global $pdo;

    $statement = $pdo->prepare('SELECT * FROM product WHERE id = :id');
    $statement->bindValue(':id', $productId);
    $statement->execute();

    return $statement->fetchObject(Product::class);
}

function deleteProduct($product) {
    global $pdo;

    $statement = $pdo->prepare('DELETE FROM product WHERE id=:id');
    $statement->bindValue(':id', $product->getId());

    return $statement->execute();
}
