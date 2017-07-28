<?php
	session_start();
	
	include("config.php");
	mysql_query("SET NAMES UTF8");

	
	$login = mysql_query("SELECT * FROM kullanicilar WHERE (username = '" . mysql_real_escape_string($_POST['name']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "')");
	
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
