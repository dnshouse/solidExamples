<?php

namespace Solid\OpenClosed\Refactored;


class BitCoin implements PaymentInterface
{
    public function acceptPayment()
    {
        return 'paid by BitCoin';
    }
}