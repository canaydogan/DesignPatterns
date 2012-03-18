<?php

namespace DesignPatters\Factory;

abstract class AbstractAircraft
{

    public $passengers;
    public $cruisingSpeed;
    public $model;

    public function fly()
    {
        echo "$this->model $this->passengers yolcusu ile $this->cruisingSpeed KM hiz ile ucuyor.";
    }

}