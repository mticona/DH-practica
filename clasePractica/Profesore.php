<?php
abstract class Profesore{
  private $nombre;
  private $apellido;
  private $antiguedad;
  private $codigo;
  public function __construct(string $nombre, string $apellido, int $codigo){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->codigo = $codigo;
    $this->antiguedad = 0 ;
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
  public function setAntiguedad($antiguedad){
      $this->antiguedad = antiguedad;
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
  public function getAntiguedad(){
      return $this->antiguedad;
  }
}
