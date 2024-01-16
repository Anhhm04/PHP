<?php

/**
 * 1.Anonymouse function
 * 2.IIFE
 * 3.Closure
 * 4.Callback
 */

//1. Anonymouse function
function () {
    echo "Xin chào";
};
//gọi hàm
call_user_func(function ($name) {
    echo "Xin chào: $name";
}, "Nguyễn Văn A");

//2. IIFE
(function ($name) {
    echo "<h2>Xin chào: $name</h2>";
})("Nguyễn Văn B");

//3. Closure
$hello = function() {
    echo "Chào mừng các bạn đến với PHP2";
};
//gọi hàm
$hello();

//4. Callback
function showName($name, $callback) {
    $callback($name);
}
//Xây dựng 1 hàm để gọi lại
function getName($name){
    echo "<br> Tên bạn là: $name";
}
//gọi hàm
showName("TungPH",'getName');
// showName("TungPH", function ($name){ 
//     echo "<br> Tên bạn là: $name";   
// });