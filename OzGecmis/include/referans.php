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
             <form class="form-horizontal" id="registerHere1" name="registerHere2" method="post" action="http://localhost/cv/verisle/referans.php">
                <fieldset>
                  <legend>Referans</legend>

                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ad</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Ad" name="ref_ad">
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Soyad</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Soyad" name="ref_soyad">
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Kurum</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Kurum" name="ref_kurumu">
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ünvan</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Ünvan" name="ref_unvan">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Telefon Numarası</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Telefon Numarası" name="ref_tel">
                    </div>
                  </div>
               
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-primary">Cv Oluştur</button> 
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