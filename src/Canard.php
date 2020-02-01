<?php
/**
 * 
 */
namespace Acme;
use Acme\IComportementVol;
use Acme\IComportementCancan;
/**
 * Undocumented class
 */
abstract class Canard implements IComportementVol, IComportementCancan
{
  
    // $comportementVol;
    // $comportementCancan;
    
    
    public function Canard(){}
    
    public function afficher(){}
    public function effectuerVol()
    {
        $comportementVol = voler();
    }

    public function effectuerCancan()
    {
        $comportementCancan = cancaner();
    }
    
   
    public function nager()
    {
        echo 'Tout les canards flottent, même les leurres! ';
    }
    
}





















?>