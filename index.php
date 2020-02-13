<?php

require "class/personnage.php";
require"class/dragon.php";
session_start();
if (isset ($_SESSION["personnage"]))
{
    $personnage = $_SESSION["personnage"];
}

else {
    $personnage = new personnage();
    $_SESSION["personnage"] = $personnage;


}
$personnage->addAction();




//partie test

//une constante en procédurale
//define("TEST",1);
//echo TEST;





$dragon =new dragon();
//on peut accéder à une constante parente mais pas lui donnerune nouvelle valeur
//echo $dragon->TYPE; ne fonctionne pas
//echo $dragon::TYPE;

$dragon->testAction();

print_r($dragon->getActions());



include"controllers/main.php";

include"view/main.php";









