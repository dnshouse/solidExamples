<?php

namespace Solid\DependencyInversion\Refactored;


class WelcomeMessage
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send()
    {
        return $this->mailer->send();
    }
}