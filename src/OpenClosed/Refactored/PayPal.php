<?php

namespace Solid\OpenClosed\Refactored;


class PayPal implements PaymentInterface
{
    public function acceptPayment()
    {
        return 'paid by PayPal';
    }
}