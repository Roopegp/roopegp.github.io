<?php

require_once("../db_config.php");
include "../header.php";

    if(isset($_POST["createRecord"])) {
        $nimi = filter_var($_POST["nimi"], FILTER_UNSAFE_RAW);
        $ohjaaja = filter_var($_POST["ohjaaja"], FILTER_UNSAFE_RAW);
        $nayttelijat = filter_var($_POST["nayttelijat"], FILTER_UNSAFE_RAW);
        $kesto = filter_var($_POST["kesto"], FILTER_SANITIZE_NUMBER_INT);
        $hankintapvm =filter_var($_POST["hankintapvm"], FILTER_UNSAFE_RAW);
        $kunto = filter_var($_POST["kunto"], FILTER_UNSAFE_RAW);

        $query = "INSERT INTO movie (nimi,ohjaaja,nayttelijat,kesto,hankintapvm,kunto) VALUES (:nimi, :ohjaaja, :nayttelijat, :kesto, :hankintapvm ,:kunto)";
        $result = $db_connection->prepare($query);
        $result -> execute([
            "nimi" => $nimi,
            "ohjaaja" => $ohjaaja,
            "nayttelijat"=> $nayttelijat,
            "kesto"=> $kesto,
            "hankintapvm" => $hankintapvm,
            "kunto" => $kunto
        ]);
        $rows = $result -> rowCount();
        if($rows == 1) {
            header("Location: movie-list.php");
    
        } else {
            $errorMessage = "Record creation failed";
    
        }
    }
?>

<div class="container">
    <?php
    if (isset($errorMessage)) {
        ?>
        <div class="alert alert-success">
            <strong>ERROR!</strong>
        </div>
        <?php
    }
    ?>
    <form method="post">
        <div class="form-group row">
            <label for="nimi" class="col-sm-2 col-form-label">nimi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nimi" name="nimi">
            </div>
        </div>
        <div class="form-group row">
            <label for="ohjaaja" class="col-sm-2 col-form-label">ohjaaja</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ohjaaja" name="ohjaaja">
            </div>
        </div>
        <div class="form-group row">
            <label for="nayttelijat" class="col-sm-2 col-form-label">nayttelijat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nayttelijat" name="nayttelijat">
            </div>
        </div>
        <div class="form-group row">
            <label for="kesto" class="col-sm-2 col-form-label">Kesto</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="kesto" name="kesto">
            </div>
        </div>
        <div class="form-group row">
            <label for="hankintapvm" class="col-sm-2 col-form-label">hankintapvm</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="hankintapvm" name="hankintapvm">
            </div>
        </div>
        <div class="form-group row">
            <label for="kunto" class="col-sm-2 col-form-label">Kuntoluokitus</label>
            <div class="col-sm-10">
                <select name="kunto" id="kunto">
                    <?php
                    foreach (arvosanat::cases() as $arvo) {
                        echo "<option value ='" . $arvo->name . "'>" . $arvo->name . "</option> <br>";
                    }
                    ?>

                </select>
            </div>
        </div>
        <button type="submit" name="createRecord" class="btn btn-success">Add record</button>

    </form>





    <?php include "../footer.php" ?>