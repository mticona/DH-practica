<?php

class Movie{
    private $title;
    private $releaseDate;
    private $rating;

    public function __construct($inputTitle, $inputRating, $inputReleaseDate)
    {
        $this->title = $inputTitle;
        $this->releaseDate = $inputReleaseDate;
        $this->rating = $inputRating;
    }
    
    public function getTitle()
    {
        echo $this->title;
    }

    public function getRating()
    {
        echo $this->rating;
    }

    public function getReleaseDate()
    {
        echo $this->releaseDate;
    }

    public function setReleaseDate($inputReleaseDate)
    {
        if(validateDate($inputReleaseDate)){
            $this->releaseDate = $inputReleaseDate;
        }else{
            echo 'Ingrese una fecha válida para la película';
        }    
    }

    public function setRating($inputRating)
    {
        $this->rating = $inputRating;
    }

    public function setTitle($inputTitle)
    {
        $this->title = $inputTitle;
    }

    private function validateDate($inputReleaseDate)
    {
       $monthToValidate = substr($inputReleaseDate, 5, -3);
       $yearToValidate = substr($inputReleaseDate, 0, -6);
       $dayToValidate = substr($inputReleaseDate, -2);

       return checkdate($monthToValidate, $dayToValidate,$yearToValidate);
    }

    private function validateTitle($inputTitle)
    {
        $res = false;
        if(strlen($inputTitle)>1){
            $res = true;
        }
       return $res;
    }
    private function validateRating($inputTitle)
    {
        $res = false;
        if(strlen($inputTitle)>1){
            $res = true;
        }
       return $res;
    }

}