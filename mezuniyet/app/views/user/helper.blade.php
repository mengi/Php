@extends('user.layouts')

@section('title')
		Yardım Merkezi
@stop

@section('content')
				
				<div class="content">
      <div class="container">
        <div class="page-header">
          <center><h1>Yardım Merkezi</h1></center>
        </div>  
        <div class="row">
          <div class="span10 offset1">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq1">
                      <i class="icon-question-sign"></i> Nasıl Kayıt Olunur?
                    </a>
                  </h4>
                </div>
                <div id="faq1" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <ul type="square">
 						<li>Uygulamanın ana  ekranında <b> yıllık başvuru  formu</b> butonuna tıklayın.</li>
						<li>Kullanıcı bilgileri olarak bir email adresi  ve şifre belirleyin.</li>
						 <li>Üyelik bilgileri  kısmına  adınız , soyadınız ve diğer kişisel bilgilerinizi yazın. </li>
 						 <li>Son olarak bölümünüzü , fakültenizi  ve öğrenci numaranızı kayıt formuna  yazın.</li>
						  <li> <b>Kaydol </b> butonuna tıklayın.</li>
						  </ul>  
 
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq2">
                      <i class="icon-question-sign"></i> Nasıl Giriş  Yapılır?
                    </a>
                  </h4>
                </div>
                <div id="faq2" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                       <ul type="square">
 						<li>Uygulamanın ana ekranında <b>giriş yapınız </b>butonuna tıklayın.</li>
						<li>Email adresinizi  ve şifrenizi  yazın.</li>
						 <li><b>Giriş</b> butonuna  tıklayın.</li>
 						 
						 </ul>  
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq3">
                      <i class="icon-question-sign"></i> Bilgilerimi Düzenleyebiliyor  Muyum ?
                    </a>
                  </h4>
                </div>
                <div id="faq3" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <ul type="square">
 						<li> Uygulamaya  giriş  yaptıktan sonra Profil sayfanıza ulaşırsınız.</li>
						<li> Profil  fotoğrafınızın hemen altındaki menüde <b>Bilgilerimi düzenle'ye </b> tıklayın. </li> 
						<li> Üyelik bilgilerinizi , okul bilgilerinizi   buradan  düzenleyebilrsiniz.</li>
 						 
						 </ul>  
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq4">
                      <i class="icon-question-sign"></i> Nasıl Resim Yükleyebilirim ?
                    </a>
                  </h4>
                </div>
                <div id="faq4" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                     <li> Uygulamaya  giriş  yaptıktan sonra Profil sayfanıza ulaşırsınız.</li>
						<li> Profil  fotoğrafınızın hemen altındaki menüde <b>Resimler'e </b> tıklayın. </li> 
                     <li> Bilgisayarınızdan yüklemek istedğiniz fotoğrafları seçip , <b>Yükle'ye </b>tıklayarak fotoğraflarınızı yükleyebilirsiniz.</li>


                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq5">
                      <i class="icon-question-sign"></i> Parolamı Nasıl Güncelleyebilirim ?
                    </a>
                  </h4>
                </div>
                <div id="faq5" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                     <li> Uygulamaya  giriş  yaptıktan sonra <b>Profil</b> sayfanıza ulaşırsınız.</li>
                     <li> Profil  fotoğrafınızın hemen altındaki menüde <b>Bilgilerimi düzenle'ye </b> tıklayın. </li> 
                     <li> En altta <b>Parola Bilgilerimi </b>göreceksiniz.Eski Parolanızı ve yeni parolanızı girin.  </li>
                     <li><b>Değiştir'e</b> tıklayın.                    
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq6">
                      <i class="icon-question-sign"></i> Nasıl İstek-Şikayette Bulunabilirim ?
                    </a>
                  </h4>
                </div>
                <div id="faq6" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                     <ul type="square">
 						<li>Uygulamanın ana ekranında ekranın en alt bölümüne  gelin.</li>
						<li>Ad ve Soyad , E-posta adresinizi girin. Konu ve Mesajınızı yazın.</li>
						 <li><b>Gönder</b> butonuna  tıklayın. </li>
 						 <li><b>İstek-Şikayet</b> admin'e ulaşacaktır.</ul>   
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="#faq7">
                      <i class="icon-question-sign"></i> Arkadaşlarımı nasıl görebilirim ?

                    </a>
                  </h4>
                </div>
                <div id="faq7" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <ul type="square">
 						<li>Uygulamaya  giriş  yaptıktan sonra <b>Profil</b> sayfanıza ulaşırsınız.</li>
						<li>Profil sayfanızda  sağ üst menüde ki <b>Arkadaşlarıma</b> ulaşırsınız.</li>
						   
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="
                    #faq8">
                      <i class="icon-question-sign"></i> Nasıl yorum yapabilirim  ?

                    </a>
                  </h4>
                </div>
                <div id="faq8" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <ul type="square">
 						<li>Uygulamaya  giriş  yaptıktan sonra <b>Profil</b> sayfanıza ulaşırsınız.</li>
						<li>Profil sayfanızda  sağ üst menüde ki <b>Arkadaşlarıma</b> ulaşırsınız.</li>
						<li>Yorum yapmak istediğiniz arkadaşınızın isimine tıklayın</li>
						<li><b>Yorum alanına</b> yorumunuzu  yapın </b>
						<li><b>Kaydet'e</b> tıklayın</li>  
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="
                    #faq9">
                      <i class="icon-question-sign"></i> Size yapılan yorumları nasıl görürsünüz  ?

                    </a>
                  </h4>
                </div>
                <div id="faq9" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <ul type="square">
 						<li>Uygulamaya  giriş  yaptıktan sonra <b>Profil</b> sayfanıza ulaşırsınız.</li>
						<li><b>Yorumlarım'a</b> tıklayın</li>
						
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="

                      #faq10">
                      <i class="icon-question-sign"></i> Yaptığınız yorumları nasıl görürsünüz  ?

                    </a>
                  </h4>
                </div>
                <div id="faq10" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <ul type="square">
 						<li>Uygulamaya  giriş  yaptıktan sonra <b>Profil</b> sayfanıza ulaşırsınız.</li>
						<li><b> Yaptığım Yorumlarım'a</b> tıklayın</li>
						
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="

                    #faq11">
                      <i class="icon-question-sign"></i> Nasıl mizah paylaşımı yapabilirim?
                    </a>
                  </h4>
                </div>
                <div id="faq11" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <p>
                      <ul type="square">
 						
						<li> Profil  fotoğrafınızın hemen altındaki menüde <b> Mizah'a </b> tıklayın.</li><li>Uygulamaya  giriş  yaptıktan sonra <b>Profil</b> sayfanıza ulaşırsınız.</li>
						<li> Bilgisayarınızdan yüklemek istedğiniz mizahları seçip , <b>Yükle'ye </b>tıklayarak mizah paylaşımı yapabilirsiniz.</li>	   
                    </p>
                      

                    </a>
                  </h4>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@stop