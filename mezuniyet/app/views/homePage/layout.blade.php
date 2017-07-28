<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
            Mezuniyet Yıllıgı Uygulaması
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- CSS -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/bootstrap-modal-bs3patch.css') }}
    {{ HTML::style('assets/css/bootstrap-modal.css') }}
    {{ HTML::style('assets/css/stylish-portfolio.css') }}
    {{ HTML::style('assets/css/button.css') }}
    {{ HTML::style('assets/css/styless.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css_home/demo.css') }}
    {{ HTML::style('assets/css_home/style.css') }}

    @yield('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/kep.jpg')}}" type="image/x-icon">

</head>
<body background="assets/img/duvar.png">


    <a id="menu-toggle" href="#" class="btn btn-info btn-lg toggle"><i class="icon-reorder"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="icon-remove"></i></a>
        <li class="sidebar-brand"><a href="#">Yıllık</a></li>
        <li><a href="#top">Ana Sayfa</a></li>
        <li><a href="#portfolio">E-Resim</a></li>
        <!--<li><a href="#catalog">Katalog</a></li>-->
        <li><a href="#iletisim">İstek - Şikayet</a></li>
        <li><a href="#iletisim">İletişim</a></li>
        <li><a href="{{ URL::to('helper') }}">Yardım(S.S.S)</a></li>
      </ul>
    </div>

    <div id="top" class="header">
      <div class="vert-text">
        <h1>Mezuniyet Yıllığı</h1>
        <h3><em>Omü Mühendislik Fakültesi Yıllık Projesi</em></h3>
		    <div class="container" style="position: relative">
          <div class="row">
            <div class="col-md-10">
              <div class="responsive">
                <center>
                    <a class="demo btn btn-success bt btn-lg" data-toggle="modal" href="{{ URL::to('user/register') }}">Yıllık Başvuru Formu</a>
                  </center>
              </div>
              <br>
              <div class="static" style="position: relative; overflow: hidden">
                <div class="text-center">
                  <a class="demo btn btn-info bt btn-lg" data-toggle="modal" href="{{ URL::to('login') }}">Giriş Yapınız </a><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @include('homePage.login')
        

    <div id="intro" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2><a target="_blank" href="http://www.omu.edu.tr/">ONDOKUZ MAYIS ÜNİVERSİTESİ</a><br><br> Mühendislik Fakültesi Yıllık Projesi</h2>
            <p class="lead"></p>
          </div>
        </div>
      </div>
    </div>

 <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Resim - İletişim - Şikayet - Yardım</h2>
            <hr>
          </div>
        </div>
        
        <div class="row">

          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item">
              <a href="#portfolio">
              <img class="img-circle" src="assets/img/4.png"></a>
              <h4>Resimler</h4>
              <p></p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a href="#iletisim">
              <img class="img-circle" src="assets/img/5.png"></a>
              <h4>İletişim</h4>
              <p></p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
             <a href="#iletisim"> 
             <img class="img-circle" src="assets/img/chat.png"></a>
              <h4>Şikayet</h4>
              <p></p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a href="{{ URL::to('helper') }}">
              <img class="img-circle" src="assets/img/guru.png"></a>
              <h4>Yardım</h4>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callout">
      <div class="vert-text">
      	<h1>Mühendislik Fakültesi</h1><br>
      	<h1>Mezuniyet Yıllığı Uygulaması</h1><br>
      	
      </div>
    </div>

    <div id ="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
              <h3>Mezuniyet Fotoğrafları</h3>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="assets/img/4.jpg"></a>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="assets/img/8.jpg"></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="assets/img/one.jpg"></a>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#top"><img class="img-portfolio img-responsive" src="assets/img/two.jpg"></a>

            </div>
          </div>
        </div>
      </div>
    </div>
     
	@include('homePage.iletisim')

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
              <li><a href="#"><i class="icon-facebook icon-2x"></i></a></li>
              <li><a href="#"><i class="icon-twitter icon-2x"></i></a></li>
              <!--<li><i class="icon-dribbble icon-2x"></i></li> -->
            </ul>
            <hr>
            <center><i> Copyright &copy; 2014 Mühendislik Fakültesi Yıllık Projesi</i></center>
          </div>
        </div>
      </div>
    </footer>
	
	

<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>

	<!-- Javascripts -->
    {{ HTML::script('assets/js/bootstrap.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/run.js') }}
    {{ HTML::script('assets/js/jquery.js') }}    
    {{ HTML::script('assets/js/bootstrap-modalmanager.js') }}
    {{ HTML::script('assets/js/bootstrap-modal.js') }}
    {{ HTML::script('assets/js/jquery.imgslider.js') }}


    @yield('scripts')

    <script type="text/javascript">
      $(function() {

        $( '#fs-slider' ).imgslider();

      });
    </script>

  <!-- Custom JavaScript for the Side Menu - Put in a custom JS file if you want to clean this up -->
  <script>
      $("#menu-close").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
              || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

</body>

</html>
