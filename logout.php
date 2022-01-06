<?php

    session_start();
    session_destroy();

    header("Location: login.php");

    // if($_SESSION['user_id'])
    // {
    //     unset($_SESSION['user_id']);
    // }

    // header("Location: login.php");
    // die;
?>