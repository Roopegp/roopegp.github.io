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
        for($i = 1; $i <=100;$i++) {
            if($i % 10 == 0 ) {
                echo "<b>" . $i . "</b> <br>";
            } else {
                echo $i . "<br>";
            }
        }
    ?> 
</body>
</html>