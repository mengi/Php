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
             <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/deneyim.php">
                <fieldset>
                  <legend>Deneyimler</legend>

                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Bilgisayar Programlar</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" placeholder="Bilgisayar Programları" rows="3" id="textArea" name="program"></textarea>
                      </div>
                     </div>

                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">İşletim Sistemleri</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" placeholder="İşeletim Sistemleri" rows="3" id="textArea" name="os"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Alınan Eğitimler( Seminer vb. )</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" placeholder="Alınan Eğitimler (Seminer, Sertifika, Formasyon)" rows="3" id="textArea" name="egitim"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Takip Ettiğiniz Yayınlar ( Süreli Dergiler )</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" placeholder="Takip Ettiğiniz Yayınlar ( Süreli Dergiler )" rows="3" id="textArea" name="dergi"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Mesleki İlgi Alanları</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" placeholder="Mesleki İlgi Alanları" rows="3" id="textArea" name="ilgi"></textarea>
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