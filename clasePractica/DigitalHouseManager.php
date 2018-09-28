<?php
abstract class DigitalHouseManager{
  private $alumnes[];
  private $profesore[];
  private $cursos[];

  public function __construct(array $alumnes, array $profesores, array $cursos){
    $this->alumnes = $alumnes;
    $this->profesores = $profesores;
    $this->cursos = $cursos;

  }
  public function altaCurso(string $nombre, int $codigoCurso, int $cupoMaximo){
    $newCurso = new Curso($nombre, $codigo, $cupoMaximo);
    array_push($this->cursos, $newCurso);

  }
}
