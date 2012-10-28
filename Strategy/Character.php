<?php

namespace Strategy;

require_once 'Weapon.php';

class Character
{

    public $name;

    public function attack(\Strategy\Weapon $weapon, Character $target)
    {
        $weapon->fire($target);
    }

}