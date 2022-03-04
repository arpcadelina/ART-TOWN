<?php

    //echo $email;

    $db = $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    $check_email = "SELECT * FROM commissions WHERE clientemail='$email'";
    $display_commissions = mysqli_query ($db, $check_email);    

        while ($commissions = mysqli_fetch_assoc($display_commissions)) {

            print '<form method="post">';
                print '<div class="commission-card">';
                    print '<p class="commission-h3">' . $commissions['artistname'] . '</p><br><br>';
                    print '<p class="commission-h3">' . $commissions['date_submit'] . '</p><br><br>';
                    print '<p class="commission-h3">' . $commissions['artworkname'] .  '</b></p><br><br>';
                    print '<p class="commission-h3">' . $commissions['details'] . '</p>';
                print '</div>';
                print '<a href="form-feedback.php"><button><b> Received </b></button></a>';
            print '</form>';
        }
?>