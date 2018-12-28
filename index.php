<?php

require "vendor/autoload.php";

/**
 * Single Responsibility
 */
use Solid\SingleResponsibility\Refactored\User;
use Solid\SingleResponsibility\Refactored\Validator\UserValidator;
use Solid\SingleResponsibility\Refactored\Renderer\UserRenderer;
use Solid\SingleResponsibility\Refactored\Validator\StringValidator;
use Solid\SingleResponsibility\Refactored\Validator\IntegerValidator;
use Solid\SingleResponsibility\Refactored\Renderer\JsonRenderer;

$user = new User('john', 'John Doe', 7708555888);

try {
    echo $user->validate(new UserValidator(new StringValidator, new IntegerValidator))->render(new UserRenderer(new JsonRenderer));
} catch (Exception $exception) {
    echo $exception->getMessage();
}

echo '<hr />';

/**
 * Open Closed
 */
use Solid\OpenClosed\Refactored\Checkout;
use Solid\OpenClosed\Refactored\PayPal;

$checkout = new Checkout(new PayPal);
echo $checkout->acceptPayment();

echo '<hr />';