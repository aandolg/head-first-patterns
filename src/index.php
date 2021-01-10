<?php

use Aandolg\Ducks\FlyBehavior\FlyRocketPowered;

include_once "vendor/autoload.php";
echo '<pre>';
$mallard = new Aandolg\Ducks\MallardDuck();
$mallard->performQuack();
echo "<br/>";
$mallard->performFly();
echo "<br/>";

$model = new \Aandolg\Ducks\ModelDuck();
$model->performQuack();
echo "<br/>";
$model->performFly();
echo "<br/>";
$model->setFlyBehavior(new FlyRocketPowered);
$model->performFly();
