<?php
    //Include filename for scripts/server.php to check db for info
    //Check for errors if there's a similar name and password
    //File path might change depending on the address
    include('C:\xampp\htdocs\art-town\scripts\server.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Sign Up </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="sign-in-client">

        </div>
        <div class="log-in-form">
            <img src="../Other/logo.png" class="log-in-logo"/>
            <p class="small-title"> WELCOME TO ART TOWN! </p>
            
            <!-- Add method for form data-->
            <form class="sign" name="log-in-form" method="post" enctype="multipart/form-data">
                <?php
                
                    //Include error.php file in case there's a similar email and full name
                    //File path might change
                    include('C:\xampp\htdocs\art-town\scripts\errors.php');
                ?>
                <label for="fullname"> Full Name</label><br><br>
                    <input type="text" id="fullname" name="username" value="<?php echo $username; ?>" required><br><br><br>

                <label for="email"> Email </label><br><br>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br><br>

                <label for="password"> Password </label><br><br>
                    <input type="text" id="password" name="password" value="<?php echo $password; ?>" required>
                
                //The anchor tag could be removed, the type="submit" is crucial for form submission 
                <a href="../index.html"><button class="log-in-btn" type="submit" name="reg_user"><b> Sign-Up </b></button></a>
            </form>
            <p class="account-prompt">Already have an account? <a href="5sign-in-commissioner.html"> Sign In! </a></p>
        </div>
    </body>
</html>
