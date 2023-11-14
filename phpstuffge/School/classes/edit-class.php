<?php
require_once("../db_config.php");
$id = $_GET["id"];
$query = "SELECT * FROM classes WHERE ClassID = :id LIMIT 1";
$result = $db_connection->prepare($query);
$result->execute([
    "id" => $id
]);
$result = $result->fetch();
include "../header.php";

?>
<form method="post" action="updateclass.php">
    <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="number" name="id" id="id" readonly class="form-control"
                value="<?php echo $result["classID"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="nimi" class="col-sm-2 col-form-label">nimi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nimi" value="<?php echo $result["className"] ?>" name="nimi">
        </div>
    </div>
    <button type="submit" name="updateRecord" class="btn btn-success">Add class</button>
</form>
<?php include "../footer.php"; ?>