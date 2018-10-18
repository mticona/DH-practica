<?php
namespace App;

trait TraitLength
{
  private $ruta;

  public function verTrailer(){
    echo 'Estoy viendo un trailer de la película'.$this->getTitle();
  }

}
