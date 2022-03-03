<?php 

    // File Path might change
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
    <body class = "overflow">
        <section class="profile2">
                <img class="logo2" src = "../Other/logo.png">
                <a href="../index.php?logout=1"><button class="profile-sign"><b>Log Out</b></button></a>
                <div class = "profile-container">
                    <div class = "profile-pic">
                        <img src="../DP/1.png" class="artist-pic"/>
                    </div>
                    <div class = "profile-details2">
                        <p> Mcleinarts <br><br>
                            Full Name <br><br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus
                        </p>
                    </div>
                </div>
        </section>

        <section class="profile-client-view">
            <section class="on-going-commission">
                <div class="border-contain">
                    <header class="ptitle"> On Going Commission </header>
                    <div class="commission-row2">
                        <div class="commission-card">
                            <p class="commission-h3">Name</p><br><br>
                            <p class="commission-h3"> Date </p><br><br>
                            <p class="commission-h3"><b> Art Title </b></p><br><br>
                            <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                        </div>
                        <div class="commission-button">
                            <button><b> Done </b></button>
                            <button><b> Discontinue </b></button>
                        </div>
                        <div class="commission-card">
                            <p class="commission-h3">Name</p><br><br>
                            <p class="commission-h3"> Date </p><br><br>
                            <p class="commission-h3"><b> Art Title </b></p><br><br>
                            <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                        </div>
                        <div class="commission-button">
                            <button><b> Done </b></button>
                            <button><b> Discontinue </b></button>
                        </div>
                        <div class="commission-card">
                            <p class="commission-h3">Name</p><br><br>
                            <p class="commission-h3"> Date </p><br><br>
                            <p class="commission-h3"><b> Art Title </b></p><br><br>
                            <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                        </div>
                        <div class="commission-button">
                            <button><b> Done </b></button>
                            <button><b> Discontinue </b></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="new-commission">
                <div class="border-contain">
                    <header class="ptitle"> New Commission </header>
                    <div class="commission-row2">
                        <div class="commission-card">
                            <p class="commission-h3">Name</p><br><br>
                            <p class="commission-h3"> Date </p><br><br>
                            <p class="commission-h3"><b> Art Title </b></p><br><br>
                            <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                        </div>
                        <div class="commission-button">
                            <button><b> Accept </b></button>
                            <button><b> Reject </b></button>
                        </div>
                        <div class="commission-card">
                            <p class="commission-h3">Name</p><br><br>
                            <p class="commission-h3"> Date </p><br><br>
                            <p class="commission-h3"><b> Art Title </b></p><br><br>
                            <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                        </div>
                        <div class="commission-button">
                            <button><b> Accept </b></button>
                            <button><b> Reject </b></button>
                        </div>
                        <div class="commission-card">
                            <p class="commission-h3">Name</p><br><br>
                            <p class="commission-h3"> Date </p><br><br>
                            <p class="commission-h3"><b> Art Title </b></p><br><br>
                            <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                        </div>
                        <div class="commission-button">
                            <button><b> Accept </b></button>
                            <button><b> Reject </b></button>
                        </div>
            </section>
            <section class="feedback-list">
                <div class="border-contain">
                    <header class="ptitle"> Feedback </header>
                    <div class="ave-container">
                        <p class="average"><b>4.7</b></p>
                        <p class="average">out of<br>5</p>
                    </div>
                    <div class="details-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="grade"><b> 5 out of 5 </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
                    <div class="details-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="grade"><b> 5 out of 5 </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
                    <div class="details-card">
                        <p class="commission-h3">Name</p><br><br>
                        <p class="grade"><b> 4 out of 5 </b></p><br><br>
                        <p class="commission-h3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas veritatis nihil voluptates repudiandae possimus rem quibusdam, laudantium repellendus tenetur blanditiis, labore iure in veniam nulla tempora dolorum sit deleniti?</p>
                    </div>
            </section>
        </section>
        <div class="bg-modal">
            <div class="modal-content">
                <div class="half">
                    <h3 class="small-title"> Artwork Title 1 </h3>
                    <h4 class="roboto-title"> Commissioner Name </h4>
                    <p class="little-description2"> Email </p><br>
                    <p class="little-description2"> Number </p><br>
                    <p class="little-description2"> Address </p><br>
                    <p class="little-description2"> Date <p><br>
                    <p class="little-description2"> Price </p><br>
                    <p class="little-description2"> Additional Details: <br><br>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti aut praesentium exercitationem obcaecati vel enim
                         officiis earum quasi rem consectetur! Molestias assumenda autem mollitia, odit dolore officiis in dolorum tempore!
                    </p>
                </div>
                <div class="half">
                    <p class="close">+</p>
                    <img src="" class="image-from-client"/>
                </div>
            </div>
        </div>
        <script>
            var boxes = document.querySelectorAll(".commission-card"); 
            boxes.forEach(el => {
                el.addEventListener('click', function() {
                    document.querySelector(".bg-modal").style.display = "flex";
                })
            });

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
