<?php
 require_once __DIR__ . "/../Models/Movie.php";
 require_once __DIR__ . "/../Models/Genre.php";

$sci_fi = new Genre("Sci-Fi");
$adventure = new Genre("Adventure");
$romantic = new Genre("Romantic");

$avatar = new Movie("Avatar", "2h 22m",[$adventure,$sci_fi],"2009","8");
$titanic = new Movie ("Titanic","3h 30m", [$romantic],"1997","9");


$movies = [
  $avatar,
  $titanic,
  $interstellar = new Movie("Intersetllar", "2h 49m", [$sci_fi,$adventure], "2014","8,5"),

];