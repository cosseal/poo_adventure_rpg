<?php

$move = $_POST["move"];
$action = $_POST["action"];

switch ($move)
{
    case "top":
        $personnage->moveUp();
        break;

    case "left":
        $personnage->moveLeft();
        break;
    case "right":
        $personnage->moveRight();
        break;
    case "bottom":
        $personnage->moveDown();
        break;
}
$position = $personnage->getPosition();
