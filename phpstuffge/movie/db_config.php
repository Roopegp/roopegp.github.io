<?php
enum arvosanat {
    case T1;
    case T2;
    case H3;
    case H4;
    case K5;
}
//DB vars
$db_host = "localhost";
$db_name = "movies";
$db_username = "root";
$db_password = "";
$dsn = "mysql:host=$db_host; dbname=$db_name";
try {
    $db_connection = new PDO($dsn, $db_username, $db_password);
} catch (Exception $e) {
    echo "there was a failure" . $e->getMessage();

}

?>