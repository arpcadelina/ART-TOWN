<?php

    //Initialize Variables

    $artistName       = "";
    $commissionerName = "";
    $feedbackDetails  = "";
    $errors         = array();

    //Connect to database

    $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    if(isset($_POST['add_feedback'])) {

        $artistName         = mysqli_real_escape_string($db, $_POST['artistName']);
        $commissionerName   = mysqli_real_escape_string($db, $_POST['commissionerName']);
        $feedbackDetails    = mysqli_real_escape_string($db, $_POST['feedbackDetails']);

        if (empty($artistName)) { array_push($errors, "Artist Name is required"); }
        if (empty($commissionerName)) { array_push($errors, "Commissioner Name is required"); }
        if (empty($feedbackDetails)) { array_push($errors, "Feedback Details is required"); }

            
            if (count($errors) == 0) {

                $query_feedback = "INSERT INTO feedbacks (artistname, commissionername, feedback) 
                VALUES ('$artistName', '$commissionerName', '$feedbackDetails')";

                mysqli_query($db, $query_feedback);
                $_SESSION['submit-feedback'] = "Your feedback was submitted.";
                $form_submit_message = $_SESSION['submit-feedback'];
                header('location: ../index.php');
            }
    }
?>