<?php

require_once __DIR__.'/../../../config.php';
require_once __DIR__.'/../../../sql/product.php';
require_once __DIR__.'/../../../model/Product.php';

if (!empty($_FILES['image'])) {
    $productImageFolder = 'uploads/product/';
    $productImageLocation = $productImageFolder.basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../../../'.$productImageLocation)) {
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setQuantity($_POST['quantity']);
        $product->setImage($productImageLocation);

        if (saveProduct($product)) {
            header('Location: '.$host.'controller/dashboard/product/list.php');
        } else {
            unlink(__DIR__.'/../../../'.$productImageLocation);
        }
    }
}

include '../../../view/dashboard/product/add.php';
