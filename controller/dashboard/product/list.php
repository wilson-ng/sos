<?php

require_once __DIR__.'/../../../config.php';
require_once __DIR__.'/../../../sql/product.php';

$products = getAllProduct();

include '../../../view/dashboard/product/list.php';
