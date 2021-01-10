<?php


namespace Aandolg\Game;


use Aandolg\Game\WeaponBehavior\WeaponBehavior;

abstract class Character
{
    /**
     * @var WeaponBehavior
     */
    protected $weaponBehavior;
    abstract function fight();

    public function battleСry() {
        $path = explode('\\', static::class);
        echo "I am <b>" . array_pop($path) . "</b>!!!";
    }

    /**
     * @param WeaponBehavior $weaponBehavior
     */
    public function setWeapon($weaponBehavior)
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}
