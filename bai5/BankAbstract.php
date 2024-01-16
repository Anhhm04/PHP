<?php

abstract class BankAbstract
{
    public $hoten;
    public $soTK;
    public $soDu;
    public function __construct($hoten, $soTK, $soDu)
    {
        $this->hoten = $hoten;
        $this->soTK = $soTK;
        $this->soDu = $soDu;
    }

    public abstract function chuyentien($sotien, $nguoinhan);
}

//Tính trừu tượng
class HDBank extends BankAbstract
{
    public function chuyentien($sotien, $nguoinhan) 
    {
        if($sotien <$this->soDu){
            $this->soDu -= $sotien;
            $nguoinhan->soDu += $sotien;
            echo "Bạn đã chuyển số tiền $sotien đến tài khoản $nguoinhan->soTK";
        }else{
            echo "Số tiền trong tài khoản không đủ";
        }
    }
}
//Sử dụng
$user1 = new HDBank("Nguyễn Văn A","03216541",100000000);
$user2 = new HDBank("Nguyễn Văn B","03216849",0);

//Chuyển tiền từ user1 ->user2
$user1->chuyentien(200000,$user2);

//kiểm tra số dư của user1
echo "<br>$user1->hoten có số dư tài khoản là: $user1->soDu";