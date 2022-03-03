<?php

    //Initialize Variables
    $clientName    = "";
    $clientEmail   = "";
    $contactNumber = "";
    $address       = "";
    $details       = "";
    $errors         = array();  

    //Insert commission form data to db
    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    if (isset($_POST['add_commission'])) {

        $clientName    = mysqli_real_escape_string($db, $_POST['clientName']);
        $clientEmail   = mysqli_real_escape_string($db, $_POST['clientEmail']);
        $contactNumber = mysqli_real_escape_string($db, $_POST['contactNumber']);
        $address       = mysqli_real_escape_string($db, $_POST['address']);
        $details       = mysqli_real_escape_string($db, $_POST['details']);

            //Check if form inputs are empty

            if (empty($clientName)) { array_push($errors, "Name is required"); }
            if (empty($clientEmail)) { array_push($errors, "Email is required"); }
            if (empty($contactNumber)) { array_push($errors, "Contact Number is required"); }
            if (empty($address)) { array_push($errors, "Address is required"); }
            if (empty($details)) { array_push($errors, "Additional Detail is required"); }
            
                if (count($errors) == 0) {

                    $query_commission = "INSERT INTO commissions (clientname, clientemail, contactnumber, address, details) 
                    VALUES ('$clientName', '$clientEmail', '$contactNumber', '$address', '$details')";

                    mysqli_query($db, $query_commission);
                    $_SESSION['submit-commission'] = "Your commission was submitted.";
                    $form_submit_message = $_SESSION['submit-commission'];
                    header('location: ../index.php');
                }
    }
?>