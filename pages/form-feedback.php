<?php
    
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\session.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\notification.php');
    include('C:\xampp\htdocs\ART-TOWN-main\scripts\feedback_query.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Art Town - Feedback Form</title>
        <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="../styles/styles.css" type="text/css" rel="stylesheet"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="form-feedback-section">
            <div class="feedback-div">
                <header class="ftitle"> Feedback Form </header>
                <form class="feedback" method="post" enctype="multipart/form-data" id="commission-form">
                    <label for="art-style"> Artist </label><br><br>
                        <select id="dropdown" name="artistName" value="<?php echo $artistName; ?>">
						    <option value = "Mcleinarts" selected>Mcleinarts</option>
						    <option value = "Kapebeansis">Kapebeansis</option>
						    <option value = "Chachiearts">Chachiearts</option>
						    <option value = "Aeonix">Aeonix</option>
						    <option value = "Salmonfishuu">Salmonfishuu</option>
						    <option value = "Art of Ran">Art of Ran</option>
						    <option value = "Yurieem">Yurieem</option>
					    </select><br><br>
                    <label for="name"> Name </label><br><br>
                        <input type="text" id="name" name="commissionerName" value="<?php echo $commissionerName; ?>"/><br><br>

                    <label for="rate"> How did your artist do? Rate the art. </label><br><br>
                        <select id="dropdown" name="ratingNum" value="<?php echo $ratingNum; ?>">
						    <option value = "5" selected>5 ✮✮✮✮✮</option>
                            <option value = "4">4 ✮✮✮✮</option>
                            <option value = "3">3 ✮✮✮</option>
                            <option value = "2">2 ✮✮</option>
                            <option value = "1">1 ✮</option> 
                        </select><br><br>
                    <label for="feedback-details"> Please share your feedback: </label><br><br>
                        <textarea name="feedbackDetails" value="<?php echo $feedbackDetails; ?>"> </textarea><br><br>
		            <a href="3commissionlist.php"><button class="long-btn" id="feedback-form" name = 'add_feedback' type="submit"><b> Submit </b></button></a>
                </form>
            </div>
            <div class="feedback-img">

            </div>
        </section>
    </body>
</html>
