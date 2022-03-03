<?php

    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\commission-query.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Commission Form </title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="form-commission">
                <form class="commission" method="post" enctype="multipart/form-data" id="commission-form">
                    <div class="form-commission-div">
                    <header class="ftitle"> Commission Form</header>
                    <label for="art-style"> Artwork </label><br>
                        <select id="dropdown" name="artworkName" value="<?php echo $artworkName; ?>">
						    <option value = "art-dg1" selected>Digital Art - Group</option>
						    <option value = "art-dg2">Digital Art - Portrait</option>
						    <option value = "art-dg3">Digital Art - Chibi</option>
						    <option value = "art-dg4">Digital Art - Fan Art</option>
						    <option value = "art-dg5">Digital Art - Anime Me</option>
						    <option value = "art-dg6">Digital Art - Orginal Character</option>
						    <option value = "art-dr1">Drawing - Scenery</option>
						    <option value = "art-dr2">Drawing - Fur Babies</option>
						    <option value = "art-dr3">Drawing - Portrait</option>
						    <option value = "art-dr4">Drawing - Group</option>
                            <option value = "art-dr5">Drawing - Fan Art</option>
                            <option value = "art-pt1">Painting - Scenery</option>
                            <option value = "art-pt2">Painting - Fur Babies</option>
                            <option value = "art-pt3">Painting - Portrait</option>
			            </select><br><br>
                    <label for="name"> Name </label><br>
                        <input type="text" id="name" name="clientName" value="<?php echo $clientName; ?>" /><br><br>
    
                    <label for="email"> Email </label><br>
                        <input type="email" id="email" name="clientEmail" value="<?php echo $clientEmail; ?>" /><br><br>
    
                    <label for="contact"> Contact Number </label><br>
                        <input type="text" id="contact" name="contactNumber" value="<?php echo $contactNumber; ?>" /><br><br>
    
                    <label for="address"> Address </label><br>
                        <input type="text" id="address" name="address" value="<?php echo $address; ?>"/><br><br>
    
                    <label for="details"> Additional Details </label><br>
                        <textarea id="details" name="details" value="<?php echo $details; ?>"> </textarea><br><br> 
                    </div>
                    <div class="form-upload-div">
                        <input id="file-upload" type="file" name="upload" accept="image/" value="<?php echo $upload; ?>"/>
                        <div class="preview" id = "preview">
                            <img src="" alt= "Image Preview" id = "image-preview">
                        </div>
                            <a href="3commissionlist.php"><button class="log-in-btn" id="commission-form" name="add_commission" type="submit"><b> Submit </b></button></a>
                	        <a href="2artworklist.php"><button class="log-in-btn"><b> Back</button></b></a>
                    </div>
                </form>        
            <script>
                const imagefile = document.getElementById("file-upload");
                const preview = document.getElementById("preview");
                const image = document.getElementById("image-preview");

                imagefile.addEventListener("change", function() {
                    const file = this.files[0];

                    if (file){
                        const reader = new FileReader();
                        image.style.display = "block";

                        reader.addEventListener("load",function(){
                            image.setAttribute("src", this.result);
                        });

                        reader.readAsDataURL(file);
                    }
                });
            </script>
        </section>
    </body>
</html>
