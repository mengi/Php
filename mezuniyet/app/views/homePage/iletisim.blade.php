<div id ="iletisim" class="portfolio">
    <div class="container" style="/*margin-top:20px;*/">
      <!-- sikayet
      ================================================== -->
      <div class="bs-docs-section">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
   	       	<div class="col-md-4">
	           <div class="row">
	             <!--<div class="col-md-8">
					<strong><h1>Bağlantılar</h1></strong>
	             </div>          
	             <div style ="position:relative;left: 8.5in;top:0.25in;">
	             	<a href="#"><button class="btn btn-danger">Yardım</button></a>
	             </div>-->        
	           </div>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-6">
           <div class="col-lg-12">
              <strong><h1>İstek-Şikayet Mesajı</h1></strong>
            </div>
            <hr>
            <div class="col-lg-7 col-lg-offset-0">

              {{ Form::open(array('url'=>'homePage/iletisim', 'method' => 'post', 'class'=>'form-signup')) }}
                @if ($errors->count() > 0)

    					<div class="alert alert-danger">
      	
 					    	<ul>
        					@foreach ($errors->all() as $msg)
        					<li>{{ $msg }}</li>
        					@endforeach
        					</ul>
    					</div>

				@endif
                <div class="form-group">
                  {{ Form::text('full_name', null, array('class'=>'form-control', 'placeholder'=>'Ad ve Soyad')) }}
                </div>
                <div class="form-group">
                  {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
                </div>
                <div class="form-group">
                  {{ Form::text('issue', null, array('class'=>'form-control', 'placeholder'=>'Konu')) }}
                </div>
                <div class="form-group">
				        {{ Form::textarea('content', null, array('class'=>'form-control', 'rows'=>'3', 'placeholder'=>'Mesaj')) }}
                 
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Gönder</button>
                </div>        
             {{ Form::close() }}
          </div>
        </div>
      <!-- iletişim
      ================================================== -->
        <div class="col-lg-6">
           <div class="col-lg-12">
              <strong><h1>İletişim Bilgileri</h1></strong>
            </div>
            <hr>
             <strong><h3>Ondokuz Mayıs Üniversitesi</h3></strong>
            <div>
              <address class="pull">
                <strong>Adress</strong><br>
                 Merkez, Kurupelit/Samsun<br>
                 TÜRKİYE<br>
              </address>
              <div class="pull-left">
                <div class="bottom-space">
                  <i><img src="assets/img/phone.png"></i> (0362) 312 1919
                
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i><img src="assets/img/mail.png"></i>
                </a> Ondokuzmayis@omu.edu.tr
              </div>
              
            </div>
          </div>
          </div>
        </div>
        
      </div>
    </div>
          <!-- Resim Mekomu
      ================================================== -->
	   <div class="container">
	   		<div class="col-md-4">
	            <div class="row"></div>
	        </div>
	       	<div class="col-lg-4">
	           <div class="row">
	             <div class="col-md-4">
	               	<a class="thumbnail" href="https://github.com/mctr"><img alt="" src="assets/img/mesut.jpeg"></a>
	             </div>          
	             <div class="col-md-4">
	              	<a class="thumbnail" href="https://github.com/krytht"><img alt="" src="assets/img/koray.jpeg"></a>
	             </div>
	             <div class="col-md-4">
	                <a class="thumbnail" href="https://github.com/mengi"><img alt="" src="assets/img/mengi.jpeg"></a>
	             </div>        
	           </div>
	    	</div>
	       		<div class="col-md-4">
	            	<div class="row"></div>
	        </div>
	  	</div><br>
	           <center><strong><a href="http://github.com/mctr/mekomu">me-ko-mu</a></strong></center>
	<hr>
