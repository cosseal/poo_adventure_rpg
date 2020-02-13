<?php

require "classes/personnage.php";
require "classes/dragon.php";
require "classes/Class1.php";
require "classes/Classe2.php";

use classes\maClasse as Class1;
use classes2\maClasse as Classe2;

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

$class1 = new Class1;
$class2 = new Classe2;
$class1->test();
$class2->test();



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









