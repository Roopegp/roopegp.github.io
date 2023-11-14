<?php
require_once("../db_config.php");
if (isset($_POST["updateRecord"])) {
    $nimi = filter_var($_POST["nimi"], FILTER_UNSAFE_RAW);
    $ohjaaja = filter_var($_POST["ohjaaja"], FILTER_UNSAFE_RAW);
    $nayttelijat = filter_var($_POST["nayttelijat"], FILTER_UNSAFE_RAW);
    $kesto = filter_var($_POST["kesto"], FILTER_SANITIZE_NUMBER_INT);
    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
    $hankintapvm = filter_var($_POST["hankintapvm"], FILTER_UNSAFE_RAW);
    $kunto = filter_var($_POST["kunto"], FILTER_UNSAFE_RAW);
    $query = "UPDATE movie SET Nimi=:nimi, Ohjaaja=:ohjaaja, Nayttelijat =:nayttelijat, Kesto=:kesto,Hankintapvm =:hankintapvm, Kunto = :kunto WHERE id=:id";
    $result = $db_connection->prepare($query);
    $result->execute([
        "nayttelijat"=> $nayttelijat,
        "ohjaaja"=> $ohjaaja,
        "nimi" => $nimi,
        "id" => $id,
        "hankintapvm" => $hankintapvm,
        "kunto" => $kunto,
        "kesto" => $kesto
    ]);
    $rows = $result->rowCount();
    if ($rows = 1) {
        header("Location: movie-list.php");

    } else {
        $errorMessage = "Updating record failed";
    }

}
?>