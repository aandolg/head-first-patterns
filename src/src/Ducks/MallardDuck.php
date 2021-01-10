<?php


namespace Aandolg\Ducks;


use Aandolg\Ducks\FlyBehavior\FlyWithWings;
use Aandolg\Ducks\QuackBehavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings;
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo "display";
    }
}
