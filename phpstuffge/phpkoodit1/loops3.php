<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table> 
        <?php 
            for($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for($x =1; $x <= 10; $x++) {
                    echo "<td>" . $x*$i . "</td>";
                }
                echo "</tr>";
            }
    ?>
    </table>
</body>
</html>
