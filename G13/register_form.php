<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - REGISTER</title>
		<link rel="stylesheet" href="base.css" TYPE="text/css">
		<link rel="stylesheet" href="base_nonvalidated2.css" TYPE="text/css">
		<link rel="stylesheet" href="component.css" TYPE="text/css">
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>		
		<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
		
		
			<!-- Validation Form -->
			function formValidate() {
				
				return (warnFirstName('inputFirstName') && warnLastName('inputLastName') && warnUserName('inputUsername') && warnPass('Password') && warnEmail('inputEmail'));
				
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


			<!--First Name Validation-->
			function checkFirstNameEmpty(id) {
				var firstName = document.getElementById(id).value;
				return firstName.length;
			}
			
			function checkFirstName(id) {
				var firstName;
				var firstNameValidate = /^[A-z]+$/;
				firstName = document.getElementById(id).value;
				return (firstName.match(firstNameValidate));
			}
			function warnFirstName(id) {
				if(checkFirstNameEmpty(id) > 0) {
					if(!checkFirstName(id)) {
						document.getElementById('firstnameError').innerHTML = 'Must contain letters only.';
						return false;
					}
					if(checkFirstName(id)) {
						document.getElementById('firstnameError').innerHTML = '';
						return true;
					}
				} else {
					document.getElementById('firstnameError').innerHTML = 'Please enter first name.';
					return false;
				}
			}
			<!--Last Name Validation-->
			function checkLastNameEmpty(id) {
				var lastName = document.getElementById(id).value;
				return lastName.length;
			}
			
			function checkLastName(id) {
				var lastName;
				var lastNameValidate = /^[A-z]+$/;
				lastName = document.getElementById(id).value;
				return (lastName.match(lastNameValidate));
			}
			function warnLastName(id) {
				if (checkLastNameEmpty(id) > 0) {
					if(!checkLastName(id)) {
						document.getElementById('lastnameError').innerHTML = 'Must contain letters only.';
						return false;
					}
					if(checkLastName(id)) {
						document.getElementById('lastnameError').innerHTML = '';
						return true;
					}
				} else {
					document.getElementById('lastnameError').innerHTML = 'Please enter last name.';
					return false;
				}
			}
			<!--User Name Validation-->
			function checkUserNameEmpty(id) {
				var userName = document.getElementById(id).value;
				return userName.length;
			}
			
			function checkUserName(id) {
				var userName;
				var userNameValidate = /^[A-z0-9]+$/;
				userName = document.getElementById(id).value;
				return (userName.match(userNameValidate));
			}
			function warnUserName(id) {
				if (checkUserNameEmpty(id) > 0) {
					if (checkUserNameEmpty(id) < 21) {
						if(!checkUserName(id)) {
							document.getElementById('usernameError').innerHTML = 'Must contain letters and/or numbers only.';
							return false;
						}	
						if(checkUserName(id)) {
							document.getElementById('usernameError').innerHTML = '';
							return true;
						}
					}else{
						document.getElementById('usernameError').innerHTML = 'Must contain less than 20 characters.';
						return false;
					}
				} else {
					document.getElementById('usernameError').innerHTML = 'Please enter a username.';
					return false;
				}
			}
			<!--Password Validation-->	
			function checkPass(id) {
				var passOne;
				var passTwo;
				passOne = document.getElementById("input" + id).value;
				passTwo = document.getElementById("check" + id).value;
				return (passOne == passTwo);
			}
			function checkPassLengthOne(id) {
				var passLengthOne;
				passLengthOne = document.getElementById("input" + id).value;
				return (passLengthOne.length);
			}
			function checkPassLengthTwo(id) {
				var passLengthTwo;
				passLengthOne = document.getElementById("check" + id).value;
				return (passLengthOne.length);
			}
			function warnPass(id) {
				if(checkPassLengthOne(id) > 0) {
					if(checkPassLengthOne(id) > 7) {
						document.getElementById('passLengthError').innerHTML = '';
						if(checkPassLengthOne(id) < 31) {
							if(checkPassLengthTwo(id) > 0) {
								if(checkPass(id)) {
									document.getElementById('passError').innerHTML = '';
									return true;
								}
								if(!checkPass(id)) {
									document.getElementById('passError').innerHTML = 'Password is not the same.';
									return false;
								}
							}else{
								document.getElementById('passError').innerHTML = 'Please enter the password';
								return false;
							}
						}else{
							document.getElementById('passLengthError').innerHTML = 'Maximum of 30 characters only'
							return false;
						}
					}else{
						document.getElementById('passLengthError').innerHTML = 'Minimum of 8 characters required'
						return false;
					}
				}else{
					document.getElementById('passLengthError').innerHTML = 'Please enter a password';
					return false;
				}
			}
			<!--Email Validation-->
			function checkEmailEmpty(id) {
				var email = document.getElementById(id).value;
				return email.length;
			}
			
			function checkEmail(id) {
				var email;
				email = document.getElementById(id).value;
				var emailValidation = /^^[A-z0-9_.-]+@{1}[A-z0-9]+\.{1}[A-z]+$/;
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
			<div id="registerContent">
			
				<div class="pageHeading">
					<p>REGISTER</p>
				</div>
				
				<div class="loginErrorMessage">
					<?php
						if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
							echo '<ul class="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg) {
								echo '<li>',$msg,'</li>'; 
							}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
						}
					?>
				</div>
				
				<div id="registerElements">
					<div id="registerForm">
						<form id="registerInput" action="register.php" method="post" name="registerForm" onsubmit="return formValidate();">
								<div class="inputTitle">FIRST NAME</div><div id="firstnameError"></div>
								<input id="inputFirstName" onblur="warnFirstName('inputFirstName')" name="fname" type="text" spellcheck="false">
								<div class="inputTitle">LAST NAME</div><div id="lastnameError"></div>
								<input id="inputLastName" onblur="warnLastName('inputLastName')" name="lname" type="text" spellcheck="false">
								<div class="inputTitle">USERNAME</div><div id="usernameError"></div>
								<input id="inputUsername" onblur="warnUserName('inputUsername')" name="login" type="text" spellcheck="false">
								<div class="inputTitle">PASSWORD</div><div id="passLengthError"></div>
								<input id="inputPassword" onblur="warnPass('Password')" name="password" type="password">
								<div class="inputTitle">CONFIRM PASSWORD</div><div id="passError"></div>
								<input id="checkPassword" onblur="warnPass('Password')" name="cpassword" type="password">
								<button id="registerSubmit" name="Submit">REGISTER</button>
						</form>
					</div>
					
				</div>

				
				
				
			</div>
		</div>
	
		<div id="footer">
		
		</div>
	
	</body>
	</html>