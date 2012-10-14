<?php

namespace Singleton;

class User
{

    public $firstName;

    public $lastName;

    private static $_instance;

    private function __construct(){}

    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new User();
        }

        return self::$_instance;
    }

    /**
     * @return string Kullanıcının ad ve soyadı.
     */
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

}
