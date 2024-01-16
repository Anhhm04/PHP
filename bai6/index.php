<?php
require_once "./lib/BankBase.php";
require_once "./app/HDBank.php";
require_once "./app/ConNguoi.php";
require_once "./app/NguoiLon.php";
//Áp dụng
use App\HDBank;
use App\NguoiLon;

$bank = new HDBank("Nguyễn Văn A", '132156486', 1000000000);
$bank->rutTien(500000);
echo "Số dư tài khoản là: " . $bank->soDu;
echo "<br>";

//Gọi trực tiếp phương thức static 
NguoiLon::getInfo();