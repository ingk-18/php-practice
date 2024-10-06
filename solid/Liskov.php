<?php

abstract class Payment
{
    abstract public function order($price);
    abstract public function cancel($price);
}


class CreditCard extends Payment
{
}


class Exchange extends Payment
{
    public function order($price)
    {
        throw new Exception('Exchange order is not allowed');
    }
    public function cancel($price)
    {
        throw new Exception('Exchange cancel is not allowed');
    }
}
