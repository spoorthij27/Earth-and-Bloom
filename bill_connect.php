<?php
        $connection=mysqli_connect('localhost','root');
        mysqli_select_db($connection,'order');
        if (isset($_POST["submit"])) {
            $email = $_POST['email'];
            $address =  $_POST['address'];
            $city= $_POST['city'];
            $country =  $_POST['country'];
            $zipcode= $_POST['zipcode'];
            
            
            $sql = "INSERT INTO billadd VALUES ('$email', '$address','$city','$country','$zipcode')";
            mysqli_query($connection,$sql);
            header('location:paymentmode.php');
           }
          

        ?>