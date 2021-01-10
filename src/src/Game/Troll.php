<?php


namespace Aandolg\Game;


use Aandolg\Game\WeaponBehavior\AxeBehavior;
use Aandolg\Game\WeaponBehavior\BowAndArrowBehavior;

class Troll extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new BowAndArrowBehavior();
    }

    function fight()
    {
        $this->battleСry();
        $this->weaponBehavior->useWeapon();
    }
}
