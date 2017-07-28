<?php
	include("config.php");
	 
	session_start();
	mysql_query("set character set utf8");	
	mysql_query("SET NAMES UTF8");
	if (!isset($_SESSION['name']))
		{
			header('Location: giris.php');
		}
		
	$username = $_SESSION['name'];

	$mysql = "SELECT username, name, eposta, Cinsiyet FROM  kullanicilar WHERE username =  '$username'";
	$mysqlsonuc = mysql_query($mysql);
	while ($kullanici = mysql_fetch_array($mysqlsonuc)){
		$isim = $kullanici['name'];
		$eposta = $kullanici['eposta'];
		$cinsiyet = $kullanici['Cinsiyet'];
		$username = $kullanici['username'];
	}
	
	$result = "SELECT  sektorad, kentad, isletmead, yetkilisi, firmaad, firmaweb, firmatel, firmafaks, gsm, firmaadres
				FROM firmauser JOIN kullanicilar ON firmauser.user_id = kullanicilar.user_id WHERE kullanicilar.username =  '$username'";
	$mysqlresult = mysql_query($result);
	while($firmalar = mysql_fetch_array($mysqlresult)){
		$sektorad = $firmalar['sektorad'];
		$kentad = $firmalar['kentad'];
		$isletmead = $firmalar['isletmead'];
		$yetki = $firmalar['yetkilisi'];
		$firmaad = $firmalar['firmaad'];
		$firmaweb = $firmalar['firmaweb'];
		$firmatel = $firmalar['firmatel'];
		$firmafaks = $firmalar['firmafaks'];
		$gsm = $firmalar['gsm'];
		$firmaadres = $firmalar['firmaadres'];	
	}
		

?>

<!DOCTYPE html>
<meta CHARSEt=UTF-8>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />  
<title>Firma Rehberi</title>

<div class="navbar  navbar-fixed-top">
	<div class="navbar-inner">
   	<div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="bilduzenleu.php" ><p class="brand" style = "position:absolute;left:1.6in;"><?php echo $isim;?></p></a>
		  
          <div class="nav-collapse collapse">
				<ul class="nav pull-right">
				<li><a href="firmaekleuser.php"  style="position:relative;right:4.0in;top:1.5px"><i class="icon-plus icon-white"></i> Firmanızı Ekleyiniz</a></li>
				<li><a href="bilduzenleu.php"  style="position:relative;right:4.0in;top:1.5px"><i class="icon-plus icon-white"></i> Bilgi Düzenle</a></li>
				<li><img  src="../images/admin1.png" style="position:relative;right:0.850in;"/></li>
     				
       			<li><a href="logout.php" style="position:relative;right:80px;top:1.5px;" >Çıkış</a></li>
  			 </ul>
			</div>
        </div>
      </div>
    </div>
	
    
<footer class="footer">
<div class="navbar ">
<div class="navbar-fixed-bottom">
	<div class="navbar-inner">
        <div class="container">
            <ul class="nav pull-right" >
		      <li><a href = "#"><img  src="../images/linkedin.png" style="position:absolute;top:10px;right:10.0in;"/></li></a>
			  <li><a href = "#"><img  src="../images/blogger.png" style="position:absolute;top:10px;right:9.5in;"/></li></a>
			  <li><a href = "#"><img  src="../images/github.png" style="position:absolute;top:10px;right:9.0in;"/></li></a>
			  <li><a href = "#"><img  src="../images/yahoo.png" style="position:absolute;top:10px;right:8.5in"/></li></a>
			  <li><a href = "#"><img  src="../images/google.png" style="position:absolute;top:10px;right:8.0in;"/></li></a>
			  <li><a href = "#"><img  src="../images/facebook.png" style="position:absolute;top:10px;right:7.5in;"/></li></a>
			  <li><a href = "#"><img  src="../images/twitter.png" style="position:absolute;top:10px;right:7.0in;"/></li></a>
           <div style = "position:absolute;top:10px;right:0.1in;width:5.5in;"><p style="color:white;">Copyright© (2013 Firma Rehberi) @menginar</div>
          </ul>
          
        </div>
      </div>
    </div>
  </div>    
</footer>




