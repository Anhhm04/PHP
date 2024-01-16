<?php

class People{
    private $ngaysinh =5;//chỉ mình nhìn thấy được
    public $hoten;// ai cũng thấy được
    protected $kethon;//giới hạn người nhìn thấy được

    public function __construct($hoten)
    {
        $this->hoten = $hoten;
    }
    public function setNgaySinh($ngaysinh){
        $this->ngaysinh = $ngaysinh;
    }
    public function setKetHon($kethon){
        $this->kethon = $kethon;
    }
}
class Student extends People{
    public function getNgaySInh(){
        echo "Ngày sinh: " . $this->ngaysinh;
    }
    public function getKetHon(){
        echo "Tình trạng hôn nhân: ". $this->kethon;
    }
}
$people = new Student("nguyễn văn a");
$people->setNgaySinh(9/1/2024);
$people->setKetHon("Chưa kết hôn");


echo "Ngày sinh: ". $people->hoten;

$student = new Student("nguyễn văn b");
// $student->getNgaySInh();
echo "<br>";
$student->setKetHon("đã kết hôn");
$student->getKetHon();

//BTVN


