<?php

use Behat\Behat\Context\Context;

class CustomContext1 implements Context
{
    private $service;

    public function __construct(SharedService $service)
    {
        $this->service = $service;
    }

    /**
     * @When first context gets shared service
     */
    public function action()
    {
        echo $this->service->random();
    }
}
