<?php
require_once('vendor/autoload.php');

use \App\Classes\Computer;
use \App\Classes\ComputerMotherboard;
use \App\Classes\ComputerFloppyDrive;

$computer = new ComputerMotherboard(new Computer());

echo "<b>Computer 1</b><br/>";
echo "Name: ".$computer->getName()."<br/>";
echo "Cost: ". $computer->getCost()."<br/>";
echo "Parts: ".implode($computer->getParts(),', ')."<br/><br/>";

$computer2 = new ComputerFloppyDrive(new ComputerMotherboard(new Computer()));

echo "<b>Computer 2</b><br/>";
echo "Name: ".$computer2->getName()."<br/>";
echo "Cost: ". $computer2->getCost()."<br/>";
echo "Parts: ".implode($computer2->getParts(),', ');