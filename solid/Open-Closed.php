<?php

// BAD
// class Payment
// {
//     public function orderByCash($price){}
//     public function cancelByCash($price){}

//     public function orderByCreditCard($price){}
//     public function cancelByCreditCard($price){}
// }


// GOOD

// 抽象クラスとしてのPayment
abstract class Payment
{
    abstract public function order($price);
    abstract public function cancel($price);
}

// 以下は具体的なクラスとして定義
class Cash extends Payment
{
    public function order($price){}

    public function cancel($price){}
}


class CreditCard extends Payment
{
    public function order($price){}
    public function cancel($price){}
}


class Qr extends Payment
{
    public function order($price){}
    public function cancel($price){}
}

