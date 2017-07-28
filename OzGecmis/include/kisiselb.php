<?php

include '_header.php';

?> 

<div class="container" style="margin-top: 75px">
    <div class="row">
          <div class="alert alert-danger">
               <a class="close" data-dismiss="alert" href="#">×</a> Lütfen Gerekli Alanları Doldurunuz.
          </div>   
    </div>
</div>

<center>   
 <div class="container">
      <div class="row">
        <div class="span8">
           <div class="well">
             <form class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data" method="post" action="http://localhost/cv/verisle/kisiselb.php">
                <fieldset>
                  <legend>Kişisel Başlangıç</legend>

                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ad</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Ad" name="ad">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Soyad</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Soyad" name="soyad">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">E-posta</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="E-posta" name="email">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Gsm No</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Gsm No" name="gsm">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Telefon Numarası</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Telefon Numarası" name="tel">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Resim</label>
                    <div class="col-lg-10">
                        <input type="file" name="file" id ="file" style ="position:relative;right: -0.85in;top:0.15in;"><br>
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