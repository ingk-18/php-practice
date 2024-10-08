<?php


// 悪い例
// class Payment
// {
//     public function orderByCash($price){}
//     public function cancelByCash($price){}

//     public function orderByCreditCard($price){}
//     public function cancelByCreditCard($price){}
// }

// 良い例

class Payment {
    private $paymentType;

    public function __construct($paymentType) {
        $this->paymentType = $paymentType;
    }

    public function order($price) {
        $this->paymentType->order($price);
    }

    public function cancel($price) {
        $this->paymentType->cancel($price);
    }
}

class Cash {
    public function order($price){}
    public function cancel($price){}
}

class CreditCard {
    public function order($price){}
    public function cancel($price){}
}


