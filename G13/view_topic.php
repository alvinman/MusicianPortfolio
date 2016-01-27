<?php
	include 'functions.php';
	session_start();
	require_once('config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];

	$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id WHERE id='$id'";
	$result=mysql_query($sql);

	$rows=mysql_fetch_array($result);
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
				
				<div id="responseForum">
					<table id="topic">
						<tr>
							<td><table>
						<tr>
							<td><?php echo $rows['topic']; ?></td>
						</tr>

						<tr>
							<td><?php echo $rows['detail']; ?></td>
						</tr>

						<tr>
							<td><strong>By :<?php echo $rows['login']; ?></td>
						</tr>

						<tr>
							<td>Date/time :<?php echo $rows['datetime']; ?></td>
						</tr>
						</table></td>
						</tr>
					</table>
					<BR>
					<?php
					$tbl_name2="response"; // Switch to table "response"

					$sql2="SELECT * FROM $tbl_name2 JOIN members ON members.member_id = response.member_id WHERE topic_id='$id'";
					$result2=mysql_query($sql2);

					while($rows=mysql_fetch_array($result2)){
					?>
					<table id="response">
						<tr>
							<td><table>
						<tr>
							<td>ID</td>
							<td>:</td>
							<td><?php echo $rows['id']; ?></td>
						</tr>
						<tr>
							<td id="firstCol3">Name</td>
							<td id="secondCol3">:</td>
							<td id="thirdCol3"><?php echo $rows['login']; ?></td>
						</tr>
						<tr>
							<td><strong>Response</td>
							<td>:</td>
							<td><?php echo $rows['response']; ?></td>
						</tr>
						<tr>
							<td><strong>Date/Time</td>
							<td>:</td>
							<td><?php echo $rows['datetime']; ?></td>
						</tr>
						</table></td>
						</tr>
					</table><br>

					<?php
					}
					mysql_close();
					?>

					<BR>
					<table id="yourResponse">
						<tr>
						<form name="form1" method="post" action="add_response.php">
							<td>
						<table>
						<tr>
							<td id="responseText">Response</td>
							<td></td>
							<td><textarea name="response" cols="70
							" rows="5" id="answer"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
							<td><input class="Submit" type="submit" name="Submit" value="Submit"> <input class="Submit" type="reset" name="Submit2" value="Reset"><div class="accountButtons"><a href="forum.php"><p>BACK TO FORUMS</p></a></div></td>
						</tr>
						</table>
						</td>
						</form>
						</tr>
					</table>
				</div>
		
				
				
			</div>
		</div>
	
		<div id="footer">
		
		</div>
	
	</body>
	</html>