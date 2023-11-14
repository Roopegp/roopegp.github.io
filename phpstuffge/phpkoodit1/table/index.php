<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="row">
        <div class="navbar-expand xl">
            <div class="navbar bg-primary">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                        <a class="nav-link text-white " href="#">Selaa Autoja</a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link text-white " href="#">Lisää uusi Auto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $cars = array(
        array(1, "Volvo", 22, 18),// id brand, in stock, sold
        array(2, "BMW", 15, 13),
        array(3, "Saab", 5, 2),
        array(4, "Land Rover", 17, 15),
        array(4, "Land Rover", 17, 15),
        array(4, "Land Rover", 17, 15),
        array(4, "Land Rover", 17, 15)
    );

    ?>
    <div class="container-fluid">
        <div class="row">
            <table class="table-striped border border-3">
                <thead>
                    <tr>
                        <th>AutoID</th>
                        <th>Auto</th>
                        <th>Varastossa</th>
                        <th>Myyty</th>
                        <th>Muokkaa</th>
                        <th>Poista</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($cars as $car) {
                        echo "<tr>";
                        foreach($car as $value) {
                            echo "<td>" . $value ."</td>";
                        }
                        echo "<td><a href='edit_car.php?id=" . $car[0] ."'>"."<i class='bi bi-pencil-square'>" . "</i></a></td>";
                        echo "<td><a href='delete_car.php?id=" .$car[0]."'><i class='bi bi-trash'>" . "</i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>