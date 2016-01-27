<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - About</title>
		<link rel="stylesheet" href="base.css" TYPE="text/css">
		<link rel="stylesheet" href="base_nonvalidated2.css" TYPE="text/css">
		<link rel="stylesheet" href="component.css" TYPE="text/css">
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>		
		<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			<!-- Subscribe Email Validation -->

			function warnSubscribe(id) {
				if (checkEmailEmpty(id) > 0) {
				
					if(!checkEmail(id)) {
						document.getElementById('subscribeError').innerHTML = 'Invalid Email.';
						return false;
					}	
					if(checkEmail(id)) {
						document.getElementById('subscribeError').innerHTML = '';
						return true;
					}
				} else {
					document.getElementById('subscribeError').innerHTML = 'Please enter an email.';
					return false;
				}
			}
			
			function checkEmailEmpty(id) {
				var email = document.getElementById(id).value;
				return email.length;
			}
			
			function checkEmail(id) {
				var email;
				email = document.getElementById(id).value;
				var emailValidation = /^[A-z0-9_.-]+@{1}[A-z0-9]+\.{1}[A-z]+$/;
				return (email.match(emailValidation));
			}
		</script>
	</head>

	
	<body>

		<header>
			<div id="logoAndIcons">
				<a href="index.php"><img id="logo" src="resources/logo_65x65.jpg" alt="logo"/></a>
				<a href="https://www.youtube.com/user/alvinnmann"><img id="youtube" src="resources/youtube.png" alt="youtube"/></a>
				<a href="https://twitter.com/alvinmann"><img id="twitter" src="resources/twitter.png" alt="twitter"/></a>
				<a href="http://instagram.com/alvinmann"><img id="instagram" src="resources/instagram.png" alt="instagram"/></a>
				<a href="https://www.facebook.com/AlvinMann"><img id="facebook" src="resources/facebook.png" alt="facebook"/></a>
				<a href="https://plus.google.com/u/0/+AlvinMan28/posts"><img id="googleplus" src="resources/googleplus.png" alt="googleplus"/></a>
			</div>
			<div id="loginAndSucscribe">
				<?php if ($LOGGED_USER) { ?>
					<a href="logout.php"><p id="logout">SIGN OUT</p></a>
					<a href="account.php"><p id="account">ACCOUNT</p></a>
				<?php } else { ?>
					<a href="register_form.php"><p id="register">REGISTER</p></a>
					<a href="login_form.php"><p id="signIn">SIGN IN</p></a>
				<?php } ?>
				
				<div id="currentUsername">
				
					<?php if ($LOGGED_USER) { ?>
						Welcome,&nbsp; 
					
					<?php echo $_SESSION['SESS_FIRST_NAME'];?><?php } ?>
				
				</div>
			
			</div>
		</header>
		
		<div id="pageWrapper">
			<div id="navbar">	
			
				<div id="navPanel">
					<div id="navHeading">
					<p>NAVIGATION</p>
					</div>
					<ul class="navEffect">
						<li><a href="news.php"><span data-hover="NEWS">NEWS</span></a></li>
						<li><a href="about.php"><span data-hover="ABOUT">ABOUT</span></a></li>
						<li><a href="media_songs.php"><span data-hover="MEDIA">MEDIA</span></a></li>
						<li><a href="forum.php"><span data-hover="FORUMS">FORUMS</span></a></li>
						<li><a href="contact.php"><span data-hover="CONTACT">CONTACT</span></a></li>
						
					</ul>
				</div>
			</div>		
			<div id="aboutContent">
				<div class="pageHeading">
					<p>ABOUT</p>
				</div>

				<div id="aboutWrapper">
					<img id="aboutPicture" src="resources/images/artist_main.jpg" alt="Photoshoot"/>
					<p class="aboutText"> 
						Alvin Man is a multi-talented singer, songwriter, musician and dancer that lives in Vancouver, Canada. He got into music at the young age of 5,
						and has never looked back.  Having immigrated from Hong Kong, Alvin is influenced by a diverse blend of cultures and genres including Pop, R&B,
						Rock, Hip-Hop, Chinese Pop, and even K-Pop. Alvin offers a unique sound that has captivated audiences 
						wherever he has performed.<br><br>
						
					    In 2009, Alvin decided to audition for a renowned Chinese singing competition in the city of Vancouver.  He was able to beat out over 300 other
					    contestants to become the winner of The New Talent Singing Awards.  He went on to represent Vancouver in the International Chinese New Talent 
						Singing Awards held in Hong Kong.<br><br></p>
						
						<div class="clear"></div><br><br>
						
						<figure>
							<img id="aboutPicture2" src="resources/images/about_2.jpg" alt="NTSA"/>
							<figcaption class="caption">NTSA Winners (left to right: Second place - Fox Zhao, First place - Alvin Man, Third place - Jane Yang)</figcaption>
						</figure>
					<p class="aboutText">
						<br><br>Alvin recently won the SQ17 Songwriters Quest competition with his song, 我們的力量 / You'll Make It.  Interestingly enough, this song was originally
						written as an English song, but was rewritten with Chinese lyrics for the purpose of the competition.  The lyrics were written by none other than
						Alvin's mother, Christy.<br><br></p>

						
						<div class="clear"></div><br><br>
						<figure>
							<img id="aboutPicture3" src="resources/images/about_3.jpg" alt="Chasing Eidolon"/>
							<figcaption class="caption">Chasing Eidolon (left to right: Manuel Lee(Drummer), Alvin Man(Lead vocals/Piano), Andrew Choy(Bass), Angelo Yue(Guitar))</figcaption>
						</figure>
					<p class="aboutText">
						<br><br>Alvin was the lead-vocalist, keyboardist, and songwriter of a band called TapeOver, later reforming into Chasing Eidolon.  They started out
						as a group of friends just jamming in the garage.  They eventually came out with a 6-song EP that was well received among local fans, as well
						among many internet radio listeners.  In the summer of 2011, their EP single "Set Me Free" was the top trending song on the indie music page 
						www.jamendo.com, accumulating over a quarter million downloads.  The song has been requested many times on Internet podcasts and Indie online
						radios.
						<br><br></p>
					
						<div class="clear"></div><br><br>
						<figure>
							<img id="aboutPicture4" src="resources/images/about_4.jpg" alt="RXF"/>
							<figcaption class="caption">RXF at Wintergroove 2009</figcaption>
						</figure>
					<p class="aboutText">
						<br><br>Alvin was also part of Rexcentrifunk(RXF), a competitive hip-hop dance crew, from 2009-2011.  They competed for and won many first place finishes in
						various dance festivals and competitions both locally and internationally.  Rexcentrifunk was known for their hard-hitting, high energy dance routines. <br><br></p>

						<div class="clear"></div><br><br>
				</div>
			</div>
		
		</div>
		<div id="footer">
		
		</div>
	
	</body>
	</html>