<?php


class dragon extends personnage
{


    private function addAction()
    {
        $this->actionsList[] = "Votre dragon se déplace en ".$this->x."/".$this->y;
    }
    public function testAction()
    {
        $this->addAction();
    }
}

