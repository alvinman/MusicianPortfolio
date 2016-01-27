<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - Songs</title>
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
			
			
			<div class="mediaContent">
			
				<div id="subNav">
					<div id="subNavWrapper">
						<p id="songButton"><a href="media_songs.php"><span data-hover="SONGS">SONGS</span></a></p>
						<p id="videoButton"><a href="media_video.php"><span data-hover="VIDEOS">VIDEOS</span></a></p>
						<p id="galleryButton"><a href="media_gallery.php"><span data-hover="GALLERY">GALLERY</span></a></p>
					</div>
				
				<div id="whiteSpace">
					<!--TEST CODE
					<div class="blockWrapper">
						<div id="songBlock"></div>
					</div>
					TEST CODE-->
				</div>
					
				</div>
				
				<div id="songContent">
				
				<div class="songTypeWrapper">
					<p class="title">Originals</p>
					<div class="filler"></div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/youll_make_it.ogg" type="audio/ogg" />
						<source src="resources/songs/youll_make_it.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">我們的力量 / You'll Make It</span></p>
						<p>Alvin Man</p>
						<p>4:40</p>
					</div>
				</div>
				
				<div class="songTypeWrapper">
					<p class="title">Covers</p>
					<div class="filler"></div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/as_long_as_you_love_me.ogg" type="audio/ogg" />
						<source src="resources/songs/as_long_as_you_love_me.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">As Long As You Love Me (cover)</span></p>
						<p>Justin Bieber</p>
						<p>3:49</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/coral_sea.ogg" type="audio/ogg" />
						<source src="resources/songs/coral_sea.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">珊瑚海 / Coral Sea (cover)</span></p>
						<p>Jay Chou</p>
						<p>5:05</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/good_time.ogg" type="audio/ogg" />
						<source src="resources/songs/good_time.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Good Time (cover)</span></p>
						<p>Owl City & Carly Rae Jepsen</p>
						<p>3:48</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/jiang_nan.ogg" type="audio/ogg" />
						<source src="resources/songs/jiang_nan.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">江南 / River South (cover)</span></p>
						<p>JJ Lin</p>
						<p>2:56</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/just_the_way_u_are.ogg" type="audio/ogg" />
						<source src="resources/songs/just_the_way_u_are.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Just The Way You Are (cover)</span></p>
						<p>Bruno Mars</p>
						<p>4:00</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/kiss_u_inside_out.ogg" type="audio/ogg" />
						<source src="resources/songs/kiss_u_inside_out.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Kiss U Inside Out (cover)</span></p>
						<p>Hedley</p>
						<p>3:53</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/lights.ogg" type="audio/ogg" />
						<source src="resources/songs/lights.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Lights (cover)</span></p>
						<p>Ellie Goulding</p>
						<p>3:13</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/only_hope.ogg" type="audio/ogg" />
						<source src="resources/songs/only_hope.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Only Hope (cover)</span></p>
						<p>Mandy Moore</p>
						<p>3:40</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/pray.ogg" type="audio/ogg" />
						<source src="resources/songs/pray.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Pray (cover)</span></p>
						<p>Justin Bieber</p>
						<p>3:39</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/so_sick.ogg" type="audio/ogg" />
						<source src="resources/songs/so_sick.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">So Sick (cover)</span></p>
						<p>Ne-Yo</p>
						<p>2:58</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/sou.ogg" type="audio/ogg" />
						<source src="resources/songs/sou.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">骚灵情歌 (cover)</span></p>
						<p>Hins Cheung</p>
						<p>4:16</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/the_one_that_got_away.ogg" type="audio/ogg" />
						<source src="resources/songs/the_one_that_got_away.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">The One That Got Away (cover)</span></p>
						<p>Katy Perry</p>
						<p>4:10</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/what_makes_you_beautiful.ogg" type="audio/ogg" />
						<source src="resources/songs/what_makes_you_beautiful.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">What Makes You Beautiful (cover)</span></p>
						<p>One Direction</p>
						<p>3:30</p>
					</div>
				</div>
				
				<div class="songElement">
				
				
					<audio class="audioPlayers" controls="controls">
						<source src="resources/songs/where_are_you_christmas.ogg" type="audio/ogg" />
						<source src="resources/songs/where_are_you_christmas.mp3" type="audio/mp3" />
					Your browser does not support the audio element.
					</audio>
					<div class="songDescription">
						<p>Title:</p>
						<p>Artist:</p>
						<p>Length:</p>
					</div>
					<div class="songDescriptionContent">
						<p><span class="blueTitle">Where Are You Christmas (cover)</span></p>
						<p>Faith Hill</p>
						<p>3:29</p>
					</div>
				</div>
		
				</div>
			
			</div>
		</div>
			
	
		<div id="footer">
		
		</div>
	
	</body>
	</html>