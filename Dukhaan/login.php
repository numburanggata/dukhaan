<?php	
	include('auth.php'); // Includes Login Script

	if(isset($_SESSION['login_user']))
	{
		header("location: cp.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>We Are Seeds</title>
		<link href='/Dukhaan/new2.css' rel='stylesheet'>
		<link href='jin.css' rel='stylesheet'>
		<script src="autoScrollTo.js"></script>
	</head>
	
	<body onload="autoScrollTo('div2');" onload="return false;">
		<br>		
		<img class="cent_disp" src="Seeds.png" width="400" height="492" alt="Seeds">
		
		
		<h1>Alaqah</h1>
		<br>
		<br>
		<hr>
		<h2>802.11-based Advanced Security System</h2>
		<hr> 	
		<div id='cssmenu'>
			<ul>
			   <li><a href='/Dukhaan/register.php'><span>Register</span></a></li>
			   <li class='active'><a href='/Dukhaan/login.php'><span>Login</span></a></li>
				<li><a href='/Dukhaan/dlclient.php'><span>Download Client</span></a></li>
			</ul>
		</div>
		
		<div id="login">
		<br>
	<form id="div2" action="" method="post">
		<input type="data" name="username" placeholder="Username" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" name="submit" value="LOG IN" />
		<h4><?php echo $error; ?></h4>
	</form>

</div>
		
		
	</body>
</html>