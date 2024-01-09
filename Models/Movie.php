<?php

/**
 * [Description Movie]
 */
class Movie
{
  public $title;
  public $lenght;
  public $genres;
  public $year;
  public $rating;

  function __construct($_title,$_lenght,$_genres,$_year = null,$_rating = null)
  {
    $this->title = $_title;
    $this->lenght = $_lenght;
    $this->genres = $_genres;
    $this->year = $_year;
    $this->rating = $_rating;
  }

  public function showRating(){
    return $this->rating . "/10";
  }
  
  public function get_movie_details()
  {
    $genres_string= "";
    foreach($this->genres as $key => $genre){
      $genres_string .= $genre->name;
      if($key < (count($this->genres) - 1)){
        $genres_string .= ", ";
      }
    }

    $result = "Title: {$this->title}. Time: {$this->lenght}. Genre: {$genres_string}.";
    return $result;
  }
}