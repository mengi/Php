<?php
	include('success.php');
	$durum = "durums";
?>


<div class="container-fluid" style = "margin-top:0.65in;">
  <div class="row-fluid">
    <div class="span2">
     <ul class="nav nav-pills nav-stacked">
		<li><a href="bilduzenleu.php">Profil Düzenle</a></li>
		<li><a href="bilduzenlef.php">Firma Düzenle</a></li>
		<li class="active"><a href="bilduzenles.php"> Şifre Değiştir</a></li>
	</ul>
    </div>
		<div class="span10" >
			<div class="alert alert-info">
                <a class="close" data-dismiss="alert" href="#">×</a>Şifre Degiştiriniz
            </div>   
			<div class="well" style = "height: 4.850in">
			
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="home">   
				<form method = "post" action = 'update.php?gelen=<?php echo $durum;?>&ad=<?php echo $username?>'> 
					<label>Eski Şifre </label>
					<input type="text"  name = "esifre" class="input-xlarge">
					<label>Yeni Şifre</label>
					<input type="text" name = "ysifre"  class="input-xlarge">
					<label>Yeni Şifre Tekrarı</label>
					<input type="password" name = "yisifretk"  class="input-xlarge">
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