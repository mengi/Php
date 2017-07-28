<?php        
session_start();	

if (!isset($_SESSION['name'])){
    header('Location:  http://localhost/cv/');
}

$username = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Özgeçmiş { Beta }</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link rel="shortcut icon" href="http://localhost/cv/icons/cv3.ico">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>


    <div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="http://localhost/cv/" class="navbar-brand">Özgeçmiş { Beta }</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
             <li ><a href="kisiselb.php">Kişisel : Başlangıç</a></li>
                  <li><a href="egitim.php">Egitim</a></li>
                  <li><a href="deneyim.php">Deneyim</a></li>
                  <li><a href="kisisel.php">Kişisel</a></li>
                  <li><a href="referans.php">Referans</a></li> 
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Ayarlar
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><image src="../icons/ayar.ico"> Ayarlar</a></li>
              
                    <li><a href="http://localhost/cv/verisle/logout.php"><image src="../icons/power.ico"> Çıkış</a></li>
                </ul>
                 <li><a href="#"><image src="../icons/user1.ico"><?php echo $username;?></a></li>
             
          </ul>
        </div>
      </div>
    </div>