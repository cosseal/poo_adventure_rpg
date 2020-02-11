<?php


class personnage
{
    protected $x = 0;
    protected $y = 0;
    protected $actionsList = [];
    protected $nom;

    //propriété nom et définir un guetter et un setteur

    public function __construct()
    {

    }

    public function moveUp()
    {
        if ($this->checkMovey()) {
            $this->y -= 1;
            $this->addAction();
        }

    }

    public function moveLeft()
    {
        if ($this->checkMovex()) {
            $this->x -= 1;
            $this->addAction();
        }

    }

    public function moveRight()
    {
        $this->x += 1;
        $this->addAction();
    }

    public function moveDown()
    {
        $this->y += 1;
        $this->addAction();
    }

    public function getPosition()
    {
        return [
            "x" => $this->x,
            "y" => $this->y];
    }

    private function checkMovex()

    {
        return ($this->x > 0);
    }

    private function checkMovey()

    {
        return ($this->y > 0);
    }

    public function getActions()
    {
        return $this->actionsList;
    }

    private function addAction()
    {
        $this->actionsList[] = "Votre personnage se déplace en ".$this->x."/".$this->y;
    }

}