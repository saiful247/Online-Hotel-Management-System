<?php

if (isset($_GET["id"]))
{
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "testlogreg";

    
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM customer WHERE id = $id";
    $connection->query($sql);
}

header("location: view.php");
exit;
?>