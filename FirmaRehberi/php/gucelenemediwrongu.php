<?php
	include('success.php');
	$durum = "durumu";
	mysql_query("SET NAMES UTF8");
?>



<div class="container-fluid" style = "margin-top:0.65in;">
  <div class="row-fluid">
    <div class="span2">
     <ul class="nav nav-pills nav-stacked">
		<li class = "active"><a href="bilduzenleu.php">Profil Düzenle</a></li>
		<li><a href="bilduzenlef.php">Firma Düzenle</a></li>
		<li><a href="bilduzenles.php"> Şifre Değiştir</a></li>
		<li><a href="#"> Hesabımı Silmek İstiyorum</a></li>
	
	</ul>

    </div>
		<div class="span10" >
			<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Güncellenemedi!
            </div>
			<div class="well" style = "height: 4.850in">
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="home"> 
					<form method= "post" action = 'update.php?gelen=<?php echo $durum;?>&ad=<?php echo $username?>'>
					<label>Email</label>
					<input type="text" name = "email" value = "<?php echo $eposta; ?>"class="input-xlarge">
					<label>Ad ve Soyad </label>
					<input type="text" name = "adsoyad"  value ="<?php echo $isim; ?>" class="input-xlarge">
					<label>Cinsiyet Seçi </label>
					<select name="cinsiyet" class="input-xlarge" style ="width:3.0in;">
					
						<?php
							if($cinsiyet == "BAY") {
							
								echo "<option>".$cinsiyet."</option>";
								echo "<option> BAYAN </option>";
								
							}else{
								echo "<option>".$cinsiyet."</option>";
								echo "<option> BAY </option>";

							}
							?>		
					</select>
					<hr>
					<div>
						<button class="btn btn-primary">GÖNDER</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
  </div>
</div>