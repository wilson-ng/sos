<?php

require_once __DIR__.'/../../../config.php';
require_once __DIR__.'/../../../sql/product.php';

if (isset($_GET['product'])) {
    $product = findProduct($_GET['product']);
} else {
    header('Location: http://sos.localhost:8081/controller/dashboard/product/list.php');
}

if (isset($_POST['saveProduct'])) {
    $saveImageSuccess = true;
    $changeImage = false;
    $product->setName($_POST['name']);
    $product->setPrice($_POST['price']);
    $product->setQuantity($_POST['quantity']);

    $productImageLocation = '';
    $productImagePath = '';
    if (!empty($_FILES['image']) && '' !== $_FILES['image']['name']) {
        $changeImage = true;
        $productImageFolder = 'uploads/product/';
        $productImageName = basename($_FILES['image']['name']);
        $productImageLocation = $productImageFolder.$productImageName;
        $productImagePath = __DIR__.'/../../../'.$productImageLocation;
    }

    if ($changeImage && $productImageLocation !== $product->getImage()) {
        $product->setImage($productImageLocation);

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $productImagePath)) {
            $saveImageSuccess = false;
        }
    }

    if ($saveImageSuccess && saveProduct($product)) {
        header('Location: http://sos.localhost:8081/controller/dashboard/product/list.php');
    }
}

include '../../../view/dashboard/product/edit.php';
