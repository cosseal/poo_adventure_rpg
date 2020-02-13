<?php


class personnage
{
    protected $x = 0;
    protected $y = 0;
    protected $actionsList = [];
    protected $nom;
    protected $life;
    const MIN_POSITION =0;
    const MAX_POSITION =10;
    const TYPE = "Dragon Bleu";




    public function __construct()
    {
        $this->setNom("Votre personnage");
        $this->setLife(100);


    }

    protected function setX($value)
    {
        if($value >= self::MIN_POSITION and $value <= self::MAX_POSITION){
            $this->x = $value;
        }
    }

    protected function getX(): int
    {
        return $this->x;
    }


    protected function setY($value)
    {
        if($value >= self::MIN_POSITION and $value <= self::MAX_POSITION){
            $this->y = $value;
        }
    }

    public function getY(): int
    {
        return $this->y;
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
        if ($this->checkMoveY()) {
            $this->setY($this->y -1);
            $this->addAction();
        }

    }

    public function moveLeft()
    {
        if ($this->checkMoveX()) {
            $this->setX($this->x -1);
            $this->addAction();
        }

    }

    public function moveRight()
    {
        if ($this->checkMoveX()) {
            $this->setX($this->x +1);
            $this->addAction();
        }
    }

    public function moveDown()
    {
        if ($this->checkMoveY()) {
            $this->setY($this->y +1);
            $this->addAction();
        }
    }

    public function getPosition()
    {
        return [
            "x" => $this->x,
            "y" => $this->y];
    }

    private function checkMoveX()
    {
        return ($this->x >= self::MIN_POSITION and $this->x <= self::MAX_POSITION);
    }

    private function checkMoveY()
    {
        return ($this->y >= self::MIN_POSITION and $this->y <= self::MAX_POSITION);
    }

    public function getActions()
    {
        return $this->actionsList;
    }

    public function addAction()
    {
        $this->actionsList[] = $this->nom.' se déplace en '.$this->x.'/'.$this->y;
    }

}