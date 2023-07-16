<?php
        $connection=mysqli_connect('localhost','root');
        mysqli_select_db($connection,'signupdb');
        if (isset($_POST["submit"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($connection, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if (empty($email) OR empty($password)) {
                echo "<script>alert('All fields are required')</script>";
                echo "<script>window.location = 'login.php'</script>";
               }
            if ($user) {
                if (password_verify($password, $user["Password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location:homepage.php");
                    die();
                }else{
                    echo "<script>alert('Password does not match')</script>";
                    echo "<script>window.location = 'login.php'</script>";
                }
            }else{
                echo "<script>alert('Email does not match')</script>";
                echo "<script>window.location = 'login.php'</script>";
            }
        }
?>