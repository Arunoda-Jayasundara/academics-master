<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'edu_site');

$user_name = $_POST['user_name'];
$password = $_POST['password'];

$s = "select * from users where user_name = '$user_name' && password ='$password' ";

$result =mysqli_query($con,$s);

$num =mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['user_name'] = $user_name;
        header("location:hellouser.php");
    }else{
       
        header("location : login.php");
        
    }


?>