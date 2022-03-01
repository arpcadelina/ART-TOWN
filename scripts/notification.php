<?php

    if (isset($_SESSION['success'])) {

        $status = 1;
        
        echo $_SESSION['success'];
    }
?>
