<?php
require_once("../db_config.php");
include "../header.php";
$query = "SELECT * FROM movie";
$results = $db_connection->query($query);
?>

<div class="container">
    <h1 class="display-1 text-center">Elokuvat</h1>
    <a href="create2.php" class="btn btn-info"> Lisää leffa!</a>
    <table class="table">
        <thead>
            <tr>
                <th>NIMI</th>
                <th>OHJAAJA</th>
                <th>Nayttelijat</th>
                <th>KESTO</th>
                <th>HANKITTU</th>
                <th>ARVOSANA</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($results as $result) {
                ?>
                <tr>
                    <td>
                        <?php echo $result["nimi"]; ?>
                    </td>
                    <td>
                        <?php echo $result["ohjaaja"]; ?>
                    </td>
                    <td>
                        <?php echo $result["nayttelijat"]; ?>
                    </td>
                    <td>
                        <?php echo $result["kesto"]; ?>
                    </td>
                    <td>
                        <?php echo $result["hankintapvm"]; ?>
                    </td>
                    <td>
                        <?php echo $result["kunto"]; ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $result["id"] ?>"><i class="fas fa-edit"> </i></a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $result["id"] ?>"><i class="fas fa-trash-alt"> </i></a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>

</div>


<?php include "../footer.php"; ?>