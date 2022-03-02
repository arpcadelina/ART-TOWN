<?php 

    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
?>

<!DOCTYPE html>
<html>
    <head> 
        <title> Art Town - Artists </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <body>
        <section class="artist">
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

        <section class="artist-list">
            <div class="artist-row">
                <a href="9profile-commissioner-view.html#artist1"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/1.png" class="artist-img"/>
                        <h6 class="artist-h6"> Mcleinarts </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Drawing</b><br>
                            &emsp;&emsp;Scenery<br>
                            <b>Painting</b><br>
                            &emsp;&emsp;Scenery
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;4.7 / 5
                        </p>
                    </div>
                </figure></a>
                <a href="9profile-commissioner-view.html#artist2"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/2.png" class="artist-img"/>
                        <h6 class="artist-h6"> Kapebeansis </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Drawing</b><br>
                            &emsp;&emsp;Fur Babies<br>
                            <b>Painting</b><br>
                            &emsp;&emsp;Fur Babies
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;4.5 / 5
                        </p>
                    </div>
                </figure></a>
            </div>
            <div class="artist-row">
                <a href="9profile-commissioner-view.html#artist3"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/3.png" class="artist-img"/>
                        <h6 class="artist-h6"> Chachiearts </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Drawing</b><br>
                            &emsp;&emsp;Portrait<br>
                            &emsp;&emsp;Group
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;5 / 5
                        </p>
                    </div>
                </figure></a>
                <a href="9profile-commissioner-view.html#artist4"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/4.png" class="artist-img"/>
                        <h6 class="artist-h6"> Aeonix </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Digital Arts</b><br>
                            &emsp;&emsp;Portrait<br>
                            &emsp;&emsp;Group
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;4.8 / 5
                        </p>
                    </div>
                </figure></a>
            </div>
            <div class="artist-row">
                <a href="9profile-commissioner-view.html#artist5"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/5.png" class="artist-img"/>
                        <h6 class="artist-h6"> Salmonfishuu </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Digital Arts</b><br>
                            &emsp;&emsp;Fan Art <br>
                            &emsp;&emsp;Chibi<br>
                            <b>Drawing</b><br>
                            &emsp;&emsp;Fan Art
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;4.9 / 5
                        </p>
                    </div>
                </figure></a>
                <a href="9profile-commissioner-view.html#artist6"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/6.png" class="artist-img"/>
                        <h6 class="artist-h6"> Art of Ran </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Digital Arts</b><br>
                            &emsp;&emsp;Original Character<br>
                            &emsp;&emsp;Anime Me
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;5 / 5
                        </p>
                    </div>
                </figure></a>
            </div>
            <div class="artist-row">
                <a href="9profile-commissioner-view.html#artist7"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/7.png" class="artist-img"/>
                        <h6 class="artist-h6"> Yurieem </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Painting</b><br>
                            &emsp;&emsp;Portrait
                        </p>
                        <p class="rating">
                            <b>RATING</b><br>
                            &emsp;&emsp;5 / 5
                        </p>
                    </div>
                </figure></a>
                
            </div>
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
