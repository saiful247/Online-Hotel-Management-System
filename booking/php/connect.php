<?php

    require 'config.php';

    if (isset($_POST['guest_details']))
    {   
        
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postalcode = $_POST['postal_code'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        


        
        $data = "INSERT INTO guest_info (f_name, l_name, address, city, postal_code, country, email, mobile) VALUES ('$firstname', '$lastname', '$address', '$city', '$postalcode',  '$country', '$email', '$mobile')";

        $all = mysqli_query($connection, $data);
            
        if($all)
        {
            header('location:../booking.php');
        }
        else{
            die(mysqli_error($connection));
        }
    }
        
    mysqli_close($connection);

?>