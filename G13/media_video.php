<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - Videos</title>
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
							<div id="videoBlock"></div>
						</div>
						TEST CODE-->
					
					</div>
				</div>
				
				<div id="videoContent">
				
					

			
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: So Sick (cover)</span></p>
							<p>Artist: Ne-Yo</p>
							<p>Date: Sept 16, 2013</p><br>
							<p>Description: Old song, but still love it!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/8zBPw5LHGK4"></iframe>
							</div>
						</div>
					
					</div>
			
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: As Long As You Love Me (cover)</span></p>
							<p>Artist: Justin Bieber</p>
							<p>Date: Apr 4, 2013</p><br>
							<p>Description: A more mellow take on Justin Bieber's "As Long As You Love Me".</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/A4i_HdYU_bg"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Lights (cover)</span></p>
							<p>Artist: Ellie Goulding</p>
							<p>Date: Mar 7, 2013</p><br>
							<p></p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/fpdi35L05wE"></iframe>
							</div>
						</div>
					
					</div>
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Jay Chou - 珊瑚海 / Coral Sea (cover with Queenie Ho) </span></p>
							<p>Artist: Jay Chou</p>
							<p>Date: Feb 20, 2013</p><br>
							<p>Description: Here's a duet with an amazing singer, Queenie Ho!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/rWBYbRcxAKg"></iframe>
							</div>
						</div>
					
					</div>
			
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Good Time (cover)</span></p>
							<p>Artist: Owl City & Carly Rae Jepsen</p>
							<p>Date: Oct 28, 2012</p><br>
							<p>Description: As promised, a new cover!  Hope i did it justice!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/SDpMYkGKEMg"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: 骚灵情歌 (cover)</span></p>
							<p>Artist: Hins Cheung</p>
							<p>Date: Sep 25, 2012</p><br>
							<p>Description: Here's my first Cantonese cover, hope you enjoy it even if you don't understand! =)</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/UBNGne0AC5s"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: What Makes You Beautiful (cover with Adeline Hao)</span></p>
							<p>Artist: One Direction</p>
							<p>Date: Aug 25, 2012</p><br>
							<p>Description: My first collabo! with the beautiful Adeline Hao =)</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/LPzCtAy_IOQ"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Kiss You Inside Out (cover)</span></p>
							<p>Artist: Hedley</p>
							<p>Date: Jul 20, 2012</p><br>
							<p>Description: This cover was made as a birthday present for my amazing friend ANTHEA!  HAPPY BIRTHDAY!! Hope you like it =)</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/TQgVydPXFls"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: 江南 / River South (cover)</span></p>
							<p>Artist: JJ Lin</p>
							<p>Date: Jul 7, 2012</p><br>
							<p>Description: Decided to cover one of my favourite JJ Lin (林俊杰) songs.  Thanks for listening!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/trEx3SiYpas"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: 我們的力量 / You'll Make It - (original) </span></p>
							<p>Artist: Alvin</p>
							<p>Date: May 31, 2012</p><br>
							<p>Description: My first original Chinese song: 我們的力量 (English title: You'll Make It).<br><br>

							This is the winning song of the SQ17 songwriting competition (第17屆加拿大中文歌曲創作大賽) in Vancouver 2012.<br></p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/NTJieDeCu-Y"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: The One That Got Away(cover)</span></p>
							<p>Artist: Katy Perry</p>
							<p>Date: Apr 26, 2012</p><br>
							<p></p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/Zh-w02SRAww"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Where Are You Christmas(cover)</span></p>
							<p>Artist: Faith Hill</p>
							<p>Date: Dec 18, 2011</p><br>
							<p>Description: Finally!  A new cover, and just in time for Christmas! Hope you enjoy this one, put quite some effort into making it.  Merry Christmas!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/giMD2Eo4Jis"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Just The Way You Are(cover)</span></p>
							<p>Artist: Bruno Mars</p>
							<p>Date: Sept 17, 2011</p><br>
							<p>Description: Someone requested a Bruno Mars cover, so here it is!  Enjoy!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/EwkMr8lBAps"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Stronger - Acoustic (cover)</span></p>
							<p>Artist: Kanye West</p>
							<p>Date: Aug 13, 2011</p><br>
							<p>Description: A totally different take on the song Kanye West - Stronger.  Hope you guys enjoy this acoustic cover with only piano and vocals!  Remember to like and subscribe!<br><br>

							PS: Had to change the lyrics in one or two areas to make it flow with the new instrumentation.</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/APlE79LxOQQ"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Pray (cover)</span></p>
							<p>Artist: Justin Bieber</p>
							<p>Date: Jul 3, 2011</p><br>
							<p>Description: I really like the message of this song so I decided to do a cover of it!</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/LZSYEfyFcH0"></iframe>
							</div>
						</div>
					
					</div>
					
					<div class="videoElement">
					
						<div class="videoDescription">
							<p><span class="blueTitle">Title: Only Hope (cover)</span></p>
							<p>Artist: Mandy Moore</p>
							<p>Date: Jun 13, 2011</p><br>
							<p>Description:This is my first cover on youtube, singing Mandy Moore's Only Hope.</p>
						</div>
						<div class="videoContainerWrapper">
							<div class="videoContainer">
								<iframe width="420" height="345" src="http://www.youtube.com/embed/yJYg4dgLlow"></iframe>
							</div>
						</div>
					
					</div>
				
				
				</div>
			
			</div>
			
		</div>
			
			<div class="clear"></div>
	
		<div id="footer">
		</div>
		
	</body>
	</html>