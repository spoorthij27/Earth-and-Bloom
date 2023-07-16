<?php
$connection=mysqli_connect('localhost','root');
if($connection){
    echo "Connection established";

}
else {
    echo"failed";
}
mysqli_select_db($connection,'signupdb');
 $first_name =  $_POST['firstname'];
 $last_name = $_POST['lastname'];
 $email = $_POST['email'];
 $password =  $_POST['password'];
 $cpassword = $_POST['conpassword'];

$data="insert into user values ('$first_name',
'$last_name','$email','$password','$cpassword')";

mysqli_query($connection,$data);
header('location:signup_success.html');
?>
