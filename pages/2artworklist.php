<?php 

    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Artwork </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="art">
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
                <li class="sign-button"><a href="../index.php#sign-in" id="log-out"><button id="sign-button"><b> Sign In </b></button></a></li>
            </nav>
        </section>

        <section class="artwork-list">
            <!-- Digital Arts -->
            <section class="digital">
            <div class = "border-container">
                <header class="title">Digital Arts</header>
                <a href="collage-view.php#dg1"><figure class="featured-figure">
                    <img src="../Art/DG1.png" class="featured-img"/>
                    <h6 class="featured-h6">Group</h6>
                    <p class="art-h7">Aeonix</p>
                    <p class="art-h7">P2,500</p>
                </figure></a>
                <a href="collage-view.php#dg2"><figure class="featured-figure">
                    <img src="../Art/DG2.png" class="featured-img"/>
                    <h6 class="featured-h6">Portrait</h6>
                    <p class="art-h7">Aeonix</p>
                    <p class="art-h7">P1,500</p>
                </figure></a>
                <a href="collage-view.php#dg3"><figure class="featured-figure">
                    <img src="../Art/DG3.png" class="featured-img"/>
                    <h6 class="featured-h6">Chibi</h6>
                    <p class="art-h7">Salmonfishuu</p>
                    <p class="art-h7">P1,000</p>
                </figure></a>
                <a href="collage-view.php#dg4"><figure class="featured-figure">
                    <img src="../Art/DG4.png" class="featured-img"/>
                    <h6 class="featured-h6">Fan Art</h6>
                    <p class="art-h7">Salmonfishuu</p>
                    <p class="art-h7">P2,000</p>
                </figure></a>
                <a href="collage-view.php#dg5"><figure class="featured-figure">
                    <img src="../Art/DG5.png" class="featured-img"/>
                    <h6 class="featured-h6">Anime Me</h6>
                    <p class="art-h7">Art of Ran</p>
                    <p class="art-h7">P2,500</p>
                </figure></a>
                <a href="collage-view.php#dg6"><figure class="featured-figure">
                    <img src="../Art/DG6.png" class="featured-img"/>
                    <h6 class="featured-h6">Original Character</h6>
                    <p class="art-h7">Art of Ran</p>
                    <p class="art-h7">P2,500</p>
                </figure></a>
            </div>
            </section>
            <!-- Drawing -->
            <section class="drawing">
                <div class = "border-container">
                    <header class="title">Drawing</header>
                    <a href="collage-view.php#dr1"><figure class="featured-figure">
                        <img src="../Art/DR1.png" class="featured-img"/>
                        <h6 class="featured-h6">Scenery</h6>
                        <p class="art-h7">Mcleinarts</p>
                        <p class="art-h7">P2,000</p>
                    </figure></a>
                    <a href="collage-view.php#dr2"><figure class="featured-figure">
                        <img src="../Art/DR2.png" class="featured-img"/>
                        <h6 class="featured-h6">Fur Babies</h6>
                        <p class="art-h7">Kapebeansis</p>
                        <p class="art-h7">P1,500</p>
                    </figure></a>
                    <a href="collage-view.php#dr3"><figure class="featured-figure">
                        <img src="../Art/DR3.png" class="featured-img"/>
                        <h6 class="featured-h6">Portrait</h6>
                        <p class="art-h7">Chachiearts</p>
                        <p class="art-h7">P1,500</p>
                    </figure></a>
                    <a href="collage-view.php#dr4"><figure class="featured-figure">
                        <img src="../Art/DR4.png" class="featured-img"/>
                        <h6 class="featured-h6">Group</h6>
                        <p class="art-h7">Chachiearts</p>
                        <p class="art-h7">P2,500</p>
                    </figure></a>
                    <a href="collage-view.php#dr5"><figure class="featured-figure">
                        <img src="../Art/DR5.png" class="featured-img"/>
                        <h6 class="featured-h6">Fan Art</h6>
                        <p class="art-h7">Salmonfishuu</p>
                        <p class="art-h7">P2,000</p>
                    </figure></a>
                </div>  
            </section>
            <!-- Painting -->
            <section class="painting">
                <div class = "border-container">
                    <header class="title">Painting</header>
                    <a href="collage-view.php#pt1"><figure class="featured-figure">
                        <img src="../Art/PT1.png" class="featured-img"/>
                        <h6 class="featured-h6">Scenery</h6>
                        <p class="art-h7">Mcleinarts</p>
                        <p class="art-h7">P2,000</p>
                    </figure></a>
                    <a href="collage-view.php#pt2"><figure class="featured-figure">
                        <img src="../Art/PT2.png" class="featured-img"/>
                        <h6 class="featured-h6">Fur Babies</h6>
                        <p class="art-h7">Kapebeansis</p>
                        <p class="art-h7">P1,500</p>
                    </figure></a>
                    <a href="collage-view.php#pt3"><figure class="featured-figure">
                        <img src="../Art/PT3.png" class="featured-img"/>
                        <h6 class="featured-h6">Portrait</h6>
                        <p class="art-h7">Yurieem</p>
                        <p class="art-h7">P1,500</p>
                    </figure></a>
                </div>  
            </section>
        </section>
    </body>
    <footer>
        <div class="psocmeds">
            <img class='flogo' src="../other/logo.png">
        </div>
        <div class="plinks">
            <header class= 'ptitle'> Contact Us </header>
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

            window.alert(status);

            if (status = 1) {

                var btn = document.getElementById("sign-button");
                var anchor = document.getElementById("log-out");

                btn.textContent = "Log Out";
                anchor.setAttribute("href", "../html/4sign-in-artist.php");
            }

                else {

                    window.alert("nani");
                }

            }

            changeButton();
        
    </script>
</html>
