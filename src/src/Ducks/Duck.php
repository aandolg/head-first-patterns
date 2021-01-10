<?php
namespace Aandolg\Ducks;
use Aandolg\Ducks\FlyBehavior\FlyBehavior;
use Aandolg\Ducks\QuackBehavior\QuackBehavior;

abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    public abstract function display();

    public function performFly() {
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackBehavior->quack();
    }

    public function swim() {
        echo "All ducks float, even decoys!";
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior($quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

}
