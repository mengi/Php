<?php

	include("_header.php");
	session_start();

	error_reporting(E_ALL ^ E_NOTICE);

	
	if(isset($_SESSION['name']))
		{
			header('Location: success.php');
		}
	
?>
<div class="container">
	<div class="row">
          	<div class="alert alert-info">
                <a class="close" data-dismiss="alert" href="#">×</a>Üye Giriş
            </div>   
		
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span4 offset4 well" style ="position:relative;right: 0.25in;top:0.50in;height: 4.in">
			<legend>Lütfen Giriş Yapınız</legend>
			<form method="POST" action="login.php" accept-charset="UTF-8">
			<input type="text" class="span4" name="name" placeholder="Kullanıcı Adı">
			<input type="password"  class="span4" name="password" placeholder="Password">
			<button type="submit" name="submit" class="btn btn-info btn-block">GİRİŞ YAP</button>
			</form>    
		</div>
	</div>
</div>
    
    
    
    
