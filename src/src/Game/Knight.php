<?php


namespace Aandolg\Game;


use Aandolg\Game\WeaponBehavior\AxeBehavior;

class Knight extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new AxeBehavior();
    }

    function fight()
    {
        $this->battleСry();
        $this->weaponBehavior->useWeapon();
    }
}
