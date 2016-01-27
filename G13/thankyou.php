<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - Contacts</title>
		<link rel="stylesheet" href="base.css" TYPE="text/css">
		<link rel="stylesheet" href="base_nonvalidated2.css" TYPE="text/css">
		<link rel="stylesheet" href="component.css" TYPE="text/css">
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>		
		<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			<!-- Form validation -->
			function formValidate() {
				
				return (warnName('inputName') && warnEmail('inputEmail') && warnSubject('Subject') && warnMessage('inputSubject'));
			}
			
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
		
			<!--Name validation-->
			function checkNameEmpty(id) {
				var name = document.getElementById(id).value;
				return name.length;
			}
			
			function checkName(id) {
				var name = document.getElementById(id).value;
				var nameValidation = /^[A-z]+[\s?[A-z]*]*$/;
				return (name.match(nameValidation));
			}
			
			function warnName(id) {
				if (checkNameEmpty(id) > 0) {
					if(!checkName(id)) {
						document.getElementById('nameError').innerHTML = 'Must contain letters only.';
							return false;
					}	
					
					if(checkName(id)) {
						document.getElementById('nameError').innerHTML = '';
						return true;
					}
				} else {
					document.getElementById('nameError').innerHTML = 'Please input a name.';
					return false;
				}
			}		
			
			<!--Email validation-->
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
			function warnEmail(id) {
				if (checkEmailEmpty(id) > 0) {
					if(!checkEmail(id)) {
						document.getElementById('emailError').innerHTML = 'Invalid Email.';
						return false;
					}	
					if(checkEmail(id)) {
						document.getElementById('emailError').innerHTML = '';
						return true;
					}	
				} else {
					document.getElementById('emailError').innerHTML = 'Please enter an email.';
					return false;
				}
			}
			<!--Subject title validation-->
			function checkSubjectEmpty(id) {
				var subject = document.getElementById(id).value;
				return subject.length;
			}
			
			function checkSubject(id) {
				var subject;
				subject = document.getElementById(id).value;
				return (subject.length !=0 && subject.length < 50);
			}
			function warnSubject(id) {
				if (checkSubjectEmpty(id) > 0) {
					if(!checkSubject(id)) {
						document.getElementById('subjectError').innerHTML = 'Must contain less than 50 characters.';
						return false;
					}	
					if(checkSubject(id)) {
						document.getElementById('subjectError').innerHTML = '';
						return true;
					}	
				} else {
					document.getElementById('subjectError').innerHTML = 'Please enter a subject.';
					return false;
				}
			}
			<!--Subject content validation-->
			function checkMessage(id) {
				var messageContent;
				messageContent = document.getElementById(id).value;
				return (messageContent.length !=0);
			}
			function warnMessage(id) {
				if(!checkMessage(id)) {
					document.getElementById('messageError').innerHTML = 'Please enter a message.';
					return false;
				}	
				if(checkMessage(id)) {
					document.getElementById('messageError').innerHTML = '';
					return true;
				}
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
			<div id="contactContent">
			
				<div class="pageHeading">
					<p>THANKS</p>
				</div>

				<div id="contactElements">
					<div id="thankyou">
						<p>We will get back to you soon!</p>
					</div>
					
				</div>

				
				
				
			</div>
		</div>
	
		<div id="footer">
		
		</div>
	
	</body>
	</html>