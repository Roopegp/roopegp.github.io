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
        <label for="num">Numerosi</label>
        <input type="number" id="num" name="num">
        <button type="submit">Hae kertotaulu</button>
        <?php
        if (isset($_GET["num"])) {
            $stuff = $_GET["num"];
            if ($stuff != "") {
                for ($i = 1; $i <= 10; $i++) {
                    echo "<br>" . $stuff . "*" . $i . "=" . $stuff * $i;
                }
            }
        }
        ?>
    </form>
</body>

</html>