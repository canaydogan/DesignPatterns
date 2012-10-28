<?php

namespace Strategy;

require_once 'Weapon.php';

use Strategy\Weapon;

class MachineGun implements Weapon
{

    public function fire(\Strategy\Character $character)
    {
        printf("'%s' makineli silah ile vuruldu", $character->name);
    }

}
