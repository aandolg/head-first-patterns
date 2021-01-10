<?php


namespace Aandolg\Ducks;


use Aandolg\Ducks\FlyBehavior\FlyNoWay;
use Aandolg\Ducks\QuackBehavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo "I’m a model duck";
    }
}
