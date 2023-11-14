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
    if (!isset($_SESSION["word"])) {
        $words = file("words.txt");
        $word = rtrim(strtoupper($words[array_rand($words)]));
        $_SESSION["word"] = $word;
        $_SESSION["guesses"] = [];
        $_SESSION["lives"] = 6;
        if (!isset($_SESSION["gamesWon"])) {
            $_SESSION["gamesWon"] = 0;
        }
        if (!isset($_SESSION["gamesLost"])) {
            $_SESSION["gamesLost"] = 0;
        }
    }
    if (isset($_POST["guess"])) {
        if (!in_array($_POST["guess"], $_SESSION["guesses"])) {
            if (strpos($_SESSION["word"], $_POST["guess"]) === false) {
                $_SESSION["lives"]--;
            }
            $_SESSION["guesses"][] = $_POST["guess"];
            //array_push($_SESSION["guesses"],$_POST["guess"]);
        } else {
            echo "already guessed";
        }
    }
    $remainingletters = array_diff(range("A", "Z"), $_SESSION["guesses"]);
    if ($_SESSION["lives"] <= 0) {
        echo "You suck! you died!";
        echo "<br> the word was " . $_SESSION["word"];
        $_SESSION["gamesLost"]++;
        unset($_SESSION["word"]);
    } else {
        $lettersleftToGuess = 0;
        $state = "";
        $wordlen = strlen($_SESSION["word"]);
        for ($i = 0; $i < $wordlen; $i++) {
            if (in_array($_SESSION["word"][$i], $_SESSION["guesses"])) {
                $state .= $_SESSION["word"][$i];
            } else {
                $state .= "_";
                $lettersleftToGuess++;
            }
            $state .= " ";
        }
        echo $state;
        if ($lettersleftToGuess == 0) {
            echo "You won!";
            $_SESSION["gamesWon"]++;
        }
        if ($_SESSION["lives"] != 0 && $lettersleftToGuess != 0) {
            ?>
            <form action="" method="post">
                <select name="guess" id="guess">
                    <?php
                    foreach ($remainingletters as $letter) {
                        echo "<option value='" . strtoupper($letter) . "'>" . strtoupper($letter) . "</option>";
                    }
                    ?>
                </select>
                <input type="submit" name="submit" value="GUESS">

            </form>
            <?php
        }
    } ?>





</body>

</html>