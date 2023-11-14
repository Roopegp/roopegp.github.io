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
        $array = array("Tammi","Helmi","Maalis","Huhti","Touko","Kesä","Heinä","Elo","Syys","Loka","Marras","Joulu");
        foreach($array as $kuu)  {
            echo $kuu . "kuu <br>";
        }
    ?>
</body>
</html>