<?php


namespace Acme;
use Acme\Canard;
use Acme\IComportementVol;
use Acme\IComportementCancan;

class Colvert extends Canard
{
    public function Colvert()
    {
        $comportementCancan = new Cancan();
        $comportementVol = new VolerAvecDesAiles();
    }

    public function afficher()
    {
        echo " Je suis un vrai colvert ";
    }

    
}