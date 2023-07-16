<?php
$connection=mysqli_connect('localhost','root');
if($connection){
    echo "Connection established";

}
else {
    echo"failed";
}
mysqli_select_db($connection,'signupdb');
 $email = $_POST['email'];
 $password =  $_POST['password'];

$data="insert into logininfo values ('$email','$password')";

mysqli_query($connection,$data);
header('location:homepage.html');
?>