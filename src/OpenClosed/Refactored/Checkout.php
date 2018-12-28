<?php

namespace Solid\OpenClosed\Refactored;


class Checkout
{
    protected $payment;

    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    public function acceptPayment()
    {
        return $this->payment->acceptPayment();
    }
}