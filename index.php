<?php

require "class/personnage.php";
require"class/dragon.php";

///à ne pas faire, la session...juste pour que l'exemple fonctionne ici
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
new dragon();
//on peut accéder à une constante parente mais pas lui donnerune nouvelle valeur
//echo $dragon->TYPE; ne fonctionne pas
//echo $dragon::TYPE;

$dragon->testAction();

print_r($dragon->getActions());

echo personnage::getNumInstances();

include"controllers/main.php";

include"view/main.php";









