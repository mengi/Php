<?php
	$dhost = 'localhost'; 
	$uname = '';
	$pword = ''; 
	$dbase = 'test'; 
	mysql_query("SET NAMES UTF8");

	mysql_connect ($dhost,$uname,$pword) or die (mysql_error());
	mysql_select_db($dbase) or die (mysql_error());
?>