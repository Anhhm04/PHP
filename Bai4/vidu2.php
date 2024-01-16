<?php

class Computer{
    public $hang;
    public $ten;
    public $cannang;
    public $mausac;
    public $giaban;

    //Tạo phương thức khởi tạo construct
    public function __construct($hang,$ten,$cannang,$mausac,$giaban) 
    {
        $this->hang = $hang;
        $this->ten = $ten;
        $this->cannang = $cannang;
        $this->mausac = $mausac;
        $this->giaban = $giaban;
    }

    public function mo() {
        echo "<p>$this->ten đang được mở</p>";
    }
    public function tat() {
        echo "<p>$this->ten gọi đến chương trình tắt máy</p>";
    }
}

//Tính kế thưa
class Asus extends Computer 
{
    public $xuatxu;

    public function __construct($hang, $ten, $cannang, $mausac, $giaban, $xuatxu)
    {
        parent::__construct($hang, $ten, $cannang, $mausac, $giaban);
        $this->xuatxu = $xuatxu;
    }
    public function thongtin() {
        echo "Tên hãng: $this->hang<br>";
        echo "Tên máy: $this->ten<br>";
        echo "Giá bán: $this->giaban<br>";

        // echo "tên hãng ".$this->hang .'<br>'; 
        // echo "tên hãng ".$this->ten .'<br>';
        // echo "tên hãng ".$this->cannang .'<br>';
        // echo "tên hãng ".$this->mausac .'<br>';
        // echo "tên hãng ".$this->giaban .'<br>';
    }
}
$computer1 = new Computer("DELL","XPS13",1.1,"Xám không gian",2000);
echo "<pre>";
var_dump($computer1);
echo "</pre>";

$tus = new Asus("Asus","TUS",1.8,"Màu đen đỏ",1000,"Việt Nam");
echo "<pre>";
var_dump($tus);
echo "</pre>";
//Truy cập đến phương thức
$tus->thongtin();