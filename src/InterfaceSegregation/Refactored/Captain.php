<?php

namespace Solid\InterfaceSegregation\Refactored;


class Captain
{
    public function manage(ManageableInterface $worker)
    {
        return $worker->manage();
    }
}