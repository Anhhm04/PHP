<?php

class BankAccount {
    private $accountNumber;
    private $accountName;
    private $balance;

    public function __construct($accountNumber, $accountName) {
        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;
        $this->balance = 0;
    }

    public function displayAccountInfo() {
        echo "<br>";
        echo "Tên tài khoản: {$this->accountName}, Số tài khoản: {$this->accountNumber}, Số tiền trong tài khoản: {$this->balance} đ\n";
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Số tiền rút vượt quá số dư trong tài khoản.\n";
        }
    }

    // Getter và setter
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountName() {
        return $this->accountName;
    }

    public function setAccountName($accountName) {
        $this->accountName = $accountName;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }
}

class HKBank extends BankAccount {
    private $fullName;
    private $dob;

    public function __construct($accountNumber, $accountName, $fullName, $dob) {
        parent::__construct($accountNumber, $accountName);
        $this->fullName = $fullName;
        $this->dob = $dob;
    }

    public function sendMoney($amount, BankAccount $recipientAccount) {
        if ($amount <= $this->getBalance()) {
            $this->withdraw($amount);
            $recipientAccount->deposit($amount);
            echo "Chuyển tiền thành công.\n";
        } else {
            echo "Số tiền chuyển vượt quá số dư trong tài khoản.\n";
        }
    }

    public function savingsInterest() {
        $interest = $this->getBalance() * 0.06;
        $this->deposit($interest);
        echo "Lãi suất được cộng vào tài khoản.\n";
    }
}


$bankAccount = new HKBank("123456789", "Nguyen Van A", "Nguyen Van A", "01/01/1990");
$bankAccount->displayAccountInfo();

$bankAccount->deposit(1000000);
$bankAccount->displayAccountInfo();

$bankAccount->withdraw(500000);
$bankAccount->displayAccountInfo();

$recipientAccount = new BankAccount("987654321", "Tran Thi B");
$bankAccount->sendMoney(200000, $recipientAccount);
$bankAccount->displayAccountInfo();
$recipientAccount->displayAccountInfo();

$bankAccount->savingsInterest();
$bankAccount->displayAccountInfo();
