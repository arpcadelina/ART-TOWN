<?php

    //Initialize Variables

    $artistName       = "";
    $commissionerName = "";
    $feedbackDetails  = "";
    $ratingNum        = "";
    $errors         = array();

    //Connect to database

    $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    if(isset($_POST['add_feedback'])) {

        $artistName         = mysqli_real_escape_string($db, $_POST['artistName']);
        $commissionerName   = mysqli_real_escape_string($db, $_POST['commissionerName']);
        $feedbackDetails    = mysqli_real_escape_string($db, $_POST['feedbackDetails']);
        $ratingNum          = mysqli_real_escape_string($db, $_POST['ratingNum']);

        if (empty($artistName)) { array_push($errors, "Artist Name is required"); }
        if (empty($commissionerName)) { array_push($errors, "Commissioner Name is required"); }
        if (empty($feedbackDetails)) { array_push($errors, "Feedback Details is required"); }
        if (empty($ratingNum)) { array_push($errors, "Rating is required"); }


            
            if (count($errors) === 0) {

                $query_feedback = "INSERT INTO feedbacks (artistname, commissionername, rating, feedback) 
                VALUES ('$artistName', '$commissionerName', '$ratingNum', '$feedbackDetails')";

                mysqli_query($db, $query_feedback);
                $_SESSION['submit-feedback'] = "Your feedback was submitted.";
                $form_submit_message = $_SESSION['submit-feedback'];
                header('location: 3commissionlist.php');
            }
    }
?>
