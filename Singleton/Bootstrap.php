<?php

namespace Singleton;

require_once 'User.php';

class Bootstrap
{

    public function __construct()
    {
        $user = \Singleton\User::getInstance();
        $user->firstName = 'Can';
        $user->lastName = 'Aydoğan';
    }

}
