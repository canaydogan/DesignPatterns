<?php

namespace Strategy;

require_once 'Weapon.php';

use Strategy\Weapon;

class Sniper implements Weapon
{

    public function fire(\Strategy\Character $character)
    {
        printf("'%s' sniper ile vuruldu", $character->name);
    }

}
