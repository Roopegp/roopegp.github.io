<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Jouluun on </p>
    <?php 
     $now = time(); // or your date as well
     $your_date = strtotime("2023-12-24");
     $datediff =  $your_date- $now;
     echo round($datediff / (60 * 60 * 24)) . " Päivaa";
    ?>
</body>
</html>