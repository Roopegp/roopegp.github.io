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
        $taulukko = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        foreach($taulukko as $solu) {
            echo $solu . "<br>";
        } 
        echo "Ja sitten kaikki parilliset <br>";
        $lenght = count($taulukko);
        for ($i = $lenght -1; $i > -1; $i--) {
            if($taulukko[$i] % 2 == 0) {
                echo $taulukko[$i] . "<br>";
            }
        }
    ?>
</body>
</html>