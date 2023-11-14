<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form method="post">
        <label for="vastaus"></label>
        <input type="text" name="vastaus" id="vastaus">
        <button type="submit">Vastaa</button>

    </form>
    <?php 
        if(!isset($_SESSION["word"])) {
            $words = file("sanat.txt");
            $word = rtrim(strtoupper($words[array_rand($words)]));
            $_SESSION["word"] = $word;
            echo "Kirjaimet <br>" . str_shuffle($word);
        } 
        if(isset($_POST["vastaus"])) {
            if(strtoupper($_POST["vastaus"]) == $_SESSION["word"]) {
                unset($_SESSION["word"]);
                echo "<br> you won!";
            } else {
                echo "try again!";
            }
        }

    ?>
</body>
</html>
