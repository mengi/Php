<?php
	session_start();
	
	include("config.php");
	
	$login = mysql_query("SELECT * FROM admins WHERE (name = '" . mysql_real_escape_string($_POST['name']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "')");
	
	if (mysql_num_rows($login) == 1)
		{
			
			$_SESSION['name'] = $_POST['name'];
			
			header('Location: success.php');
		}
	else 
		{
			
			header('Location: wrong.php');
		}
?>