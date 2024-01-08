<?php

require_once __DIR__ . "/Models/Movie.php";

$avatar = new Movie("Avatar", "2h 22m","Sci-Fi","2009","8");
$titanic = new Movie ("Titanic","3h 30m", "Romantic","1997","9");


var_dump($avatar);
echo $avatar->showRating();

var_dump($titanic);