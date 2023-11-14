<?php 
require_once("../db_config.php");
if (!isset($_GET["id"])) {
    header("Location: movie-list.php");
    die();
} else {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    if (!$id) {
        header("Location: movie-list.php");
        die();
    } else {
        $query = "DELETE FROM movie WHERE id = :id LIMIT 1";
        $result = $db_connection->prepare($query);
        $result->execute([
            "id" => $id
        ]);
        $rowsRemoved = $result->rowCount();
        if ($rowsRemoved == 1) {
            header("Location: movie-list.php");
        } else {
            $errorMessage = "record was not deleted";
        }
    }
}?>