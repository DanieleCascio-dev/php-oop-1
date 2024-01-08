<?php

require_once __DIR__ . "/Models/Movie.php";

$avatar = new Movie("Avatar", "2h 22m","Sci-Fi","Adventure","2009","8");
$titanic = new Movie ("Titanic","3h 30m", "Romantic",null,"1997","9");


$movies = [
  $avatar,
  $titanic,
  $interstellar = new Movie("Intersetllar", "2h 49m", "Sci-fi",null, "2014","8,5"),

];

var_dump($avatar);
echo $avatar->showRating();

var_dump($titanic);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<ul>
  <?php foreach($movies as $movie){ ?>
  <li>
    <?php echo $movie->title ?>
    <?php echo $movie->genre ?>
    <?php echo $movie->showRating() ?>
  </li>
  <?php } ?>
</ul>
  
</body>
</html>