<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Artwork </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="no-overflow">
        <!-- Mcleinarts -->
        <div id = "artist1">
        <section class="profile">
            <nav>
                <img class="logo" src = "../Other/logo.png">
                <div class="nav2-container"
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
        <section class="profile-client-view">
            <!-- Art List -->
            <section class="art-list">
                <div class = "border-contain">
                    <div class = "profile-container">
                        <div class = "profile-pic">
                            <img src="../DP/1.png" class="artist-pic"/>
                        </div>
                        <div class = "profile-details">
                            <p> Mcleinarts <br><br>
                                Mclein Francisco <br><br>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                            </p><br><br>
                        </div>
                    </div>
                    <header class="ptitle">Commission List</header>
                    <a href="collage-view.php#dr1"><figure class="featured-figure">
                        <img src="../Art/DR1.png" class="featured-img"/>
                        <h6 class="featured-h6">Scenery</h6>
                        <p class="art-h7">Mcleinarts</p>
                        <p class="art-h7">P2,000</p>
                    </figure></a>
                    <a href="collage-view.php#pt1"><figure class="featured-figure">
                        <img src="../Art/PT1.png" class="featured-img"/>
                        <h6 class="featured-h6">Scenery</h6>
                        <p class="art-h7">Mcleinarts</p>
                        <p class="art-h7">P2,000</p>
                    </figure></a>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <header class="ptitle"> Feedback </header>
                    <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Mcleinarts'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Mcleinarts'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }  
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                </div>  
            </section>
        </section> 
        </div> 

        <!-- Kapebeansis -->
        <div id = "artist2">
            <section class="profile">
                <nav>
                    <img class="logo" src = "../Other/logo.png">
                    <div class="nav2-container"
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
            <section class="profile-client-view">
                <!-- Art List -->
                <section class="art-list">
                    <div class = "border-contain">
                        <div class = "profile-container">
                            <div class = "profile-pic">
                                <img src="../DP/2.png" class="artist-pic"/>
                            </div>
                            <div class = "profile-details">
                                <p> Kapebeansis <br><br>
                                    Bib Dela Cruz <br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                                </p><br><br>
                            </div>
                        </div>
                        <header class="ptitle">Commission List</header>
                        <a href="collage-view.php#dr2"><figure class="featured-figure">
                            <img src="../Art/DR2.png" class="featured-img"/>
                            <h6 class="featured-h6">Fur Babies</h6>
                            <p class="art-h7">Kapebeansis</p>
                            <p class="art-h7">P1,500</p>
                        </figure></a>
                        <a href="collage-view.php#pt2"><figure class="featured-figure">
                            <img src="../Art/PT2.png" class="featured-img"/>
                            <h6 class="featured-h6">Fur Babies</h6>
                            <p class="art-h7">Kapebeansis</p>
                            <p class="art-h7">P1,500</p>
                        </figure></a>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <header class="ptitle"> Feedback </header>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Kapebeansis'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Kapebeansis'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>  
                </section>
            </section> 
        </div> 
        
        <!-- Chachiearts -->
        <div id = "artist3">
            <section class="profile">
                <nav>
                    <img class="logo" src = "../Other/logo.png">
                    <div class="nav2-container"
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
            <section class="profile-client-view">
                <!-- Art List -->
                <section class="art-list">
                    <div class = "border-contain">
                        <div class = "profile-container">
                            <div class = "profile-pic">
                                <img src="../DP/3.png" class="artist-pic"/>
                            </div>
                            <div class = "profile-details">
                                <p> Chachiearts <br><br>
                                    Cha Cerias <br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                                </p><br><br>
                            </div>
                        </div>
                        <header class="ptitle">Commission List</header>
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
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <header class="ptitle"> Feedback </header>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Chachiearts'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Chachiearts'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>  
                </section>
            </section> 
        </div>

        <!-- Aeonix -->
        <div id = "artist4">
            <section class="profile">
                <nav>
                    <img class="logo" src = "../Other/logo.png">
                    <div class="nav2-container"
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
            <section class="profile-client-view">
                <!-- Art List -->
                <section class="art-list">
                    <div class = "border-contain">
                        <div class = "profile-container">
                            <div class = "profile-pic">
                                <img src="../DP/4.png" class="artist-pic"/>
                            </div>
                            <div class = "profile-details">
                                <p> Aeonix <br><br>
                                    Nix Garcia <br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                                </p><br><br>
                            </div>
                        </div>
                        <header class="ptitle">Commission List</header>
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
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <header class="ptitle"> Feedback </header>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Aeonix'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Aeonix'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>  
                </section>
            </section> 
        </div>

        <!-- Salmonfishuu -->
        <div id = "artist5">
            <section class="profile">
                <nav>
                    <img class="logo" src = "../Other/logo.png">
                    <div class="nav2-container"
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
            <section class="profile-client-view">
                <!-- Art List -->
                <section class="art-list">
                    <div class = "border-contain">
                        <div class = "profile-container">
                            <div class = "profile-pic">
                                <img src="../DP/5.png" class="artist-pic"/>
                            </div>
                            <div class = "profile-details">
                                <p> Salmonfishuu <br><br>
                                    Amieii Reyes <br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                                </p><br><br>
                            </div>
                        </div>
                        <header class="ptitle">Commission List</header>
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
                        <a href="collage-view.php#dr5"><figure class="featured-figure">
                            <img src="../Art/DR5.png" class="featured-img"/>
                            <h6 class="featured-h6">Fan Art</h6>
                            <p class="art-h7">Salmonfishuu</p>
                            <p class="art-h7">P2,000</p>
                        </figure></a>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <header class="ptitle"> Feedback </header>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Salmonfishuu'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Salmonfishuu'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>  
                </section>
            </section> 
        </div>

        <!-- Art of Ran -->
        <div id = "artist6">
            <section class="profile">
                <nav>
                    <img class="logo" src = "../Other/logo.png">
                    <div class="nav2-container"
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
            <section class="profile-client-view">
                <!-- Art List -->
                <section class="art-list">
                    <div class = "border-contain">
                        <div class = "profile-container">
                            <div class = "profile-pic">
                                <img src="../DP/6.png" class="artist-pic"/>
                            </div>
                            <div class = "profile-details">
                                <p> Art of Ran <br><br>
                                    Ran Carmona <br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                                </p><br><br>
                            </div>
                        </div>
                        <header class="ptitle">Commission List</header>
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
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <header class="ptitle"> Feedback </header>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Art of Ran'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Art of Ran'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>  
                </section>
            </section> 
        </div>

        <!-- Yurieem -->
        <div id = "artist7">
            <section class="profile">
                <nav>
                    <img class="logo" src = "../Other/logo.png">
                    <div class="nav2-container"
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
            <section class="profile-client-view">
                <!-- Art List -->
                <section class="art-list">
                    <div class = "border-contain">
                        <div class = "profile-container">
                            <div class = "profile-pic">
                                <img src="../DP/7.png" class="artist-pic"/>
                            </div>
                            <div class = "profile-details">
                                <p> Yurieem <br><br>
                                    Yuri Ramos <br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                                </p><br><br>
                            </div>
                        </div>
                        <header class="ptitle">Commission List</header>
                        <a href="collage-view.php#pt3"><figure class="featured-figure">
                            <img src="../Art/PT3.png" class="featured-img"/>
                            <h6 class="featured-h6">Portrait</h6>
                            <p class="art-h7">Yurieem</p>
                            <p class="art-h7">P1,500</p>
                        </figure></a>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <header class="ptitle"> Feedback </header>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistname = 'Yurieem'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistname = 'Yurieem'";
                        $result = $db->query($ave);
                        while($rows = mysqli_fetch_array($result)){
                            if ($rows['CAST(AVG(rating) AS DECIMAL(10,1))']>0){
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b><?=$rows['CAST(AVG(rating) AS DECIMAL(10,1))']?></b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div class="ave-container">
                                    <p class="average"><b>0.0</b></p>
                                    <p class="average">out of<br>5</p>
                                </div>
                                <?php
                            }
                        }
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="details-card">
                                    <p class="commission-h3"><?=$row['commissionername']?></p><br><br>
                                    <p class="commission-h3"><?=$row['date']?></p><br><br>
                                    <p class="grade"><b><?=$row['rating']?> out of 5</b></p><br><br>
                                    <p class="commission-h3"><?=$row['feedback']?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>  
                </section>
            </section> 
        </div>
    </body>
</html>
