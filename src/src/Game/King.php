<?php


namespace Aandolg\Game;


use Aandolg\Game\WeaponBehavior\AxeBehavior;
use Aandolg\Game\WeaponBehavior\SwordBehavior;

class King extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordBehavior();
    }

    function fight()
    {
        $this->battleСry();
        $this->weaponBehavior->useWeapon();
    }
}
