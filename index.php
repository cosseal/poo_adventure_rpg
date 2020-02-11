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


//partie test

$dragon =new dragon();
$dragon->testAction();

print_r($dragon->getActions());



include"controllers/main.php";

include"view/main.php";









