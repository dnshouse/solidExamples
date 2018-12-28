<?php

namespace Solid\DependencyInversion\Refactored;


class SmtpMailer implements MailerInterface
{
    public function send()
    {
        return 'The email has been sent';
    }
}