
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Özgeçmiş { Beta }</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
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


    <div class="navbar navbar-default navbar-fixed-top">
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
            <li>
              <a href="http://localhost/cv/uye.php">Üye Olun</a>
            </li>
            <li>
              <a href="http://localhost/cv/giris.php">Giriş</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Cv Hazırlamanın İpuçları<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                 <li ><a href="http://localhost/cv/ozgecmis.php"><image src='icons/information.ico'> Özgeçmiş Nedir ?</a></li>
                 <li><a href="http://localhost/cv/yapilmasi_gerekenler.php"><image src='icons/check.ico'> Yapılması Gerekenler</a></li>
                 <li><a href="http://localhost/cv/yapilmamasi_gerekenler.php"><image src='icons/delete.ico'> Yapılmaması Gerekenler</a></li>
                 <li><a href="http://localhost/cv/oneri.php"><image src='icons/stop.ico'> Öneriler</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>


     <div class="container" style ="margin-top: 60px">

      <!--  Carousel -->
      <!--  consult Bootstrap docs at
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
      <div id="this-carousel-id" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <a href="#"><img src="img/8.jpg" alt="Antennae Galaxies" />
            </a>
            <div class="carousel-caption">
              <p>Bırakın dünya sizi değiştirsin. O zaman siz de dünyayı değiştirebilirsiniz.</p>
              <p><a href="#">M. Diaries &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="img/5.jpg" alt="Carina Caterpillar" />
            </a>
            <div class="carousel-caption">
              <p>Hangi işi yapacaksanız, o işi en iyi bilen ile iş birliği yapın.</p>
              <p><a href="#">S. Sabancı &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="img/7.jpg" alt="Light Echo" />
            </a>
            <div class="carousel-caption">
              <p>En büyük engel, kendi koyduğumuz engellerdir.</p>
              <p><a href="#">M. Enginar &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="img/2.jpg" alt="Galaxy NGC5866" />
            </a>
            <div class="carousel-caption">
              <p>Gideceğiniz yeri bilmiyorsanız, vardığınız yerin önemi yoktur.</p>
              <p><a href="#">P. Drucker &raquo;</a></p>
            </div>
          </div>
        </div><!-- .carousel-inner -->
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
      </div><!-- .carousel -->
      <!-- end carousel -->
      
    <footer style ='margin-top: 40px;'>
        <div class="row">
          <div class="col-lg-12">
            <p>Made by <a href="#"> Muhammet Enginar</a>. Contact him at <a href="mailto:muhammet.enginar@bil.omu.edu.tr">muhammet.enginar@bil.omu.edu.tr</a>.</p>
            <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>.</p>
            <p>Web fonts from <a href="http://www.google.com/webfonts">Google</a>.

          </div>
        </div>
        
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap-trim.min.js"></script>

    <script>
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 4000
        });
      });
    </script>
  </body>
</html>