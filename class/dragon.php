<?php


class dragon extends personnage
{

    public function __construct()
    {//herite du constructeur parent
        parent::__construct();
        echo parent::TYPE;
//        echo self::TYPE; si const dans la class mêmee
        //et on peut surcharger le constructeur avec des propriétés propres
        $this->setLife(500);
        $this->setNom("Votre dragon");

    }

    public function testAction()
    {
        $this->addAction();
    }
}

