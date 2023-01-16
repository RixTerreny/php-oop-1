<?php
include_once "./classi/movie.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $film1 = new film("Il gatto con gli stivali 2 - L'ultimo desiderio","avventura",2022,"ita");
    $film1-> showdata();

    echo ();

    $film1 = new film("Shrek","avventura",2001,"ita");
    $film1-> showdata();
    ?>
</body>
</html>