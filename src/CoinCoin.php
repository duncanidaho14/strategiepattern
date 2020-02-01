<?php

namespace Acme;

use Acme\IComportementCancan;

class CoinCoin implements IComportementCancan
{
    public function cancaner()
    {
        echo " CoinCoin ";
    }
}