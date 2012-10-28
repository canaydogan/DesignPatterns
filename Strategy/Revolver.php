<?php

namespace Strategy;

require_once 'Weapon.php';

use Strategy\Weapon;

class Revolver implements Weapon
{

    public function fire(\Strategy\Character $character)
    {
        printf("'%s' tabanca ile vuruldu", $character->name);
    }

}
