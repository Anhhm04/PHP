<?php

namespace Lib;

class BankBase
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
}