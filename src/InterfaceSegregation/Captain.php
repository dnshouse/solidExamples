<?php

namespace Solid\InterfaceSegregation;

interface WorkerInterface
{
    public function work();

    public function sleep();
}

class HumanWorker implements WorkerInterface
{
    public function work()
    {
        return 'Human is working';
    }

    public function sleep()
    {
        return 'Human is sleeping';
    }
}

class AndroidWorker implements WorkerInterface
{
    public function work()
    {
        return 'Android is working';
    }

    public function sleep()
    {
        return null;
    }
}

class Captain
{
    public function manage(WorkerInterface $worker)
    {
        $worker->work();
        $worker->sleep();
    }
}