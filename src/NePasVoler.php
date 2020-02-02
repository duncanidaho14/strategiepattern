<?php

namespace Acme;

use Acme\IComportementVol;

class NePasVoler implements IComportementVol
{
    public function voler() 
    {
        echo " Je ne sais pas voler ! ";
    }
}