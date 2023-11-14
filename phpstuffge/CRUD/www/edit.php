<?php 
    require_once("../db_config.php");
    $id = $_GET["id"];
    $query = "SELECT * FROM books WHERE id = :id LIMIT 1";
    $result = $db_connection -> prepare($query);
    $result -> execute([
        "id"=> $id
    ]);
    $result = $result -> fetch();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="update.php">
        <div class="form-group row"> 
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" name="id" id="id" readonly class="form-control" value="<?php echo $result["id"]?>">    
            </div>


        </div>
        <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name = "title" value="<?php echo $result["title"]?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" name = "author" value="<?php echo $result["author"]?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="genre" name = "genre" value="<?php echo $result["genre"]?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="height" name = "height" value="<?php echo $result["height"]?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="publisher" name = "publisher" value="<?php echo $result["publisher"]?>">
                </div>
            </div>
            <button type="submit" name="updateRecord" class="btn btn-success">Add record</button>
        </form>
    </div>
</body>
</html>