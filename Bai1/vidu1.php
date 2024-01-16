<?php

//khai báo hằng
const HELLO = "Xin chào thế giới";
define("PI",3.14);

echo HELLO ."<br>";
echo PI;

//Mảng tuần tự
$arr1 = array(1,3,43,2,3);
$arr2 = [3,4,5,2,4];

//Mảng liên hợp
$arrKey = [
    'mssv' => "PH34567",
    'hoten'=>"Nguyến Văn A",
    'ngaysinh'=>"2/1/2023",
    'quequan'=>"Hà Nội",
];
//Mảng 2 chiều
$sinhvien =[
    ["mssv"=>"PH31561","hoten"=>"Nguyến Văn A","ngaysinh"=>"2/1/2024","quequan"=>"HÀ Nội"],
    ["mssv"=>"PH31431","hoten"=>"Nguyến Văn B","ngaysinh"=>"3/1/2024","quequan"=>"HÀ Nội"],
    ["mssv"=>"PH31761","hoten"=>"Nguyến Văn C","ngaysinh"=>"6/1/2024","quequan"=>"HÀ Nội"]
];
echo "<br>";
print_r($sinhvien)
?>

