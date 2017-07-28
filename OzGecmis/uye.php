<?php

include '_header.php';

?>

<div class="container" style="margin-top: 75px">
    <div class="row">
          <div class="alert alert-info">
               <a class="close" data-dismiss="alert" href="#">×</a>Lütfen Gerekli Alanları Doldurunuz.
          </div>   
    </div>
</div> 


<center>
    <div class="container">
      <div class="row">
        <div class="span8">
           <div class="well">
             <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/uyekayit.php">
                <fieldset>
                  <legend>Üye Ol</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">E-posta</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="E-posta" name="mail">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Kullanıcı Adı</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Kullanıcı Adı" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ad ve Soyad</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Ad ve Soyad" name="adsoyad">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Parola</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="sifre">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Parola ( Tekrar )</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="sifretk">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Cinsiyet Seçiniz</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select" name="secim">
                        <option>Kadın</option>
                        <option>Erkek</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Gönder</button> 
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