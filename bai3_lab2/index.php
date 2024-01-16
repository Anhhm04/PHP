<?php
require_once "models/db.php";
require_once "models/products.php";
require_once "controllers/controller.php";
require_once "controllers/productControllers.php";
require_once "controllers/homeControllers.php";
require_once "controllers/contactControllers.php";
require_once "controllers/aboutControllers.php";
require_once "controllers/detailControllers.php";
$ctl = $_GET['ctl'] ?? "";

switch ($ctl) {
    case "":
    case "home":
        homeIndex();
        break;
    case "contact":
        contactIndex();
        break;
    case "about":
       aboutIndex();
        break;
    case "detail":
       detailIndex();
        break;
    case "product":
        productIndex();
        break;
    default:
        echo "<h1>404 FILE NOT FOUND</h1>";
}