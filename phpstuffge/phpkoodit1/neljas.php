<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="GET">
        <input type="text" name="teksti">
        <button>SUBMIT</button>
    </form>
    <?php
        $name = $_GET['teksti'];
        echo strlen($name);
    ?>
</body>
</html>