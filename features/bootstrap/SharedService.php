<?php

class SharedService
{
    private $random;

    public function __construct()
    {
        $this->random = rand(1, 1000);
    }

    public function random()
    {
        return $this->random;
    }
}
