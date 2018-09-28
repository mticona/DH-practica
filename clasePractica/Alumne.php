<?php
class Persona{
  private $nombre;
  private $apellido;
  private $codigo;
  public function __construct(string $nombre, string $apellido, int $codigo){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->codigo = $codigo;
  }
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
  public function setApellido($apellido){
      $this->apellido = $apellido;
  }
  public function setCodigo($codigo){
      $this->codigo = $codigo;
  }
  public function getNombre(){
      return $this->nombre;
  }
  public function getApellido(){
      return $this->apellido;
  }
  public function getCodigo(){
      return $this->codigo;
  }  

}
