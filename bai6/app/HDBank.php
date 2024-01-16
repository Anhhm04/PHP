<?php

namespace App;

use Lib\BankBase;

class HDBank extends BankBase
{
    public function rutTien($sotien)
    {
        $this->soDu -= $sotien;
    }
    public function napTien($sotien)
    {
        $this->soDu += $sotien;
    }
    public function chuyentien($sotien, $nguoinhan)
    {
        if ($sotien < $this->soDu) {
            $this->soDu -= $sotien;
            $nguoinhan->soDu += $sotien;
            echo "Bạn đã chuyển số tiền $sotien đến tài khoản $nguoinhan->soTK";
        } else {
            echo "Số tiền trong tài khoản không đủ";
        }
    }
}