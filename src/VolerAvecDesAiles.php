<?php
namespace Acme;

use Acme\IComportementVol;

class VolerAvecDesAiles implements IComportementVol
{
    public function voler() //
    {
        echo "Je vole !! ";
    }
    
}