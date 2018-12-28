<?php

namespace Solid\InterfaceSegregation\Refactored;


class AndroidWorker implements WorkableInterface, ManageableInterface
{
    public function work()
    {
        return 'Android is working';
    }

    public function manage()
    {
        return $this->work();
    }
}