<?php 

    // File Path might change
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
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
                    <li class="menu"><a href="index.php"> Home </a></li>
                    <li class="menu"><a href="pages/1artistlist.php"> Artists </a></li>
                    <li class="menu"><a href="pages/2artworklist.php"> Artworks </a></li>
                    <li class="menu"><a href="pages/3commissionlist.php"> Commission </a></li>   
                </ul>
                </div>
                <li class="sign-button"><a href="index.php#sign-in" id="log-out"><button id="sign-button"><b> Sign In </b></button></a></li>
            </nav>
        </section>

        <!-- Featured Section -->
        <section class="featured">
            <header class="fttitle"> Featured Artworks </header>
            <div class = "featured-container">
            <a href="pages/collage-view.php#dg6"><figure class="featured-figure">
                <img src="Art/DG6.png"
                    class="featured-img"/>
                <h6 class="featured-h6">Original Character</h6>
                <figcaption></figcaption>
            </figure></a>
            <a href="pages/collage-view.php#dr2"><figure class="featured-figure">
                <img src="Art/DR2.png"
                    class="featured-img"/>
                <h6 class="featured-h6">Fur Babies</h6>
                <figcaption></figcaption>
            </figure></a>
            <a href="pages/collage-view.php#pt3"><figure class="featured-figure">
                <img src="Art/PT3.png"
                    class="featured-img"/>
                <h6 class="featured-h6">Portrait</h6>
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
        <section class="sign-in" id = sign-in>
            <div class="sign-div">
                <a href="pages/4sign-in-artist.php"><button class="home-button-sign"><b> Log In </b></button></a><br>
                <a href="pages/7how-to-apply.php"><button class="home-button-apply"><b> How To Apply </b></button></a>
            </div>
            <div class="sign-div">
                <a href="pages/5sign-in-commissioner.php"><button class="home-button-sign"><b> Log In </b></button></a><br>
                <a href="pages/6sign-up-commissioner.php"><button class="home-button-apply"><b> Sign Up </b></button></a>
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

      <script type="text/javascript" >

        var status = "<?php echo $status; ?>";
          
        function changeButton() {
            
            if (status = 1) {

                var btn = document.getElementById("sign-button");
                var anchor = document.getElementById("log-out");

                btn.textContent = "Log Out";
                anchor.setAttribute("href", "index.php?logout=1");
            }

                else {

                    window.alert("Not yet logged in.");
                }

            }

            changeButton();
    </script>
</html>
