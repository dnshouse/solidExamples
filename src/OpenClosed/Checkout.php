<?php

namespace Solid\OpenClosed;


class Checkout
{
    protected $payment;

    public function __construct($payment)
    {
        $this->payment = $payment;
    }

    public function acceptPayment()
    {
        if ($this->payment instanceof PayPal) {
            return $this->payment->payByPayPal();
        }

        if ($this->payment instanceof BitCoin) {
            return $this->payment->payByBitCoin();
        }
    }
}

class PayPal
{
    public function payByPayPal()
    {
        return 'paid by PayPal';
    }
}

class BitCoin
{
    public function payByBitCoin()
    {
        return 'paid by BitCoin';
    }
}