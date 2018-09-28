<?php
class Curso{
  private $nombre;
  private $codigo;
  private $titular;
  private $adjunte;
  private $capacidad;
  private $inscriptes[];

  public function __construct(string $nombre, int $codigo){
    $this->nombre = $nombre;
    $this->codigo = $codigo;
  }
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
  public function setCodigo($codigo){
      $this->codigo = $codigo;
  }
  public function getNombre(){
      return $this->nombre;
  } 
  public function getCodigo(){
      return $this->codigo;
  }
  public function getTitular(){
      return $this->titular;
  } 
  public function getAdjunte(){
      return $this->adjunte;
  } 
  public function listarAlumnes(){
      return $this->inscriptes;
  }  
  public function addAlumne(Alumne $a){
      if($a instanceOff Alumne){
	array_push($inscriptes, $a);
	return true;
      }else{
      	return false; 
      }
  } 

}
