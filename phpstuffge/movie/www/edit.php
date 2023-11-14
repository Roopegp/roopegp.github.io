<?php
require_once("../db_config.php");
$id = $_GET["id"];
$query = "SELECT * FROM movie WHERE id = :id LIMIT 1";
$result = $db_connection->prepare($query);
$result->execute([
    "id" => $id
]);
$result = $result->fetch();

include "../header.php";
?>
<div class="container">
    <form method="post" action="update.php">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" name="id" id="id" readonly class="form-control" value="<?php echo $result["id"] ?>">
            </div>
            <div class="form-group row">
                <label for="nimi" class="col-sm-2 col-form-label">nimi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nimi"  value="<?php echo $result["nimi"] ?>"name="nimi">
                </div>
            </div>
            <div class="form-group row">
                <label for="ohjaaja" class="col-sm-2 col-form-label">ohjaaja</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ohjaaja" name="ohjaaja"  value="<?php echo $result["ohjaaja"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nayttelijat" class="col-sm-2 col-form-label">nayttelijat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nayttelijat" name="nayttelijat" value="<?php echo $result["nayttelijat"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kesto" class="col-sm-2 col-form-label">Kesto</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="kesto" name="kesto"  value="<?php echo $result["kesto"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="hankintapvm" class="col-sm-2 col-form-label">hankintapvm</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="hankintapvm" name="hankintapvm"  value="<?php echo $result["hankintapvm"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kunto" class="col-sm-2 col-form-label">Kuntoluokitus</label>
                <div class="col-sm-10">
                    <select name="kunto" id="kunto"  value="<?php echo $result["kunto"]  ?>">
                        <?php
                        foreach (arvosanat::cases() as $arvo) {
                            echo "<option value ='" . $arvo->name . "'>" . $arvo->name . "</option> <br>";
                        }
                        ?>

                    </select>
                </div>
            </div>
            <button type="submit" name="updateRecord" class="btn btn-success">Add record</button>
    </form>
</div>
<?php include "../footer.php" ?>