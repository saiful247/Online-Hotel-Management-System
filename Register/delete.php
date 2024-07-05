<?php

$conn =new mysqli("localhost", "root", "", "testlogreg" );

if (!$conn){
    die("Connection Failed!". mysqli_connect_error());
}
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql="delete from reg_user where id = $id";
    $result=mysqli_query($conn , $sql);
    if($result)
    {
    header('location:Home.html');
    }
}

?>