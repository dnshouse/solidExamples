<?php

namespace Solid\SingleResponsibility\Refactored\Renderer;


use Solid\SingleResponsibility\Refactored\User;

class HtmlRenderer implements UserRendererInterface
{
    public function render(User $user)
    {
        return '
            <h4>'. $user->getUserName() .'</h4>
            <h5>'. $user->getFullName() .'</h5>
            <h6>'. $user->getPhoneNumber() .'</h6>
        ';
    }
}