<?php 

include("_header.php");
include ("config.php");

?>

    
<div class="container">
	<div class="row">
	
		<div class="span4 offset4 well" style ="position:relative;right: 4.85in;top:0.50in;height: 7.25in;width:12.40in">
			<div class="alert alert-info">
                <a class="close" data-dismiss="alert" href="#">×</a>Şehirler
            </div>
			<ul class="thumbnails">
			<?php
				$gelenb =$_GET["idb"];
				$geleni =$_GET["idi"];
				
				
				$sorgu = "SELECT * FROM  `kentler` WHERE kentid BETWEEN '$gelenb' AND '$geleni' ORDER BY kentid";
				mysql_query("set character set utf8");	
				$sorgusonuc = mysql_query($sorgu);
				while($sehirler = mysql_fetch_array($sorgusonuc)){
					ECHO '<li class="span5 clearfix">';
					ECHO '<div class="thumbnail clearfix">';
					ECHO '<img src="'.$sehirler['kentlogo'].'" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
					ECHO '<div class="caption" class="pull-left">';
					ECHO '<a href="sehirv.php?sehirid='.$sehirler['kentid'].'"class="btn btn-primary icon  pull-right">BUL</a>';
					ECHO '<H6>'.$sehirler['kentad'].'</H6>';
					ECHO '</div>';
					echo '</div>';
					echo '</li>';
				
				}
			
			?>
				
				
	
			</ul>
				<div class="pagination pagination-centered">
				  <ul>	<li><a href="#">«</a></li>
						<li><a href="sehir.php?idb=1&idi=9">1</a></li>
						<li><a href="sehir.php?idb=10&idi=18">2</a></li>
						<li><a href="sehir.php?idb=19&idi=27">3</a></li>
						<li><a href="sehir.php?idb=28&idi=36">4</a></li>
						<li><a href="sehir.php?idb=37&idi=46">5</a></li>
						<li><a href="sehir.php?idb=47&idi=56">6</a></li>
						<li><a href="sehir.php?idb=57&idi=64">7</a></li>
						<li><a href="sehir.php?idb=65&idi=74">8</a></li>
						<li><a href="sehir.php?idb=75&idi=83">9</a></li>
						<li><a href="#">»</a></li>					
				  </ul>
				</div>
		</div>
	</div>
</div>

