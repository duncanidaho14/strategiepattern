<?php

namespace Acme;

use Acme\IComportementCancan;

class CancanMuet implements IComportementCancan
{
    public function cancaner() 
    {
        echo " Silence ";
    }
}