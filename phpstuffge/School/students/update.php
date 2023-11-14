<?php 
require_once("../db_config.php");
$errorMessage;
if (isset($_POST["updateRecord"])) {
    $firstName = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dateofbirth = $_POST["dateofbirth"];
    $classId = $_POST["class"];
    $studentID = $_POST["studentId"];
    $query = "UPDATE students SET firstName=:firstname, lastName=:lastname, dateOfBirth=:dateofbirth, class=:classID WHERE studentID=:id";
    $result = $db_connection->prepare($query);
    $result->execute([
        "firstname"=> $firstName,
        "lastname" => $lastname,
        "dateofbirth"=> $dateofbirth,
        "classID"=> $classId,
        "id" => $studentID
    ]);
    $rows = $result->rowCount();
    if ($rows = 1) {
        header("Location: list-students.php");

    } else {
          $errorMessage = "Updating record failed";
    }

} 
include "../header.php";
if(isset($errorMessage)) { 
    echo $errorMessage;
}
include "../footer.php";
?>
