<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'edu_site');

$user_name = $_POST['user_name'];
$password = $_POST['password'];

$s = "select * from users where user_name = '$user_name'";

$result =mysqli_query($con,$s);

$num =mysqli_num_rows($result);

    if($num == 1){
        echo "taken";
        
    }else{
        $log ="insert into users(user_name,password) values('$user_name','$password') ";
        mysqli_query($con,$log);
        echo "<script>alert('successfull')</script>";
        header("location:register.php");
    }


?>