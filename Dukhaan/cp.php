<?php
	session_start();
	if(!isset($_SESSION['login_user']))
	{
		header("location: login.php");
	}
	include('logged.php');
	include('fetch.php');
	include('ts.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>We Are Seeds</title>
		<link href='new2.css' rel='stylesheet'>
		<link href='jin.css' rel='stylesheet'>
		<script src="autoScrollTo.js"></script>
	</head>
	
	<body onload="autoScrollTo('cssmenu');" onload="return false;">
		<br>		
			<img class="cent_disp" src="Seeds.png" width="400" height="492" alt="Seeds">
		<div class="auth">Logged in as <strong><?php echo $login_session;?></strong>  |  <a href="cp.php">User CP</a>  |  <a href="logout.php">Log out</a></div>

		
		<h1>ALAQAH</h1>
		<br>
		<br>
		<hr>
		<h2>802.11-based Advanced Security System</h2>
		<hr> 	
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='/Dukhaan/cp.php'><span>User Control Panel</span></a></li>
				<li><a href='/Dukhaan/dlclients.php'><span>Download Client</span></a></li>
			</ul>
		</div>
		
		<div class='norm'>
			<ul class='prof'>
				<img class="cent_d" src="monogatari/hin.png" width="400" height="492" alt="Seeds">
				<li>Username: <strong><?php echo $login_session;?></strong></li>
				<li>Privilege: <strong><?php echo $priv;?></strong></li>
				<br>
				<li>Hardware number: <strong><?php echo $user_hw; ?></strong></li>
				<li>Current Unix timestamp: <strong><?php echo $curr_ts; ?></strong></li>
			</ul>
		</div>
		<div id="login">
		<form id="div2" method="post" action="">
			<input type="submit" name="submit" value="RE-AUTHENTICATE" />
		</form>	
		</div>
	</body>
</html>