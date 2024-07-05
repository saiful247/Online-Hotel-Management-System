<?php

$conn = mysqli_connect("localhost", "root", "", "testlogreg");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

?>

<?php

if (isset($_GET["id"]))
{
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "testlogreg";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM contact_us WHERE id = $id";
    $connection->query($sql);
}

header("location: view.php");
exit;
?>