<?php

$con = new mysqli('localhost', 'root', '', 'testlogreg');
if($con){
    echo "Connection Successfull";
}else{
    die(mysqli_error($con));
}
?>