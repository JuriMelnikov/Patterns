<?php
use Strategy/Quack;
use Strategy/Fly;
use Strategy/Ducks;


function __autoload($class_name) { 
     include_once($class_name . ".php"); 
} 
$Ducks[]= new classSimpleDuck();
$Ducks[]= new classExoticDuck();
$Ducks[]= new classBlueDuck();
$Ducks[]= new classWoodenDuck();
$Ducks[]= new classRubberDuck();
foreach ($Ducks as $value) {
	$value->display();
	$value->swim();
	if($value instanceof iFlyable) $value->fly();
	if($value instanceof iQuackble) $value->quack();
	
	
}

?>	

