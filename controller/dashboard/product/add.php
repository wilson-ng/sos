<?php

require_once __DIR__.'/../../../config.php';
require_once __DIR__.'/../../../model/Product.php';
require_once __DIR__.'/../../../sql/product.php';

if (isset($_POST['saveProduct']) && !empty($_FILES['image'])) {
    $productImageFolder = 'uploads/product/';
    $productImageName = basename($_FILES['image']['name']);
    $productImageLocation = $productImageFolder.$productImageName;
    $productImagePath = __DIR__.'/../../../'.$productImageLocation;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $productImagePath)) {
        $product = new Product();
        $product->setImage($productImageLocation);
        $product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setQuantity($_POST['quantity']);

        if (saveProduct($product)) {
            header('Location: http://sos.localhost:8081/controller/dashboard/product/list.php');
        } else {
            unlink($productImagePath);
        }
    }
}

include '../../../view/dashboard/product/add.php';
