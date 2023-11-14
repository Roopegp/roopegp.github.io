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
        <label for="ylaraja">yläraja</label>
        <input type="number" name="ylaraja" id="ylaraja">
        <label for="alaraja">Alaraja</label>
        <input type="number" name="alaraja" id="alaraja">
        <button type="submit">Numerot välissä</button>
        <?php
        if (isset($_GET["ylaraja"])) {
            $upper = $_GET["ylaraja"];
            $lower = $_GET["alaraja"];
            for ($i = $lower; $i <= $upper; $i++) {
                if ($i % 10 == 0)
                    echo "<br>";
                echo $i . " ";
            }

        }
        ?>
    </form>
</body>

</html>