<?php
require_once("../db_config.php");
if(isset($_POST["createRecord"])) { 
    $className = $_POST["nimi"];
    $query = "INSERT INTO classes (className) VALUES (:className)";
    $result =$db_connection -> prepare($query);
    $result -> execute([
        "className"=> $className
    ]);
    $rows = $result -> rowCount();
    if($rows == 1) { 
        header("Location: list-classes.php");
    }
}
include "../header.php";
?>
<form method="post">
    <div class="form-group row">
        <label for="nimi" class="col-sm-2 col-form-label">Luokan nimi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nimi" name="nimi">
        </div>
    </div>
    <button type="submit" name="createRecord" class="btn btn-success">Add record</button>
</form>


<?php include "../footer.php"; ?>