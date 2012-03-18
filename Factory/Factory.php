<?php

namespace DesignPatters\Factory;

require_once 'Airbus.php';
require_once 'Boeing.php';
require_once 'Cessna.php';

class Factory
{

    public static function create($model)
    {
        switch ($model) {
            case 'Boeing 747-8':
                $aircraft = new Boeing();
                $aircraft->model = '747-8';
                $aircraft->cruisingSpeed = 917;
                $aircraft->passengers = 500;
                break;
            case 'Airbus a380':
                $aircraft = new Airbus();
                $aircraft->model = 'a380';
                $aircraft->cruisingSpeed = 945;
                $aircraft->passengers = 853;
                break;
            default:
                throw new \RuntimeException('Undefined aircraft');
        }

        return $aircraft;
    }

}
