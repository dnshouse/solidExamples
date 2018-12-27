<?php

require "vendor/autoload.php";

use Solid\SingleResponsibility\OldUser;
use Solid\SingleResponsibility\User;

$user = new User('john', 'John Doe', 7708555888);
echo $user->validatePhoneNumber()->renderJson();