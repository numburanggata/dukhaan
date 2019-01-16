
<?php
session_start();
include('logged.php');
mysql_query("update user_db set user_pos='d200x200' where username = '$user_check'", $connection);
if(session_destroy()) // Destroying All Sessions
{
	header("Location: login.php"); // Redirecting To Home Page
}
?>