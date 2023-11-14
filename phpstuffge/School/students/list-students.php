<?php
require_once("../db_config.php");
$query = "SELECT * FROM students";
$results = $db_connection->query($query);

include "../header.php";
?>


<div class="container">
    <h1 class="display-1 text-center">Opiskelijat</h1>
    <a href="add-student.php" class="btn btn-info">Lisää uusi opiskelija</a>
    <table class="table">
        <thead>
            <tr>
                <th>StudentID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>DateOfbirth</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($results as $result) {
                $queryClass = "SELECT * FROM  classes WHERE classID = :id LIMIT 1";
                $cResult = $db_connection->prepare($queryClass);
                $id = $result["class"];
                $cResult->execute([
                    "id" => $id
                ]);
                ?>
                <tr>
                    <td>
                        <?php echo $result["studentID"]; ?>
                    </td>
                    <td>
                        <?php echo $result["firstName"]; ?>
                    </td>
                    <td>
                        <?php echo $result["lastName"]; ?>
                    </td>
                    <td>
                        <?php echo $result["dateOfBirth"]; ?>
                    </td>
                    <td>
                        <?php
                        foreach ($cResult as $res) {
                            echo $res["className"];
                        }
                        ?>
                    </td>
                    <td>
                        <a href="edit-students.php?id=<?php echo $result["studentID"] ?>"><i class="fas fa-edit"> </i></a>
                    </td>
                    <td>
                        <a href="delete-students.php?id=<?php echo $result["studentID"] ?>"><i class="fas fa-trash-alt">
                            </i></a>
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