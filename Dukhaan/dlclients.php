<?php
	session_start();
	if(!isset($_SESSION['login_user']))
	{
		header("location: dlclient.php");
	}
		if (isset($_POST['download']))
	{
		header("location: Agomel.exe");
	}
	include('logged.php');
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

		<div class="auth">Logged in as <strong><?php echo $login_session;?></strong>  |  <a href="cp.php" class="boxhead">User CP</a>  |  <a href="logout.php" class="boxhead">Log out</a></div>
		<h1>ALAQAH</h1>
		<br>
		<br>
		<hr>
		<h2>802.11-based Advanced Security System</h2>
		<hr> 	
		<div id='cssmenu'>
			<ul>
			<li><a href='/Dukhaan/cp.php'><span>User Control Panel</span></a></li>
			<li class='active'><a href='/Dukhaan/dlclients.php'><span>Download Client</span></a></li>
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