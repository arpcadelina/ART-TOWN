<?php

    //Include filename for scripts/server.php to check db for info
    //Check for errors if there's a similar name and password
    //File path might change depending on the address

    include('C:\xampp\htdocs\art-town\scripts\server.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Sign In </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="sign-in-artist">

        </div>
        <div class="log-in-form">
            <img src="../Other/logo.png" class="log-in-logo"/>
            <p class="small-title"> WELCOME TO ART TOWN! </p>
            <form class="sign" method="post" enctype="multipart/form-data">
                <?php
                
                    //Check if there are same credentials to db
                    //File path might change depending on the address
                    include('C:\xampp\htdocs\art-town\scripts\errors.php');
                ?>
                <label for="email"> Email </label><br><br>
                    <input type="email" id="email" name="email" required><br><br><br>

                <label for="password"> Password </label><br><br>
                    <input type="password" id="password" name="password" required>
                
                //Might consider removing the anchor tag, use the button as submit type for form submission
                //Button should be inside the form
                <a href="8profile-artist-view.html"><button class="log-in-btn" type="submit" name="login_user"><b> Sign-In </b></button></a>
            </form>
            <p class="account-prompt">Don't have an account? <a href="7how-to-apply.html"> Apply Now! </a></p>
        </div>
    </body>
</html>
