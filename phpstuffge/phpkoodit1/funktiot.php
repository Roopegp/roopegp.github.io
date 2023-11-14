<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name = "summa" placeholder="Lisää tähän maksusi ilman veroa">
        <button type="submit">Laske</button>
    </form>
    <?php 
        function getALV($num) {
            return $num * 1.24;
        }
        if(isset($_GET["summa"])) {
            echo getALV($_GET["summa"]);
        }        
    ?>
</body>
</html>