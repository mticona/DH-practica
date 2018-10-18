<?php
namespace App;
class Clip extends AudioVisual{

  public function __construct( string $title, string $fecha  )
  {
      parent::__construct( $title, $fecha);
  }
}
