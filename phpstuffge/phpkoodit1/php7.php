<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php7.php" method="get">
        <input type="text" name="numero">
        <button type="submit">SUBMIT</button>
    </form>
    <?php 
        if(isset($_GET["numero"])) {
            $input = $_GET["numero"];
            if($input > 5) {
                echo "Suurempi kuin 5";
            } else {
                echo "Pienempi Luku annettu";
            }
        }
    ?>
</body>
</html>