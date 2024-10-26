<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "Controllers/ProductController.php";

use Controller\ProductController;

$productController = new ProductController();

echo $productController->getAllProduct();
