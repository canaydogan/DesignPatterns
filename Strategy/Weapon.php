<?php

namespace Strategy;

interface Weapon
{

    public function fire(\Strategy\Character $character);

}