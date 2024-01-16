<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sinhviens = [
        ["mssv" => "PH31351", "hoten" => "Nguyến Văn A", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
        ["mssv" => "PH78865", "hoten" => "Nguyến Văn B", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
        ["mssv" => "PH31535", "hoten" => "Nguyến Văn C", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
        ["mssv" => "PH34481", "hoten" => "Nguyến Văn D", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
        ["mssv" => "PH34861", "hoten" => "Nguyến Văn F", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
        ["mssv" => "PH31741", "hoten" => "Nguyến Văn P", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
        ["mssv" => "PH31716", "hoten" => "Nguyến Văn K", "email" => "abc@gmail.com", "hinh" => "notimage.jpg", "diachi" => "HÀ Nội"],
    ];

     $search_result = [];
    if (isset($_POST['search'])) {
        $search_term = $_POST['search_term'];

        foreach ($sinhviens as $sinhvien) {
            if (stripos($sinhvien['hoten'], $search_term) !== false) {
                $search_result[] = $sinhvien;
            }
        }
    }
    echo "<h1>Danh sách sinh viên</h1>";
    echo "<form method='post' action=''>";
    echo "<label>Tìm kiếm theo họ tên: </label>";
    echo "<input type='text' name='search_term'>";
    echo "<input type='submit' name='search' value='Tìm kiếm'>";
    echo "</form>";
    echo "<table border='1'>";
    echo "<tr>
    <th>MSSV</th>
    <th>Họ tên</th>
    <th>Email</th>
    <th>Hình</th>
    <th>Địa chỉ</th>
    </tr>";
    $display_data = empty($search_result) ? $sinhviens : $search_result;

    foreach ($display_data as $sinhvien) {
        echo "<tr>";
        echo "<td>" . $sinhvien['mssv'] . "</td>";
        echo "<td>" . $sinhvien['hoten'] . "</td>";
        echo "<td>" . $sinhvien['email'] . "</td>";
        echo "<td>" . $sinhvien['hinh'] . "</td>";
        echo "<td>" . $sinhvien['diachi'] . "</td>";
    }
    echo "</table>"
        ?>
</body>

</html>