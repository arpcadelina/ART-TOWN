<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- Banner Section -->
        <section class="banner">  
            <nav>
                <img class="logo" src = "Other/logo.png">
                <div class="nav-container"
                <ul>
                    <li class="menu"><a href="index.html"> Home </a></li>
                    <li class="menu"><a href="html/1artistlist.html"> Artists </a></li>
                    <li class="menu"><a href="html/2artworklist.html"> Artworks </a></li>
                    <li class="menu"><a href="html/3commissionlist.html"> Commission </a></li>   
                </ul>
                </div>
                <li class="sign-button"><a href="html/sign-as.html"><button><b> Sign In </b></button></a></li>
            </nav>
        </section>

        <!-- Featured Section -->
        <section class="featured">
            <header class="fttitle"> Featured Artworks </header>
            <div class = "featured-container">
            <a href="html/collage-view.html"><figure class="featured-figure">
                <img src="Art/DG6.png"
                    class="featured-img"/>
                <h6 class="featured-h6">Original Character</h6>
                <figcaption></figcaption>
            </figure></a>
            <a href="html/collage-view.html"><figure class="featured-figure">
                <img src="Art/DR2.png"
                    class="featured-img"/>
                <h6 class="featured-h6">Fur Babies</h6>
                <figcaption></figcaption>
            </figure></a>
            <a href="html/collage-view.html"><figure class="featured-figure">
                <img src="Art/PT1.png"
                    class="featured-img"/>
                <h6 class="featured-h6">Scenery</h6>
                <figcaption></figcaption>
            </figure></a>
            </div>
        </section>

        <!-- About Section -->
        <section class="about">
            <div class="about-div">
                <header class="atitle"> About Us </header>
                <p class = "art-description"> Welcome to Art Town, a place where you can find different kinds of arts. We're dedicated to giving you the very best 
                    of arts with a focus on dependability, customer service and uniqueness. Founded in 2021 by John Loyd Adobas and 
                    Allyza Ruth Cadelina, Art Town has come a long way from its beginnings in a Makati, Philippines. We now serve customers all 
                    over Asia!<br><br>
                    We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, 
                    please don't hesitate to contact us.<br><br>
                    Sincerely,<br>
                    John Loyd Adobas, Founder and Allyza Ruth Cadelina, Founder
                    <br><br>
    
                    Contact Details:<br>
                    Address: 2294 Pasong Tamo Extension 1200 Makati City, Metro Manila, Philippines<br>
                    Phone Number: +639123456789/+639090909090 <br>
                    Email: arttown@gmail.com/arttownhr@gmail.com<br>
                </p>
            </div>
            <div class="about-div">
            </div>
        </section>

        <!-- Sign In Section-->
        <section class="sign-in">
            <div class="sign-div">
                <a href="html/4sign-in-artist.html"><button class="home-button-sign"><b> Log In </b></button></a><br>
                <a href="html/7how-to-apply.html"><button class="home-button-apply"><b> How To Apply </b></button></a>
            </div>
            <div class="sign-div">
                <a href="html/5sign-in-commissioner.html"><button class="home-button-sign"><b> Log In </b></button></a><br>
                <a href="html/6sign-up-commissioner.html"><button class="home-button-apply"><b> Sign Up </b></button></a>
            </div>
        </section>
    </body>
    <footer>
        <div class="socmeds">
            <img class='flogo' src="other/logo.png">
            
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
