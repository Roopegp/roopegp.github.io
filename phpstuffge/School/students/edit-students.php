<?php
require_once("../db_config.php");
$id = $_GET["id"];
$query = "SELECT * FROM students WHERE studentID = :id LIMIT 1";
$result = $db_connection->prepare($query);
$result->execute([
    "id" => $id
]);
$result = $result->fetch();
$cquery = "SELECT * FROM classes";
$classesResult = $db_connection->query($cquery);
include "../header.php";
include "../navStudent.php";
?>
<div class="container">
    <form method="post" action="update.php">
        <div class="form-group row">
        <label for="studentId" class="col-sm-2 col-form-label">studentID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="studentId" name="studentId"  readonly value=<?php echo $id;?>>
            </div>
            <label for="firstname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname"  value=<?php echo $result["firstName"];?>>
            </div>
            <label for="lastname">Last name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname"  value=<?php echo $result["lastName"];?>>
            </div>
            <label for="dateofbirth">date of birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" value=<?php echo $result["dateOfBirth"];?>>
            </div>
            <label for="class">Luokka</label>
            <div class="col-sm-10">
                <select name="class" id="">
                    <?php
                    foreach ($classesResult as $res) {
                        if($res["classID"] == $result["class"]) {
                            echo "<option selected value=" . $res['classID'] . ">"  . $res['className'] . "</option>";    
                        } else {
                        echo "<option "  ."value=" . $res['classID'] . ">"  . $res['className'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" name="updateRecord" class="btn btn-success">Add record</button>
    </form>
</div>


<?php include "../footer.php"; ?>