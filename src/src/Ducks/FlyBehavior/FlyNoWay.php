<?php
namespace Aandolg\Ducks\FlyBehavior;


class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can’t fly";
    }
}
