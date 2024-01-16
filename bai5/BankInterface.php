<?php

interface BankInterface
{
    public function rutTien($sotien);
    public function chuyenTien($sotien, $nguoinhan);
}
interface BankTest
{
    public function napTien($sotien);
}
class HKBank implements BankInterface, BankTest
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
    
        public function rutTien($sotien){
            $this->soDu-=$sotien;
        }
        public function napTien($sotien){
            $this->soDu+=$sotien;
        }
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


$user1 = new HKBank("Nguyễn Văn A","512124561", 1000000000);
$user1->rutTien(150000);
//Kiểm tra số dư
echo "$user1->hoten có số dư tài khoản là :$user1->soDu";