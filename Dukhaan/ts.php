<?php
	if (isset($_POST['submit'])) 
	{
		$unixt=time();
		mysql_query("update user_db set curr_ts='$unixt' where username = '$user_check'", $connection);
		mysql_query("update user_db set user_pos='o200x200' where username = '$user_check'", $connection);
		$pas = mysql_query("select password from user_db where username = '$user_check'", $connection);
		$row = mysql_fetch_assoc($pas);
		$pas = $row['password'];
		$npas = $pas . $unixt;
		//echo $npas;
		mysql_query("update user_db set cur_wpa2_pass=SHA1('$npas') where username='$user_check'");
		$pase = mysql_query("select cur_wpa2_pass from user_db where username = '$user_check'", $connection);
		$rowe = mysql_fetch_assoc($pase);
		$pase = $rowe['cur_wpa2_pass'];
		echo '<script type="text/javascript">alert("Your new password: '.$pase.'")</script>';	
		//echo '<script type="text/javascript">alert("Your new timestamp: '.$unixt.'")</script>';	
	}
?>