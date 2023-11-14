<?php 
require_once("../db_config.php");
if (isset($_POST["updateRecord"])) {
    $nimi = $_POST["nimi"];
    $id = $_POST["id"];
    $query = "UPDATE classes SET className=:nimi WHERE classID=:id";
    $result = $db_connection->prepare($query);
    $result->execute([
        "nimi" => $nimi,
        "id" => $id
    ]);
    $rows = $result->rowCount();
    if ($rows = 1) {
        header("Location: list-classes.php");

    } else {
        $errorMessage = "Updating record failed";
    }

}
?>