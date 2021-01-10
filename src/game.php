<?php
include_once "vendor/autoload.php";
echo '<pre>';
$knife = new Aandolg\Game\WeaponBehavior\KnifeBehavior();
$axe = new Aandolg\Game\WeaponBehavior\AxeBehavior();
$boxAndArrow = new Aandolg\Game\WeaponBehavior\BowAndArrowBehavior();
$sword = new Aandolg\Game\WeaponBehavior\SwordBehavior();

$king = new Aandolg\Game\King();
$knight = new Aandolg\Game\Knight();
$queen = new Aandolg\Game\Queen();
$troll = new Aandolg\Game\Troll();

$king->fight();
echo "<br>";
$knight->fight();
echo "<br>";
$troll->fight();
echo "<br>";
$queen->fight();
echo "<br>";
$troll->setWeapon($sword);
echo $troll->fight();
