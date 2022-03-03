<?php

    session_start();

/*
    if (!isset($_SESSION['email'])) {  

        $_SESSION['msg'] = "You must log in first";
        header('location: ./html/4sign-in-artist.php');
    }
*/

    if (isset($_GET['logout'])) {


        session_destroy();
        unset($_SESSION['email']);
        header("location: index.php");
    }
?>
