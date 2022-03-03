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
                <form class="feedback">
                    <label for="art-style"> Artwork </label><br>
                        <select name = "dropdown">
						    <option value = "artist-1" selected>Mcleinarts</option>
						    <option value = "artist-2">Kapebeansis</option>
						    <option value = "artist-3">Chachiearts</option>
						    <option value = "artist-4">Aeonix</option>
						    <option value = "artist-5">Salmonfishuu</option>
						    <option value = "artist-6">Art of Ran</option>
						    <option value = "artist-7">Yurieem</option>
					    </select><br><br>
                    <label for="name"> Name </label><br>
                        <input type="text" id="name"/><br><br>

                    <label for="rate"> How did your artist do? Rate the art. </label>
                        <div>
                            <div class="label-div">
                                <p class="label-left"> Poor </p>
                                <p class="label-right"> Excellent </p>
                            </div><br>
                            <div class="button-div">
                                <button class="button-rating"> 1 </button><!---->
                                <button class="button-rating"> 2 </button><!---->
                                <button class="button-rating"> 3 </button><!---->
                                <button class="button-rating"> 4 </button><!---->
                                <button class="button-rating"> 5 </button><!---->
                            </div>
                        </div><br>

                    <label for="feedback-details"> Please share your feedback: </label><br>
                    <textarea> </textarea><br>
                </form>
                    <a href="3commissionlist.php"><button class="long-btn"><b> Submit </b></button></a>
            </div>
            <div class="feedback-img">

            </div>
        </section>
    </body>
</html>
