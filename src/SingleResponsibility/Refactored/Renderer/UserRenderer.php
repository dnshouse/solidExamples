<?php

namespace Solid\SingleResponsibility\Refactored\Renderer;


use Solid\SingleResponsibility\Refactored\User;

class UserRenderer
{
    /**
     * @var User
     */
    protected $user;
    protected $renderer;

    public function __construct(UserRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function render(User $user)
    {
        $this->user = $user;
        return $this->renderer->render($this->user);
    }
}