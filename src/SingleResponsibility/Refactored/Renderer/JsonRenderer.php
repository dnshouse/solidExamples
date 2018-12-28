<?php

namespace Solid\SingleResponsibility\Refactored\Renderer;


use Solid\SingleResponsibility\Refactored\User;

class JsonRenderer implements UserRendererInterface
{
    public function render(User $user)
    {
        return json_encode([
            'userName' => $user->getUserName(),
            'fullName' => $user->getFullName(),
            'phoneNumber' => $user->getPhoneNumber(),
        ]);
    }
}