<?php
class ProfesoreAdjunte extends Profesore{
  private $horasDeConsulta;
  public function __construct(string $nombre, string $apellido, int $codigo, int $hsConsulta ){
    parent::__construct(string $nombre, string $apellido, int $codigo);
    $this->horasDeConsulta = $hsConsulta
  }
  public function setHsConsulta($hs){
      $this->horasDeConsulta = $hs;
  }

  public function getHsConsultas(){
      return $this->horasDeConsulta;
  }
}
