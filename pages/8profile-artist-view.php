<?php 

    // File Path might change
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\process.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Artwork </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class = "overflow">
        <section class="profile2">
            <?php
                $email = $_SESSION['email'];
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                $query = "SELECT * FROM artists WHERE email = '$email'";
                $result = $db->query($query);
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <img class="logo2" src = "../Other/logo.png">
                    <a href="../index.php?logout=1"><button class="profile-sign"><b>Log Out</b></button></a>
                    <div class = "profile-container">
                        <div class = "profile-pic">
                            <img src="<?=$row['dp']?>" class="artist-pic"/>
                        </div>
                        <div class = "profile-details2">
                            <p> <?=$row['username']?> <br><br>
                            <?=$row['fullname']?> <br><br>
                            <?=$row['quote']?>   
                            </p>
                        </div>
                    </div>
                    <?php              
                }
            ?>
        </section>

        <section class="profile-client-view">
            <section class="on-going-commission">
                <div class="border-contain">
                    <header class="ptitle"> On Going Commission </header>
                    <?php
                        $email = $_SESSION['email'];
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM commissions WHERE artistemail = '$email' && status = 'on going'";
                        $query_run = mysqli_query($db,$query);
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="commission-row2">
                                    <a href="8profile-artist-view.php?card=<?php echo $row['id']; ?>" class="commission-card">
                                        <p class="commission-h3"><?=$row['clientname']?></p><br><br>
                                        <p class="commission-h3" value ='<?=$row['date']?>'><?=$row['date']?></p><br><br>
                                        <p class="commission-h3"><b><?=$row['artworkname']?></b></p><br><br>
                                        <p class="commission-h3"><?=$row['details']?></p><br><br>
                                    </a>
                                    <div class="commission-button">
                                        <a href="8profile-artist-view.php?done=<?php echo $row['id']; ?>" class = "button2"><b>Done</b></a><br>
                                        <a href="8profile-artist-view.php?delete=<?php echo $row['id']; ?>" class = "button2"><b>Discontinue</b></a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </section>
            <section class="new-commission">
                <div class="border-contain">
                    <header class="ptitle"> New Commission </header>
                    <?php
                        $email = $_SESSION['email'];
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM commissions WHERE artistemail = '$email' && status = 'new'";
                        $query_run = mysqli_query($db,$query);
                        if (mysqli_num_rows($query_run)>0){
                            foreach ($query_run as $row){
                                ?>
                                <div class="commission-row2">
                                    <a href="8profile-artist-view.php?card=<?php echo $row['id']; ?>" class="commission-card">
                                        <p class="commission-h3"><?=$row['clientname']?></p><br><br>
                                        <p class="commission-h3"><?=$row['date']?></p><br><br>
                                        <p class="commission-h3"><b><?=$row['artworkname']?></b></p><br><br>
                                        <p class="commission-h3"><?=$row['details']?></p><br><br>
                                    </a>
                                    <div class="commission-button">
                                        <a href="8profile-artist-view.php?accept=<?php echo $row['id']; ?>" class = "button2"><b>Accept</b></a><br>
                                        <a href="8profile-artist-view.php?delete=<?php echo $row['id']; ?>" class = "button2"><b>Reject</b></a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
            </section>
            <section class="feedback-list">
                <div class="border-contain">
                    <header class="ptitle"> Feedback </header>
                    <?php
                        $email = $_SESSION['email'];
                        $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                        $query = "SELECT * FROM feedbacks WHERE artistemail = '$email'";
                        $query_run = mysqli_query($db,$query);
                        $ave = "SELECT CAST(AVG(rating) AS DECIMAL(10,1)) FROM feedbacks WHERE artistemail = '$email'";
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
            </section>
        </section>
            <?php
                $db = mysqli_connect('localhost', 'root', '', 'sign-up');
                if (isset($_GET['card'])){
                    $id = $_GET['card'];
                    $query = "SELECT * FROM commissions WHERE id = '$id'";
                    $query_run = mysqli_query($db,$query);
                    if (mysqli_num_rows($query_run)>0){
                        foreach ($query_run as $row){
                            ?>
                            <div class="bg-modal">
                                <div class="modal-content">
                                    <div class="half">
                                        <h3 class="small-title"> <?=$row['artworkname']?> </h3>
                                        <h4 class="roboto-title"> <?=$row['clientname']?> </h4>
                                        <p class="little-description2"> Email: <?=$row['clientemail']?> </p><br>
                                        <p class="little-description2"> Contact Number: <?=$row['contactnumber']?> </p><br>
                                        <p class="little-description2"> Address: <?=$row['address']?> </p><br>
                                        <p class="little-description2"> Date: <?=$row['date']?> <p><br>
                                        <p class="little-description2"> Additional Details: <br><br>
                                        <?=$row['details']?>
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="close">+</p>
                                        <img src="../uploaded/<?=$row['upload']?>" class="image-from-client"/>
                                    </div>
                                </div>
                                <script>
                                    document.querySelector(".bg-modal").style.display = "flex";
                                </script>
                            </div>
                            <?php
                        }
                    }

                }
            ?>   
        <script>
            document.querySelector(".close").addEventListener("click",function(){
                document.querySelector(".bg-modal").style.display = "none";
            });
        </script>
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
