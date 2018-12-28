<?php

require "vendor/autoload.php";

/**
 * Single Responsibility
 *
 * One class should have only one responsibility / reason to change.
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
 *
 * A class should be open for extension but closed for modifications.
 * We should not be forced to modify the class because of business logic changes.
 * Instead we should be able to write just another implementation.
 */

use Solid\OpenClosed\Refactored\Checkout;
use Solid\OpenClosed\Refactored\PayPal;

$checkout = new Checkout(new PayPal);

echo $checkout->acceptPayment();

echo '<hr />';

/**
 * Liskov Substitution
 *
 * We should be able to substitute the parent with the child class.
 *
 * This means that the overridden methods should have the same signature,
 * throwing the same type of exceptions and returning the same type of data.
 */

use Solid\LiskovSubstitution\Refactored\Square;

$square = new Square();
//$square->setWidth(5)->setHeight(6);
$square->setWidth(5)->setSquareHeight(5);

echo $square->area();

echo '<hr />';

/**
 * Interface Segregation
 *
 * A client should not be forced to implement an interface that doesn't use
 */

use Solid\InterfaceSegregation\Refactored\Captain;
use Solid\InterfaceSegregation\Refactored\HumanWorker;
use Solid\InterfaceSegregation\Refactored\AndroidWorker;

$captain = new Captain();

echo $captain->manage(new HumanWorker);
echo '<br />';
echo $captain->manage(new AndroidWorker);

echo '<hr />';

/**
 * Dependency Inversion
 *
 * Depend on abstractions instead of concretions
 */

use Solid\DependencyInversion\Refactored\WelcomeMessage;
use Solid\DependencyInversion\Refactored\SmtpMailer;

$mail = new WelcomeMessage(new SmtpMailer);
echo $mail->send();