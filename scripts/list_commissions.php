<?php

    //echo $email;

    $db = $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    $check_email = "SELECT * FROM commissions WHERE clientemail='$email' && status = 'on going' or status = 'done'";
    $display_commissions = mysqli_query ($db, $check_email);    

        while ($commissions = mysqli_fetch_assoc($display_commissions)) {
        ?>
        <div class="commission-row">
            <div class="commission-card">
                <p class="commission-h3"><?=$commissions['clientname']?></p><br><br>
                <p class="commission-h3"> <?=$commissions['date']?> </p><br><br>
                <p class="commission-h3"><b> <?=$commissions['artworkname']?> </b></p><br><br>
                <p class="commission-h3"><?=$commissions['details']?></p>
            </div>
            <div class="commission-button">
                <a href="8profile-artist-view.php?received=<?php echo $commissions['id']; ?>" class = "button1"><b>Received</b></a><br>
            </div>
        </div>
        <?php
        }
?>
