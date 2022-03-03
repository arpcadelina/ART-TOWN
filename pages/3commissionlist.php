<?php 

    // File Path might change
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\restrict-access.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Commission </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- Banner Section -->
        <section class="banner">
            <nav>
                <img class="logo" src = "../Other/logo.png">
                <div class="nav-container"
                <ul>
                    <li class="menu"><a href="../index.php"> Home </a></li>
                    <li class="menu"><a href="1artistlist.php"> Artists </a></li>
                    <li class="menu"><a href="2artworklist.php"> Artworks </a></li>
                    <li class="menu"><a href="3commissionlist.php"> Commission </a></li>
                </ul>
                </div>
                <li class="sign-button"><a href="../index.php?logout=1"><button><b>Log Out</b></button></a></li>
            </nav>
        </section>

        <section class="section-commission">
            <div class="border-container">
                <header class="ptitle"> Commission List </header>
                <div class="commission-row">
                    <div class="commission-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="commission-h3"> Date </p><br><br>
                        <p class="commission-h3"><b> Art Title </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
                    <a href="form-feedback.php"><button><b> Received </b></button></a>

                    <div class="commission-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="commission-h3"> Date </p><br><br>
                        <p class="commission-h3"><b> Art Title </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
                    <a href="form-feedback.php"><button><b> Received </b></button></a>

                    <div class="commission-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="commission-h3"> Date </p><br><br>
                        <p class="commission-h3"><b> Art Title </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
                    <a href="form-feedback.php"><button><b> Received </b></button></a>

                    <div class="commission-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="commission-h3"> Date </p><br><br>
                        <p class="commission-h3"><b> Art Title </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
                    <a href="form-feedback.php"><button><b> Received </b></button></a>
                </div>
            </div>
        </section>

        </section>
    </body>
    <footer>
        <div class="socmeds">
            <img class='flogo' src="../other/logo.png">
            
        </div>
        <div class="links">
            <header class= 'ftitle'> Contact Us </header>
            <p><b>
                    Address: 2294 Pasong Tamo Extension 1200 Makati City, Metro Manila, Philippines<br>
                    Email: arttown@gmail.com/arttownhr@gmail.com <br>
                    Phone Number: +639123456789/+639090909090 
            </b></p>
        </div>

        <!-- Copyright Section -->
        <aside>
            © All Rights Reserved. 2022  
        </aside>
    </footer>
</html>
