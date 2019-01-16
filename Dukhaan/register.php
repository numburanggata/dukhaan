<?php
	include('reg.php'); // Includes Login Script
	
	if(isset($_SESSION['login_user']))
	{
		header("location: cp.php");
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
	
	<body onload="autoScrollTo('div2');" onload="return false;">
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
				<li class='active'><a href='/Dukhaan/register.php'><span>Register</span></a></li>
				<li><a href='/Dukhaan/login.php'><span>Login</span></a></li>
				<li><a href='/Dukhaan/dlclient.php'><span>Download Client</span></a></li>
			</ul>
		</div>
		
		<div id="login">
		<br>
  <form id="div2" method="post" action="">
	<input name="uname" type="data" placeholder="Fullname" />
    <input name="pass" type="password" placeholder="Password" />
	<input name="repass" type="password" placeholder="Re-type password" />
	<br><br>
	<input name="prev" type="data" placeholder="Privilege" />
	<br><br>
    <input type="submit" name="submit" value="REGISTER" />
	<h4><?php echo $error; ?></h4>
  </form>
</div>

	</body>
</html>