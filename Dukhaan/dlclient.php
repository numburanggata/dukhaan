<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		header("location: dlclients.php");
	}
	
	if (isset($_POST['download']))
	{
		header("location: Agomel.exe");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>We Are Seeds</title>
		<link href='new2.css' rel='stylesheet'>
		<link href='jin.css' rel='stylesheet'>
		<script src="autoScrollTo.js"></script>
	</head>
	
	<body  onload="autoScrollTo('div2');" onload="return false;" >
		<br>		
	
		<img class="cent_disp" src="Seeds.png" width="400" height="492" alt="Seeds">
		
		<h1>ALAQAH</h1>
		<br>
		<br>
		<hr>
		<h2>802.11-based Advanced Security System</h2>
		<hr> 	
		<div id='cssmenu'>
			<ul>
				<li><a href='/Dukhaan/register.php'><span>Register</span></a></li>
				<li><a href='/Dukhaan/login.php'><span>Login</span></a></li>
				<li class='active'><a href='/Dukhaan/dlclient.php'><span>Download Client</span></a></li>
			</ul>
		</div>
		
		<div id="login">
		<br>
  <form id="div2"  action="" method="post">
	<h4>Download the latest client: Najm 3.0</h4>
	<img class="cent_disp" src="queerat.png" width="250" height="204" alt="Seeds">
	<br><br><br><br><br><br>
	<input name="download" type="submit" value="DOWNLOAD"/>
  </form>
</div>
		
		
	</body>
</html>