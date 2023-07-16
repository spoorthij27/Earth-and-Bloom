<?php
        $connection=mysqli_connect('localhost','root');
        mysqli_select_db($connection,'signupdb');
        if (isset($_POST["submit"])) {
            $first_name =  $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $password =  $_POST['password'];
            $cpassword = $_POST['conpassword'];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           
           
           if (empty($first_name) OR empty($email) OR empty($password) OR empty($cpassword)) {
            echo "<script>alert('All fields are required')</script>";
            echo "<script>window.location = 'signup.php'</script>";
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Email is not valid')</script>";
            echo "<script>window.location = 'signup.php'</script>";
           }
           if (strlen($password)<8) {
            echo "<script>alert('Password must be atleast 8 characters long')</script>";
            echo "<script>window.location = 'signup.php'</script>";
           }
           if ($password!==$cpassword) {
            echo "<script>alert('Password does not match')</script>";
            echo "<script>window.location = 'signup.php'</script>";
           }
           $sql = "SELECT * FROM user WHERE email = '$email'";
           $result = mysqli_query($connection, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            echo "<script>alert('Email already exists!')</script>";
            echo "<script>window.location = 'signup.php'</script>";
           }
           else{
            
            $sql = "INSERT INTO user (FirstName, LastName, Email, Password) VALUES ('$first_name','$last_name','$email', '$passwordHash')";
            mysqli_query($connection,$sql);
            header('location:signup_success.html');
           }
          

        }
        ?>