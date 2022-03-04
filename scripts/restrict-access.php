<?php
    
    if (isset($_SESSION['success'])) {

        $status = 1;
        
        $success = $_SESSION['success'];

        $email = $_SESSION['email'];

        $db = mysqli_connect('localhost', 'root', '', 'sign-up');

        $query_check_user = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result_check_user = mysqli_query($db, $query_check_user);

        if (mysqli_num_rows($result_check_user) == 1) {

                
        }

        else {

            header('location: ../index.php#sign-in');
        }
    }

    else {

        header('location: ../index.php#sign-in');
    }
?>
