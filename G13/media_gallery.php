<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - Gallery</title>
		<link rel="stylesheet" href="base.css" TYPE="text/css">
		<link rel="stylesheet" href="base_nonvalidated2.css" TYPE="text/css">
		<link rel="stylesheet" href="component.css" TYPE="text/css">	
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>		
		<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
		
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/lightbox-2.6.min.js"></script>
		
		<link rel="stylesheet" href="css/lightbox.css" TYPE="text/css">
		
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
							<div id="galleryBlock"></div>
						</div>
						TEST CODE-->						
					</div>
					
				</div>
				
				<div id="galleryContent">
					
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/ce1.jpg" data-lightbox="img1"><img src="resources/images/gallery/ce1.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/ce2.jpg" data-lightbox="img1"><img src="resources/images/gallery/ce2.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/queenie.jpg" data-lightbox="img1"><img src="resources/images/gallery/queenie.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/tvb2.jpg" data-lightbox="img1"><img src="resources/images/gallery/tvb2.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/tvb3.jpg" data-lightbox="img1"><img src="resources/images/gallery/tvb3.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/tvb4.jpg" data-lightbox="img1"><img src="resources/images/gallery/tvb4.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/sq17.jpg" data-lightbox="img1"><img src="resources/images/gallery/sq17.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/ryan0019.jpg" data-lightbox="img1"><img src="resources/images/gallery/ryan0019.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/ryan0021.jpg" data-lightbox="img1"><img src="resources/images/gallery/ryan0021.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/rxf.jpg" data-lightbox="img1"><img src="resources/images/gallery/rxf.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/gallery/rxf2.jpg" data-lightbox="img1"><img src="resources/images/gallery/rxf2.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/1.jpg" data-lightbox="img1"><img src="resources/images/headshots/1.jpg" alt="headshot1" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/28.jpg" data-lightbox="img1"><img src="resources/images/headshots/28.jpg" alt="headshot4" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/31.jpg" data-lightbox="img1"><img src="resources/images/headshots/31.jpg" alt="headshot5" /></a>
						</div>
					</div>

					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/50.jpg" data-lightbox="img1"><img src="resources/images/headshots/50.jpg" alt="headshot7" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/64.jpg" data-lightbox="img1"><img src="resources/images/headshots/64.jpg" alt="headshot8" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/67.jpg" data-lightbox="img1"><img src="resources/images/headshots/67.jpg" alt="headshot9" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/99.jpg" data-lightbox="img1"><img src="resources/images/headshots/99.jpg" alt="headshot10" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/103.jpg" data-lightbox="img1"><img src="resources/images/headshots/103.jpg" alt="headshot11" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/117.jpg" data-lightbox="img1"><img src="resources/images/headshots/117.jpg" alt="headshot12" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/155.jpg" data-lightbox="img1"><img src="resources/images/headshots/155.jpg" alt="headshot14" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/164.jpg" data-lightbox="img1"><img src="resources/images/headshots/164.jpg" alt="headshot15" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/228.jpg" data-lightbox="img1"><img src="resources/images/headshots/228.jpg" alt="headshot16" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/234.jpg" data-lightbox="img1"><img src="resources/images/headshots/234.jpg" alt="headshot17" /></a>
						</div>
					</div>
					<div class="imageTiles">
						<div class="tileContent">
							<a href="resources/images/headshots/240.jpg" data-lightbox="img1"><img src="resources/images/headshots/240.jpg" alt="headshot18" /></a>
						</div>
					</div>
					
					
					
				</div>
				
			
			</div>
		</div>
	
		<div id="footer">
		
		</div>
	
		
	
	
	</body>
	</html>