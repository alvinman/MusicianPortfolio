<?php
	session_start();
	
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Alvin Man - Forums</title>
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
			<div id="forumContent">
			
				<div class="pageHeading">
					<p>FORUMS</p>
				</div>
				
				<div id="forums">
					<?php
						require_once('config.php');

						// Connect to server and select database.
						mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
						mysql_select_db(DB_DATABASE)or die("cannot select DB");
						$tbl_name="topic"; // Table name


						$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id";
						// ORDER BY id DESC is order result by descending
						$result=mysql_query($sql);
					?>

					<div id="forumTable">
						<table id="forumTable2">
							<tr>
								<td id="createNewTopic" colspan="3"><a href="add_topic_form.php">Create New Topic&nbsp;</a></td>
							</tr>
							<tr id="forumHead">
								<td id="firstCol">Post #</td>
								<td id="secondCol">Topic</td>
								<td id="thirdCol">Date / Time</td>
							</tr>

							<?php
							while($rows=mysql_fetch_array($result)){ // Start looping table row
							?>

							<tr>
								<td class="centerCol"><?php echo $rows['id']; ?></td>
								<td><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a> by: <?php echo $rows['login']; ?><BR></td>
								<td class="centerCol"><?php echo $rows['datetime']; ?></td>
							</tr>

							<?php
							// Exit looping and close connection
							}
							mysql_close();
							?>
							
						</table>
					</div>
				</div>
		
				
				
			</div>
		</div>
	
		<div id="footer">
		
		</div>
	
	</body>
	</html>