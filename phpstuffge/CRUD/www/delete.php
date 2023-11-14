<?php
$errorMessage;

!require_once("../db_config.php");
if (!isset($_GET["id"])) {
    header("Location: list-books.php");
    die();
} else {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    if (!$id) {
        header("Location: list-books.php");
        die();
    } else {
        $query = "DELETE FROM books WHERE id = :id LIMIT 1";
        $result = $db_connection->prepare($query);
        $result->execute([
            "id" => $id
        ]);
        $rowsRemoved = $result->rowCount();
        if ($rowsRemoved == 1) {
            header("Location: list-books.php");
        } else {
            $errorMessage = "record was not deleted";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($errorMessage)) {
            ?>
            <div class="alert alert-danger">
                <strong>ERROR!</strong>
                <?php echo $errorMessage ?> go back to <a href="list-books.php">Go back</a>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>