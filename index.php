<?php

require "vendor/autoload.php";

use Solid\SingleResponsibility\Refactored\User;
use Solid\SingleResponsibility\Refactored\Validator\UserValidator;
use Solid\SingleResponsibility\Refactored\Renderer\UserRenderer;
use Solid\SingleResponsibility\Refactored\Validator\StringValidator;
use Solid\SingleResponsibility\Refactored\Validator\IntegerValidator;
use Solid\SingleResponsibility\Refactored\Renderer\JsonRenderer;
use Solid\SingleResponsibility\Refactored\Renderer\HtmlRenderer;

$user = new User('john', 'John Doe', 7708555888);

try {
    echo $user->validate(new UserValidator(new StringValidator, new IntegerValidator))->render(new UserRenderer(new HtmlRenderer()));
} catch (Exception $exception) {
    echo $exception->getMessage();
}