<?php

require_once 'Character.php';
require_once 'MachineGun.php';
require_once 'Revolver.php';
require_once 'Sniper.php';

$hedef = new \Strategy\Character();
$hedef->name = 'Emma Richardson';

$katil = new \Strategy\Character();
$katil->name = 'Albert Fish';

$machineGun = new \Strategy\MachineGun();
$revolver = new \Strategy\Revolver();
$sniper = new \Strategy\Sniper();

$katil->attack($machineGun, $hedef);
echo '<br />';
$katil->attack($revolver, $hedef);
echo '<br />';
$katil->attack($sniper, $hedef);