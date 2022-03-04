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
                <a href="9profile-commissioner-view.php#artist1"><figure class="artist-figure">
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
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Mcleinarts'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </figure></a>
                <a href="9profile-commissioner-view.php#artist2"><figure class="artist-figure">
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
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Kapebeansis'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </figure></a>
            </div>
            <div class="artist-row">
                <a href="9profile-commissioner-view.php#artist3"><figure class="artist-figure">
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
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Chachiearts'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </figure></a>
                <a href="9profile-commissioner-view.php#artist4"><figure class="artist-figure">
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
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Aeonix'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </figure></a>
            </div>
            <div class="artist-row">
                <a href="9profile-commissioner-view.php#artist5"><figure class="artist-figure">
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
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Salmonfishuu'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </figure></a>
                <a href="9profile-commissioner-view.php#artist6"><figure class="artist-figure">
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
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Art of Ran'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </figure></a>
            </div>
            <div class="artist-row">
                <a href="9profile-commissioner-view.php#artist7"><figure class="artist-figure">
                    <div class="artist-image">
                        <img src="../DP/7.png" class="artist-img"/>
                        <h6 class="artist-h6"> Yurieem </h6>
                    </div>
                    <div class="artist-info">
                        <p class="artstyle">
                            <b>Painting</b><br>
                            &emsp;&emsp;Portrait
                        </p>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Yurieem'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;<?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?>/ 5
                                </p>
                                <?php
                            }
                            else{
                                ?>
                                <p class="rating">
                                    <b>RATING</b><br>
                                    &emsp;&emsp;0 / 5
                                </p>
                                <?php
                            }
                        }
                        ?>
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
            }

            changeButton();
    </script>
</html>
