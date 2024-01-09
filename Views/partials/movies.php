
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
    <?php echo $movie->get_movie_details() ?>
  </li>
  <?php } ?>
</ul>
  
</body>
</html>