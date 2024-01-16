<?php
require_once "./env.php";
require_once "./config.php";
require_once "./app/Models/BaseModel.php";
require_once "./app/Models/ProductModel.php";

use App\Models\ProductModel;

dd(ProductModel::all());