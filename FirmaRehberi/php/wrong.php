<?php 

include("_header.php"); 

?>
<div class="container">
	<div class="row">
          	<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Kullanıcı Adı veya Şifre Yanlış!
            </div>   
		
	</div>
</div>  
    
<div class="container">
	<div class="row">
			<div class="span4 offset4 well" style ="position:relative;right: 0.25in;top:0.50in;height: 4.in">
			<legend>Lütfen Giriş Yapınız</legend>
          
			<form method="POST" action="login.php" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="name" placeholder="Kullanıcı Adı">
			<input type="password" id="password" class="span4" name="password" placeholder="Şifre">
			<button type="submit" name="submit" class="btn btn-info btn-block">GİRİŞ YAP</button>
			</form>    
		</div>
	</div>
</div>   
    
    
    
    
    
