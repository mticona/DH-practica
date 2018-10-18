<?php

class Connect_SQL{
  private $dsn;
  private $user;
  private $pass;

  public function __construct($dataBaseName, $userInput, $userPasss)
  {
    $this->dsn = "mysql:host=localhost;dbname={$dataBaseName}";
    $this->user= $userInput;
    $this->pass= $userPasss;
  }

  public function conectar()
  {
    try{
        $con = new PDO($this->dsn, $this->user, $this->pass);
        var_dump($con);

    }catch( PDOException $ex ){
        // echo 'Error con la BD, contacta con el administrador del sistema';
        echo 'El error es:'. $ex->getMessage();
    }
  }

}
