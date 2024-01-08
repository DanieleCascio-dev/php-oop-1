<?php

/**
 * [Description Movie]
 */
class Movie
{
  public $title;
  public $lenght;
  public $genre;
  public $year;
  public $rating;

  function __construct($_title,$_lenght,$_genre,$_year = null,$_rating = null)
  {
    $this->title = $_title;
    $this->lenght = $_lenght;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->rating = $_rating;
  }

  public function showRating(){
    return $this->rating . "/10";
  }
  
}