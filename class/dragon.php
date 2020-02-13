<?php


class dragon extends personnage
{
    protected $nom = "Dragon";

    public function __construct()
    {//herite du constructeur parent
        parent::__construct();
        //et on peut surcharger le constructeur avec des propriétés propres
        $this->setLife(500);
    }


    private function addAction()
    {
        $this->actionsList[] = "Votre dragon se déplace en ".$this->x."/".$this->y;
    }
    public function testAction()
    {
        $this->addAction();
    }
}

