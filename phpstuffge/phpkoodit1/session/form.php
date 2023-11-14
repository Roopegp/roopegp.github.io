<?php 

    if(isset($_POST["test"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == "Mikko" && $password == "Miekkakala") {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location: etusivu.php");
        } else {
            //header("phpkoodit1/session/index.html");
            header("Location: index.html");
        }
        
    }    
?>
