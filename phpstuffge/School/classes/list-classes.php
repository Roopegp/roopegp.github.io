<?php
require_once("../db_config.php");
$query = "SELECT * FROM classes";
$results = $db_connection->query($query);
include "../header.php";
?>


<div class="container">
    <h1 class="display-1 text-center">Luokka</h1>
    <a href="add-class.php" class="btn btn-info"> Lisää Luokka</a>
    <table class="table">
        <thead>
            <tr>
                <th>ClassID</th>
                <th>ClassName</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($results as $result) {
                ?>
                <tr>
                    <td>
                        <?php echo $result["classID"]; ?>
                    </td>
                    <td>
                        <?php echo $result["className"]; ?>
                    </td>
                    <td>
                        <a href="edit-class.php?id=<?php echo $result["classID"] ?>"><i class="fas fa-edit"> </i></a>
                    </td>
                    <td>
                        <a href="delete-class.php?id=<?php echo $result["classID"] ?>"><i class="fas fa-trash-alt"> </i></a>
                    </td>
                <?php
                
            }
            ?>

        </tbody>
    </table>
</div>

<?php
include "../footer.php";
?>