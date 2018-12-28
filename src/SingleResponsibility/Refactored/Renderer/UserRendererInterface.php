<?php

namespace Solid\SingleResponsibility\Refactored\Renderer;


use Solid\SingleResponsibility\Refactored\User;

interface UserRendererInterface
{
    public function render(User $user);
}