<?php

$conn =new mysqli("localhost", "root", "", "testlogreg" );

if (!$conn){
    die("Connection Failed!". mysqli_connect_error());
}
/*
else{
    echo"Database detected Success!";
}
*/
?>