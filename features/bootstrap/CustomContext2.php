<?php

use Behat\Behat\Context\Context;

class CustomContext2 implements Context
{
    private $service;

    public function __construct(SharedService $service)
    {
        $this->service = $service;
    }

    /**
     * @Then the second gets the same
     */
    public function action()
    {
        echo $this->service->random();
    }
}
