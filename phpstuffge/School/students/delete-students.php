<?php
require_once("../db_config.php");
if (!isset($_GET["id"])) {
    header("Location: list-students.php");
    die();
} else {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    if (!$id) {
        header("Location: list-students.php");
        die();
    } else {
        $query = "DELETE FROM students WHERE studentID = :id LIMIT 1";
        $result = $db_connection->prepare($query);
        $result->execute([
            "id" => $id
        ]);
        $rowsRemoved = $result->rowCount();
        if ($rowsRemoved == 1) {
            header("Location: list-students.php");
        } else {
            $errorMessage = "record was not deleted";
        }
    }
}
include "../header.php";
include "../navStudent.php";
?>