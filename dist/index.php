<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>⛧Abhor⛧</title>
</head>
<body>
<header>
    <img src="image/logo2.png" alt="the logo image" class="img-fluid" id="logo-img">
    <div class="pentagram">
        <img src="image/pentagram2.png" id="pent-animation" class="img-fluid" alt="Animated Pentagram">
    </div>
</header>
<div class="container">
 

    <div class="intro-text">
        <h2><span class="span-intro">From</span> the frozen forests of Scotland comes an Abhorrant <span class="span-intro">Evil</span></h2>
    </div>

    <div class="row" id="band-animation">
        <div class="col-xl-6">
            <img src="image/fraser.png"  class="img-fluid"  id="fraser" alt="Guitarist">
        </div>
        <div class="col-xl-6">
            <img src="image/fraser2.png"  class="img-fluid" id="lennox" alt="Guitarist">
        </div>
    </div>

    <div class="body-text">
        <p><span class="span-intro">Commenced</span> in late 2020, a sinister sound terroized the locals of Edinburgh. Unbeknownst to the peasents and sheep of the
        city, black metal duo Abhor had entered the dying music scene with an experimental minimalist set up comprised of <span class="span-intro">Fuath</span>(Vocals, Guitar) and <span class="span-intro">Zodiac</span>(Drums) ready to blow speakers 
         and minds of those who dare listen.</p><br>
        <p>Demo "The Drowning World" scheduled to release March 2021, follow our Instagram and Soundcloud for updates, any questions then use the contact form below.</p><br>
            <div class="social">
                <a href="https://www.instagram.com/abhormusic/" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fa fa-instagram" ></i></a>
                 <a href="https://soundcloud.com/abhormusic" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fa fa-soundcloud"></i></a>
            </div>
    </div>
    
    <div class="container">
	<form method="POST" action="php/mail.php" id="form-container">
		<div><label>Your Name:</label></div>
		<div><input type="text" name="myName" class="form-control"  required/></div>
		<div><label>Your Email:</label></div>
		<div><input type="email" name="myEmail" class="form-control" required/></div>
		
		<div><label>Message:</label></div>
		<div><textarea cols="40" rows="5" name="myMessage" class="form-control" required></textarea></div>
		<div class="float-left mt-2">
			<input type="submit" value="Send" class="btn btn-primary" />
		</div>
	</form>
</div>

</div>
<script src="javascript/main.js"></script>
</body>
</html>