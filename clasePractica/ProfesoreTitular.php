<?php
class ProfesoreTitular{
  private $especialidad;;
  public function __construct(string $nombre, string $apellido, int $codigo, string $especialidad){
    parent::__construct(string $nombre, string $apellido, int $codigo);
    $this->especialidad = $especialidad
  }

  public function getEspecialidad(){
      return $this->especialidad;
  }

  public function setEspecialidad(string s){
      $this->especialidad = s;
  }
}
