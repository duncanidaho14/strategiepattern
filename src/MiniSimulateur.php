<?php

namespace Acme;
use Acme\Colvert;

use Acme\IComportementVol;
use Acme\IComportementCancan;

class MiniSimulateur 
{
    public function main()
    {
        $colvert = new Colvert();
        $colvert->cancaner();
        $colvert->voler();
    }
}