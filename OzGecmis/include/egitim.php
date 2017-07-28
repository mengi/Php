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
             <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/egitim.php">
                <fieldset>
                  <legend>Eğitim</legend>

                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Lisansüstü</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Lisansüstü" name="lisansu">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Lisans</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Lisans" name="lisans">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Önlisans</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Önlisans" name="onlisans">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Yabanci Dil</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" placeholder="Yabanci Dil ve Seviyeleri ( İngilizce -> A2 ) Bu Formatta Yazınız" rows="3" id="textArea" name="yabancidil"></textarea>
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Bilgi ve Beceri</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" placeholder="Kazanılan Bilgi ve Beceriler" rows="3" id="textArea" name="beceri"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Ödüller</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" placeholder="Kazanılmış Ödüller (Burs, Yüksek onur, Madalya vb.)" rows="3" id="textArea" name="oduller"></textarea>
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