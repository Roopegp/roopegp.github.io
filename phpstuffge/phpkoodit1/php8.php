<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="get">
        <input type="text" name="first">
        <input type="text" name="second">
        <button type="submit">Submit</button>
    </form>
    <?php 
        if(isset($_GET["second"])) {
            $first = $_GET["first"];
            $second = $_GET["second"];
            if($first % 2 == 0 && $second % 2 ==0 ) {
                echo "Molemmat ovat parillisia";
            } else {
                echo "Molemmat eivät olleet parillisia";
            }
        }
    ?>
</body>
</html>