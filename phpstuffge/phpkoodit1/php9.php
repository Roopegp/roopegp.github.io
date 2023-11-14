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
        <input type="text" name="vuosi">
        <button type="submit">Submit</button>

    </form>

    <?php 
        if(isset($_GET["vuosi"])) {
            $vuosi = $_GET["vuosi"];
            if($vuosi % 400 == 0 || $vuosi % 100 == 0 || $vuosi % 4 == 0 ) {
                echo "Vuosi on Karkausvuosi";
            } else {
                echo "Vuosi Ei ole karkausvuosi";
            }


        }
    ?>
</body>
</html>