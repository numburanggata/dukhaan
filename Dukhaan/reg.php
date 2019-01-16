<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	
	if (isset($_POST['submit'])) 
	{

			$username=$_POST['uname'];
			$password=$_POST['pass'];
			$repassword=$_POST['repass'];
			$prev=$_POST['prev'];

			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			
			if ($username == null or $repassword == null or $password == null or $prev == null) 
			{
			$error = "Fill out all of the forms";
			}
			else
			{
				if ($password != $repassword)
				{
					$error = "Re-type the right password";	
				}
				else
				{
					$connection = mysql_connect("localhost", "root", "");
					$db = mysql_select_db("dukhaan", $connection);
					$query = mysql_query("select * from user_db where username='$username'", $connection);
					$userq = mysql_query("select user_hw from user_db where cast(user_hw as CHAR) like '44%'", $connection);
					$rowsu = mysql_num_rows($userq);
					$rows = mysql_num_rows($query);
						if ($rows > 0) 
						{
							$error = "That name has been used";
						} 
						else 
						{							
							$unixt=time();
							$user_hw = $rowsu + 441;
							$this_reg_pos = '200x200';
							mysql_query("insert into user_db values ('$username',SHA1('$password'),'$prev','$unixt','$this_reg_pos', ' ','$user_hw')", $connection);
							$haspass = mysql_query("select password from user_db where username='$username'", $connection);
							$haspass = mysql_fetch_array($haspass);
							echo '<script type="text/javascript">alert("Your account has been registered.ID: '.$username.';'.$haspass['password'].';'.$unixt.'")</script>';
						}
				}
			}
		
	}
?>