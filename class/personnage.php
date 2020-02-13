<?php


class personnage
{
    protected $x = 0;
    protected $y = 0;
    protected $actionsList = [];
    protected $nom;
    protected $life;



    public function __construct()
    {
        $this->setNom("Votre personnage");
        $this->setLife(100);

    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function getLife()
    {
        return $this->life;
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
        $this->actionsList[] = $this->nom.' se déplace en '.$this->x.'/'.$this->y;
    }

}