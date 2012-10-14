<?php

namespace Singleton;

require_once 'User.php';

class Foo
{

    public function __construct()
    {
        $user = \Singleton\User::getInstance();

        //Kullanıcının ad ve soyad bilgilerini ekrana yaziyoruz.
        echo $user->getFullName();
    }

}
