<?php
require_once("../db_config.php");
$cquery = "SELECT * FROM classes";
$cresults = $db_connection->query($cquery);
if (isset($_POST["createRecord"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dateofbirth = $_POST["dateofbirth"];
    $class = $_POST["class"];
    $query = "INSERT INTO students (firstName,lastName,dateOfBirth,class) VALUES (:firstname,:lastname,:dateofbirth,:class)";
    $result = $db_connection->prepare($query);
    $result->execute([
        "firstname"=> $firstname,
        "lastname"=> $lastname,
        "dateofbirth" => $dateofbirth,
        "class"=> $class
    ]);
    $rows = $result->rowCount();
    if ($rows == 1) {
        header("Location: list-students.php");
    }
}
include "../header.php";

?>
<div class="container">
    <form method="post">
        <div class="form-group row">
            <label for="firstname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <label for="lastname">Last name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <label for="dateofbirth">date of birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
            </div>
            <label for="class">Luokka</label>
            <div class="col-sm-10">
                <select name="class" id="">
                    <?php
                    foreach ($cresults as $result) {
                        echo "<option value=" . $result['classID'] . ">" . $result['className'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" name="createRecord" class="btn btn-success">Add record</button>
    </form>
</div>


<?php include "../footer.php"; ?>