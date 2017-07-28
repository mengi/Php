<?php        

include '../verisle/veriler.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Özgeçmiş { Beta }</title>
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
    <div class="tabbable"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Kişisel : Başlangıç</a></li>
        <li><a href="#tab2" data-toggle="tab">Eğitim</a></li>
        <li><a href="#tab3" data-toggle="tab">Deneyim</a></li>
        <li><a href="#tab4" data-toggle="tab">Kişisel</a></li>
        <li><a href="#tab5" data-toggle="tab">Referans</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayarlar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><image src="../icons/ayar.ico"> Ayarlar</a></li>
                    <li><a href="http://localhost/cv/verisle/logout.php"><image src="../icons/power.ico"> Çıkış</a></li>
                </ul>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <p></p>
            <center>   
             <div class="container">
                  <div class="row">
                    <div class="span8">
                       <div class="well">
                         <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/kisiselbg.php">
                            <fieldset>
                              <legend>Kişisel Başlangıç</legend>

                              <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Ad</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $ad; ?>" name="ad">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Soyad</label>
                                <div class="col-lg-10">
                                  <input type="text" class="form-control" id="inputEmail" value="<?php echo $soyad; ?>" name="soyad">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">E-posta</label>
                                <div class="col-lg-10">
                                  <input type="text" class="form-control" id="inputEmail" value="<?php echo $mail; ?>" name="email">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Gsm No</label>
                                <div class="col-lg-10">
                                  <input type="text" class="form-control" id="inputEmail" value="<?php echo $gsm; ?>" name="gsm">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Telefon Numarası</label>
                                <div class="col-lg-10">
                                  <input type="text" class="form-control" id="inputEmail" value="<?php echo $tel; ?>" name="tel">
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                  <button class="btn btn-primary">Güncelle</button> 
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </center>
        </div>
        <div class="tab-pane" id="tab2">
          <p></p>
          <center> 
            <div class="container">
              <div class="row">
                <div class="span8">
                   <div class="well">
                     <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/egitimg.php">
                        <fieldset>
                          <legend>Eğitim</legend>

                          <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Lisansüstü</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputEmail" value="<?php echo $lisansu; ?>" name="lisansu">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Lisans</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputEmail" value="<?php echo $lisans; ?>" name="lisans">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Önlisans</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputEmail" value="<?php echo $onlisans; ?>" name="onlisans">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Yabanci Dil</label>
                            <div class="col-lg-10">
                              <textarea class="form-control" placeholder="<?php echo $yabancidil; ?>" rows="3" id="textArea" name="yabancidil"></textarea>
                            </div>
                          </div>

                         <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Bilgi ve Beceri</label>
                            <div class="col-lg-10">
                              <textarea class="form-control" placeholder="<?php echo $beceri; ?>" rows="3" id="textArea" name="beceri"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Ödüller</label>
                            <div class="col-lg-10">
                              <textarea class="form-control" placeholder="<?php echo $odul; ?>" rows="3" id="textArea" name="oduller"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                              <button class="btn btn-primary">Güncelle</button> 
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>         
                </div>
              </div>
          </center>
        </div>
        <div class="tab-pane" id="tab3">
          <p></p>
           <center>
             <div class="container">
                 <div class="row">
                   <div class="span8">
                      <div class="well">
                        <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/deneyimg.php">
                           <fieldset>
                             <legend>Deneyimler</legend>

                               <div class="form-group">
                                 <label for="textArea" class="col-lg-2 control-label">Bilgisayar Programlar</label>
                                 <div class="col-lg-10">
                                   <textarea class="form-control" placeholder="<?php echo $program; ?>" rows="3" id="textArea" name="program"></textarea>
                                 </div>
                                </div>

                               <div class="form-group">
                                 <label for="textArea" class="col-lg-2 control-label">İşletim Sistemleri</label>
                                 <div class="col-lg-10">
                                   <textarea class="form-control" placeholder="<?php echo $os; ?>" rows="3" id="textArea" name="os"></textarea>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="textArea" class="col-lg-2 control-label">Alınan Eğitimler( Seminer vb. )</label>
                                 <div class="col-lg-10">
                                   <textarea class="form-control" placeholder="<?php echo $egitimd; ?>" rows="3" id="textArea" name="egitim"></textarea>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="textArea" class="col-lg-2 control-label">Takip Ettiğiniz Yayınlar ( Süreli Dergiler )</label>
                                 <div class="col-lg-10">
                                   <textarea class="form-control" placeholder="<?php echo $dergi; ?>" rows="3" id="textArea" name="dergi"></textarea>
                                 </div>
                               </div>

                               <div class="form-group">
                                 <label for="textArea" class="col-lg-2 control-label">Mesleki İlgi Alanları</label>
                                 <div class="col-lg-10">
                                   <textarea class="form-control" placeholder="<?php echo $ilgi; ?>" rows="3" id="textArea" name="ilgi"></textarea>
                                 </div>
                               </div>

                             <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                 <button class="btn btn-primary">Güncelle</button> 
                               </div>
                             </div>
                           </fieldset>
                         </form>
                       </div>
                     </div>
                   </div>
                 </div>
           </center>
        </div>
        <div class="tab-pane" id="tab4">
          <p></p>
              <center>
                <div class="container">
                     <div class="row">
                       <div class="span8">
                          <div class="well">
                            <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/kisiselg.php">
                               <fieldset>
                                 <legend>Kişisel</legend>

                                 <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Doğum Tarihi</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $dogum_tarihi; ?>" name="dogumtar">
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Doğum Yeri</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $dogum_yeri; ?>" name="dogumyeri">
                                   </div>
                                 </div>


                                 <div class="form-group">
                                   <label for="select" class="col-lg-2 control-label">Cinsiyet Seçiniz</label>
                                   <div class="col-lg-10">
                                     <select class="form-control" id="select" name="secim01">
                                       <option>Cinsiyet Seçiniz</option>
                                       <option>Kadın</option>
                                       <option>Erkek</option>
                                     </select>
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   <label for="select" class="col-lg-2 control-label">Medeni Hal</label>
                                   <div class="col-lg-10">
                                     <select class="form-control" id="select" name="secim02">
                                       <option>Medeni Hal</option>
                                       <option>Evli</option>  
                                       <option>Bekar</option> 
                                     </select>
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   <label for="select" class="col-lg-2 control-label">Askerlik Durumu</label>
                                   <div class="col-lg-10">
                                     <select class="form-control" id="select" name="secim03">
                                       <option>Askerlik Durumu</option>
                                       <option>Yapıldı</option>
                                       <option>Yapılmadı</option> 
                                     </select>
                                   </div>
                                 </div>

                                <div class="form-group">
                                   <label for="select" class="col-lg-2 control-label">Ehliyet Sınıfı</label>
                                   <div class="col-lg-10">
                                     <select class="form-control" id="select" name="secim04">
                                       <option>Ehliyet Sınıfı</option>
                                       <option>A2</option>
                                       <option>B</option>  
                                       <option>D</option>  
                                       <option>E</option>
                                       <option>F</option>  
                                       <option>Ehliyet yok</option>
                                     </select>
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   <label for="textArea" class="col-lg-2 control-label">Dernek ve Kulüpler</label>
                                   <div class="col-lg-10">
                                     <textarea class="form-control" placeholder="<?php echo $kulup; ?>" rows="3" id="textArea" name="kulup"></textarea>
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   <div class="col-lg-10 col-lg-offset-2">
                                     <button class="btn btn-primary">Güncelle</button> 
                                   </div>
                                 </div>
                               </fieldset>
                             </form>
                           </div>
                         </div>
                       </div>
                     </div>
               </center>
        </div>
        <div class="tab-pane" id="tab5">
          <p></p>
             <center>
                <div class="container">
                     <div class="row">
                       <div class="span8">
                          <div class="well">
                            <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/referansg.php">
                               <fieldset>
                                 <legend>Referans</legend>

                                 <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Ad</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $ref_ad; ?>" name="ref_ad">
                                   </div>
                                 </div>

                                  <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Soyad</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $ref_soyad; ?>" name="ref_soyad">
                                   </div>
                                 </div>

                                  <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Kurum</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $ref_kurum; ?>" name="ref_kurumu">
                                   </div>
                                 </div>

                                  <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Ünvan</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $ref_unvan; ?>" name="ref_unvan">
                                   </div>
                                 </div>
                                  <div class="form-group">
                                   <label for="inputEmail" class="col-lg-2 control-label">Telefon Numarası</label>
                                   <div class="col-lg-10">
                                     <input type="text" class="form-control" id="inputEmail" value="<?php echo $ref_tel; ?>" name="ref_tel">
                                   </div>
                                 </div>

                                 <div class="form-group">
                                   <div class="col-lg-10 col-lg-offset-2">
                                     <button class="btn btn-primary">Güncelle</button> 
                                   </div>
                                 </div>
                               </fieldset>
                             </form>
                           </div>
                         </div>
                       </div>
                     </div>
               </center>
        </div>
      </div>
    </div>
            
<?php 

include '_footer.php';

?>            