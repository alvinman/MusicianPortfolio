<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - News</title>
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
			<div id="newsContent">
			
				<div class="pageHeading">
					<p>NEWS</p>
				</div>
				
				<div id="newsItems">
				
					<div class="newsElement">
					
						<div class="date">
							<div class="dateBox">
								<div class="dateText">
									<p>MAR</p>
									<p>29</p>
								</div>
							</div>
						</div>
					
						<div class="pictureAndDescription">
							<img src="resources/images/news_images/youtube.jpg" alt="YouTube" />
							<p class="headline">March 29, 2014 - 500 Subscribers!</p>
							<p>Thanks to all your support, we've passed 500 subs on YouTube! Now onto 1000.  If you haven't been to my youtube channel, it's where
							I post song covers and originals.  School has slowed the output of them, but I'll make them up in the summer, Now that the site is pretty much
						    complete, I'll be uploading them here as well.  Stay tuned!</p>
						</div>
										
					</div>
					
					<div class="newsElement">
					
						<div class="date">
							<div class="dateBox">
								<div class="dateText">
									<p>MAR</p>
									<p>13</p>
								</div>
							</div>
						</div>
					
						<div class="pictureAndDescription">
							<img src="resources/images/news_images/mar_13_new_site.jpg" alt="New Website" />
							<p>March 13, 2014 - The website is nearing the final phases of construction!  What do you think?  This site will become Alvin's primary destination for sharing his music as well as any updates to his musical career.  Content will be added gradually as the site finishes development, but you can already go ahead and check out some photos and videos that have been added in the media section.  Feel free to explore some of Alvin's social media links, and be sure to check back soon for more content!   </p>
						</div>
										
					</div>
					
					<div class="newsElement">
					
						<div class="date">
							<div class="dateBox">
								<div class="dateText">
									<p>JAN</p>
									<p>1</p>
								</div>
							</div>
						</div>
					
						<div class="pictureAndDescription">
							<img src="resources/images/news_images/jul_9_ntsa.jpg" alt="NTSA Picture" />
							<p>May 5, 2009 - Alvin has been selected as one of the eight finalists for the New Talent Singing Awards 2009, hosted by Fairchild TV!  He will undergo 2 months of vigorous training and preparation, culminating in a once in a life time performance and competition, at The Centre in downtown Vancouver.</p>
							
								<p>More details soon!</p>
							
							
						</div>
										
					</div>					
					
					<div class="newsElement">
					
						<div class="date">
							<div class="dateBox">
								<div class="dateText">
									<p>NOV</p>
									<p>20</p>
								</div>
							</div>
						</div>
					
						<div class="pictureAndDescription">
							<img src="resources/images/news_images/eidolon_cds.jpg" alt="Chasing Eidolon CDs" />
							<p>Nov 20, 2008 - Chasing Eidolon's first EP is finally released.  The setlist is as follows:
								
								<p>Fallen Down<br>Sunset<br>I'll Be There<br>You Can't Have Everything<br>Set Me Free<br>Puppet<br><br>
								
								
								Check them out on the Media Song page, and keep an eye out for future releases!
								
							</p>
						</div>
										
					</div>

				
				</div>
				
			</div>
		</div>
	
		<div id="footer">
		
		</div>
	
	</body>
	</html>