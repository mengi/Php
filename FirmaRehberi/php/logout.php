﻿<?php
	
	session_start();
	
	
	unset($_SESSION['name']);
	
	header('Location: giris.php');
?>