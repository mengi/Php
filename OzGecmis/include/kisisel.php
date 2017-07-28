<?php

include '_header.php';
    
?>

<div class="container" style="margin-top: 75px">
    <div class="row">
          <div class="alert alert-danger">
               <a class="close" data-dismiss="alert" href="#">×</a>Lütfen Gerekli Alanları Doldurunuz.
          </div>   
    </div>
</div>  
<center>
 <div class="container">
      <div class="row">
        <div class="span8">
           <div class="well">
             <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/kisisel.php">
                <fieldset>
                  <legend>Kişisel</legend>

                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Doğum Tarihi</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Doğum Tarihi (Gün/Ay/Yıl) Şeklinde Yazınız" name="dogumtar">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Doğum Yeri</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Doğum Yeri" name="dogumyeri">
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
                      <textarea class="form-control" placeholder="Üyesi olunan kulüp ve dernekler" rows="3" id="textArea" name="kulup"></textarea>
                    </div>
                  </div>
               
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-info btn-large">İLERİ &rarr;</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
</center>

<?php  

include '_footer.php';

?>