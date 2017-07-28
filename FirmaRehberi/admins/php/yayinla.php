<?php
include('config.php');
include('success.php');
	
?>

	
			<div class="span4 offset4 well" style ="position:relative;right: 2.85in;top:0.50in;width:12.40in">
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="home">
			<?php
							mysql_query("SET NAMES UTF8");
							$sorgu = "SELECT firmaid ,sektorad, kentad, isletmead, yetkilisi, firmaad, firmaweb, firmatel,
								firmafaks, gsm, firmaadres, firmalogo FROM  `firma` WHERE DURUM = 0";
							$sorgusonuc = mysql_query($sorgu);
							while($sorgular = mysql_fetch_array($sorgusonuc)){
										$firmaid = $sorgular['firmaid'];
										$yetkilisi = $sorgular['yetkilisi'];
										$sektorid = $sorgular['sektorad'];
										$kentid = $sorgular['kentad'];
										$isletmeid = $sorgular['isletmead'];
										$firmaad = $sorgular['firmaad'];
										$firmaweb = $sorgular['firmaweb'];
										$firmatel = $sorgular['firmatel'];
										$firmafaks = $sorgular['firmafaks'];
										$gsm = $sorgular['gsm'];
										$firmaadres = $sorgular['firmaadres'];
									
						
									

									if($kentid != ""){
										$result = "SELECT kentad FROM kentler WHERE kentid = '$kentid'";
										$mysqlresult = mysql_query($result);
										while($sorguk = mysql_fetch_array($mysqlresult)){
											$kentad = $sorguk['kentad'];
										}
									}
										
									if($sektorid != ""){
										$results = "SELECT sektorad FROM sektor WHERE sektorid = '$sektorid'";
										$mysqlresults = mysql_query($results);
										while($sorgus = mysql_fetch_array($mysqlresults)){
											$sektorad = $sorgus['sektorad'];
										}
									}
										
									if($isletmeid != ""){
										$resulti = "SELECT isletmetur FROM isletmeler WHERE isletmeid = '$isletmeid'";
										$mysqlresulti = mysql_query($resulti);
										while($sorgui = mysql_fetch_array($mysqlresulti)){
											$isletmead = $sorgui['isletmetur'];
										}			
									}
										
										echo '<table class="table table-hover">
												<tr class="success"><td>'.'FİRMA İD : '.$firmaid.'</td></tr>
												<tr class="success"><td>'.'SEKTOR ADI : '.$sektorad.'</td></tr>
												<tr class="success"><td>'.'ŞEHİR ADI : '.$kentad.'</td></tr>
												<tr class="success"><td>'.'İŞLETME TÜRÜ : '.$isletmead.'</td></tr>
												<tr class="success"><td>'.'FİRMA YETKİLİSİ : '.$yetkilisi.'</td></tr>
												<tr class="success"><td>'.'FİRMA ADI : '.$firmaad.'</td></tr>
												<tr class="success"><td>'.'FİRMA WEB : '.$firmaweb.'</td></tr>
												<tr class="success"><td>'.'FİRMA TEL : '.$firmatel.'</td></tr>
												<tr class="success"><td>'.'FİRMA FAKS : '.$firmafaks.'</td></tr>
												<tr class="success"><td>'.'GSM - NO : '.$gsm.'</td></tr>
												<tr class="success"><td>'.'FİRMA ADRES : '.$firmaadres.'</td></tr>
												
											
										</table>';
										echo '<div class="span4 well">
												<form action="yayinlav.php?gelen='.$firmaid.'" method="POST">
													<button class="btn btn-info" type="submit">YAYINLA</button>
												</form>
											</div>';
						
					}
					?>
			
			</div>
		</div>
	</div>