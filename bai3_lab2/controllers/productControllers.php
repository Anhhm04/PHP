<?php

//trang hiển thị danh sách sản phẩm
function productIndex() {
    $product = listProductAll();
    view("product/product", ["products" =>$product]);
}