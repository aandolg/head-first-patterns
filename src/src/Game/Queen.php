<?php


namespace Aandolg\Game;


use Aandolg\Game\WeaponBehavior\AxeBehavior;
use Aandolg\Game\WeaponBehavior\KnifeBehavior;

class Queen extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new KnifeBehavior();
    }

    function fight()
    {
        $this->battleСry();
        $this->weaponBehavior->useWeapon();
    }
}
