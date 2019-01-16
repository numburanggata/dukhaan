<?php
$ses_sql = mysql_query("select * from user_db where username = '$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$priv = $row['user_privilige'];
$curr_ts = $row['curr_ts'];
$user_hw = $row['user_hw'];
?>