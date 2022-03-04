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
        $mclein = array("Drawing - Scenery", "Painting - Scenery");
        $kapebeansis = array("Drawing - Fur Babies", "Painting - Fur Babies");
        $chachiearts = array("Drawing - Portrait", "Drawing - Group");
        $aeonix = array("Digital Art - Group", "Digital Art - Portrait");
        $salmonfishuu = array("Digital Art - Chibi","Digital Art - Fan Art", "Drawing - Fan Art");
        $artofran = array("Digital Art - Anime Me", "Digital Art - Orginal Character"); 

         //Use array_search, it returns an index if artworkname is inside the artistname arrays
        if (array_search($artworkName, $mclein, false) !== false) {

            $artistEmail = "mcleinarts@gmail.com";
        }     

            elseif (array_search($artworkName, $kapebeansis, false) !== false) {

                $artistEmail = "kapebeansis@gmail.com";
            }

            elseif (array_search($artworkName, $chachiearts, false) !== false) {

                $artistEmail = "chachiearts@gmail.com";
            }

            elseif (array_search($artworkName, $aeonix, false) !== false) {

                $artistEmail = "aeonix@gmail.com";
            }

            elseif (array_search($artworkName, $salmonfishuu, false) !== false) {

                $artistEmail = "salmonfishuu@gmail.com";
            }

            elseif (array_search($artworkName, $artofran, false) !== false) {

                $artistEmail = "artofran@gmail.com";
            }

                else {

                    $artistEmail = "yurieem@gmail.com";
                }
        
            //Check if form inputs are empty
            
            if (empty($artworkName)) { array_push($errors, "Artwork Name is required"); }
            if (empty($clientName)) { array_push($errors, "Name is required"); }
            if (empty($clientEmail)) { array_push($errors, "Email is required"); }
            if (empty($contactNumber)) { array_push($errors, "Contact Number is required"); }
            if (empty($address)) { array_push($errors, "Address is required"); }
            if (empty($details)) { array_push($errors, "Additional Detail is required"); }
            
            
                if (count($errors) === 0) {

                    $query_commission = "INSERT INTO commissions (artworkname, clientname, clientemail, contactnumber, address, details, upload, status, artistemail) 
                    VALUES ('$artworkName', '$clientName', '$clientEmail', '$contactNumber', '$address', '$details', '$upload', '$status', '$artistEmail')";

                    

                    mysqli_query($db, $query_commission);
                    $_SESSION['submit-commission'] = "Your commission was submitted.";
                    $form_submit_message = $_SESSION['submit-commission'];
                    header('location: 2artworklist.php');
                }
    }
?>
