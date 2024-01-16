<?php
//làm việc với CSDL
$host = "127.0.0.1"; //localhost
$dbname = "we3014_01";
$username = "root";
$password = "";

try{
    //chuỗi kết nối đến CSDL
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",
    $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Lỗi kết nối CSDL: ". $e->getMessage();
}


//Thêm dữ liệu
//sử dụng câu lệnh có tham số
$sql = "INSERT INTO products(name, image,cate_id, price) VALUE(:name, :image, :cate_id, :price)";

//chuẩn bị
$stmt = $conn->prepare($sql);
//dữ liệu imsert đưa vào 1 mảng
$data = [
    "name" =>"TEST",
    "image" =>"noimage.jpg",
    "cate_id" =>16,
    "price" =>200,
];
//thực thi
$stmt->execute($data);

//Lấy dữ liệu
$sql = "SELECT * FROM products";//SQL
$stmt = $conn->prepare($sql);//Sự chuẩn bị
$stmt->execute();//Thực thi câu lệnh
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);//lấy dữ liệu
echo "<pre>";
print_r($result);
echo "</pre>";