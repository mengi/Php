<?php 
include("_header.php");
?>
<div class="container">
	<div class="row">
          	<div class="alert alert-info">
                <a class="close" data-dismiss="alert" href="#">×</a>Lütfen Gerekli Alanları Doldurunuz.
            </div>   
		
	</div>
</div> 
<div class="container">
	<div class="row">
			<div class="span4 offset4 well" style ="position:relative;right: 0.25in;top:0.50in;height: 4.0in">
			<legend>Üye Kayıt</legend>
			<form method="POST" action="userkayitv.php" accept-charset="UTF-8">
			<input type="text" name="eposta" placeholder="E-posta" style ="width:3.0in;"/>

			<input type="text" name="username" placeholder="Kullanıcı Adı" style ="width:3.0in;"/>
			<input type="text" name="name" placeholder="Ad ve Soyad" style ="width:3.0in;"/>
			<input type="password"  class="span4" name="password" placeholder="Password">
			<input type="password"  class="span4" name="passwordtk" placeholder="Password (Tekrar)">
			
			<select name="cinsiyet" class="input-xlarge" style ="width:3.16in;">
			
					<option> Cinsiyet Seçiniz</option>
					<option> BAY</option>
					<option> BAYAN</option>
							
			</select>
			<button type="submit" name="submit" class="btn btn-info btn-block">GÖNDER</button>
			</form>    
		</div>
	</div>
</div> 