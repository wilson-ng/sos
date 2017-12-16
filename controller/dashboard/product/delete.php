<?php

require_once __DIR__.'/../../../config.php';
require_once __DIR__.'/../../../sql/product.php';

if (isset($_GET['product'])) {
    $product = findProduct($_GET['product']);
} else {
    header('Location: http://sos.localhost:8081/controller/dashboard/product/list.php');
}

deleteProduct($product);

header('Location: http://sos.localhost:8081/controller/dashboard/product/list.php');
