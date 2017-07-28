<?php
	include("_header.php"); 
	session_start();
	
	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
?>
<!DOCTYPE html>
<meta CHARSEt=UTF-8>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />  
<title>FİRMA REHBERİ</title>

<div class="navbar  navbar-fixed-top">
	<div class="navbar-inner">
   	<div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <p class="brand" style = "position:absolute;left:0.50in;">FİRMA REHBERİ YÖNETİM PANELİ</p>
          <div class="nav-collapse collapse">
				<ul class="nav pull-right">
				<li><a href="kullanicilar.php"  style="position:relative;right:3.1250in;top:1.5px"><i class="icon-plus icon-white"></i> Kullanıcılar</a></li>
				<li><a href="firmalar.php"  style="position:relative;right:3.1250in;top:1.5px"><i class="icon-plus icon-white"></i> Firmalar</a></li>
				<li><a href="yayinla.php"  style="position:relative;right:3.1250in;top:1.5px"><i class="icon-plus icon-white"></i>Firma Yayınla</a></li>
				<li><img  src="../images/admin1.png" style="position:relative;right:90px;"/></li>
     				<li><a href="#" style="color:white;position:relative;right:90px;top:5px;" ><?php echo $_SESSION['name']; ?></a> </li>
       			<li><a href="logout.php" style="position:relative;right:80px;top:3.5px;" >Çıkış</a></li>
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
           <div style = "position:absolute;top:10px;right:1.5in;width:4.5in;"><p style="color:white;">©2013 -<a href="#" style="color:white;"> Muhammet ENGİNAR </a></div>
          </ul>
          
        </div>
      </div>
    </div>
  </div>    
</footer>




