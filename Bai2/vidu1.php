<?php
//Hàm không có giá trị trả về
//Hàm không có tham số
function hello()
{
    echo "Xin chào";
}
//Lời gọi hàm
hello();
//hàm có tham số
function helloName($name)
{
    echo "Xin chào: $name";
}
echo "<br />";
helloName("Nguyễn Văn A");

//hàm có giá trị trả về
function sum($a, $b)
{
    return $a + $b;
}
$tong = sum(10, 20);
echo "<br>Tổng = $tong";

//Hàm không biết trước tham số
//toán tử rest ...
function sumArguments(...$numbers)
{
    return array_sum($numbers);
    // var_dump($numbers);
}
echo "<br />";
//gọi hàm
echo "Tổng các số =" . sumArguments(3, 2, 5, 8, 4, 6, 8);
// sumArguments(3,2,5,8,4,6,8,);

//Toán tử spread
$arr1 = [3, 65, 12];
$arr2 = [6, 78, 9];
//=>gộp mảng [3, 65, 12, 6, 78, 9]
$arrMerge = [...$arr1, ...$arr2];
echo "<pre>";
print_r($arrMerge);