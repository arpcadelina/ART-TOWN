<?php

    //Initialize Variables
    $artworkName   = "";
    $clientName    = "";
    $clientEmail   = "";
    $contactNumber = "";
    $address       = "";
    $details       = "";
    $upload        = ""; 
    $errors         = array();  

    //Insert commission form data to db
    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    if (isset($_POST['add_commission'])) {

        $artworkName   = mysqli_real_escape_string($db, $_POST['artworkName']);
        $clientName    = mysqli_real_escape_string($db, $_POST['clientName']);
        $clientEmail   = mysqli_real_escape_string($db, $_POST['clientEmail']);
        $contactNumber = mysqli_real_escape_string($db, $_POST['contactNumber']);
        $address       = mysqli_real_escape_string($db, $_POST['address']);
        $details       = mysqli_real_escape_string($db, $_POST['details']);
        $upload        = mysqli_real_escape_string($db,$_FILES['upload']['name']);
        $status        = 'new';
        $target = '../uploaded/'. basename( $_FILES["upload"]["name"]);
        move_uploaded_file($_FILES['upload']['tmp_name'], $target);
        
        //Add Artist Name depending on Artwork Name
        $mclein = array("art-pt1", "art-dr1");
        $kapebeansis = array("art-dr2", "art-pt2");
        $chachiearts = array("art-dr3", "art-dr4");
        $aeonix = array("art-dg1", "art-dg2");
        $salmonfishuu = array("art-dg3","art-dg4", "art-dr5");
        $artofran = array("art-dg5", "art-dg6"); 

         //Use array_search, it returns an index if artworkname is inside the artistname arrays
        if (array_search($artworkName, $mclein, false) !== false) {

            $artistName = "mcleinarts@gmail.com";
        }     

            elseif (array_search($artworkName, $kapebeansis, false) !== false) {

                $artistName = "kapebeansis@gmail.com";
            }

            elseif (array_search($artworkName, $chachiearts, false) !== false) {

                $artistName = "chachiearts@gmail.com";
            }

            elseif (array_search($artworkName, $aeonix, false) !== false) {

                $artistName = "aeonix@gmail.com";
            }

            elseif (array_search($artworkName, $salmonfishuu, false) !== false) {

                $artistName = "salmonfishuu@gmail.com";
            }

            elseif (array_search($artworkName, $artofran, false) !== false) {

                $artistName = "artofran@gmail.com";
            }

                else {

                    $artistName = "yurieem@gmail.com";
                }
        
            //Check if form inputs are empty
            
            if (empty($artworkName)) { array_push($errors, "Artwork Name is required"); }
            if (empty($clientName)) { array_push($errors, "Name is required"); }
            if (empty($clientEmail)) { array_push($errors, "Email is required"); }
            if (empty($contactNumber)) { array_push($errors, "Contact Number is required"); }
            if (empty($address)) { array_push($errors, "Address is required"); }
            if (empty($details)) { array_push($errors, "Additional Detail is required"); }
            
            
                if (count($errors) === 0) {

                    $query_commission = "INSERT INTO commissions (artworkname, clientname, clientemail, contactnumber, address, details, upload, status, artistname) 
                    VALUES ('$artworkName', '$clientName', '$clientEmail', '$contactNumber', '$address', '$details', '$upload', '$status', '$artistname')";

                    

                    mysqli_query($db, $query_commission);
                    $_SESSION['submit-commission'] = "Your commission was submitted.";
                    $form_submit_message = $_SESSION['submit-commission'];
                    header('location: 2artworklist.php');
                }
    }
?>
