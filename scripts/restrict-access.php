<?php
    
    if (isset($_SESSION['success'])) {

        $status = 1;
        
        $success = $_SESSION['success'];

        $email = $_SESSION['email'];

        $db = mysqli_connect('localhost', 'root', '', 'sign-up');

        $query_check_user = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result_check_user = mysqli_query($db, $query_check_user);
        $check_user = mysqli_fetch_assoc($result_check_user);

        if ($check_user) {

            if ($check_user['email'] === $email) {

                
            }
        }

        else {

            header('location: 5sign-in-commissioner.php');
        }
    }
?>