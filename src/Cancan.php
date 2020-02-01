<?php

namespace Acme;

use Acme\IComportementCancan;

class Cancan implements IComportementCancan
{
    public function cancaner()
    {
        echo " Cancan ";
    }
}