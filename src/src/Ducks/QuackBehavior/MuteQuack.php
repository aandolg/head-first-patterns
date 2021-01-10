<?php


namespace Aandolg\Ducks\QuackBehavior;


class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "<< Silence >>";
    }
}
