<?php 

include("_header.php");
include ("config.php");

?>
<div class="container">
	<div class="row">
	
		<div class="span4 offset4 well" style ="position:relative;right: 4.85in;top:0.50in;height: 7.25in;width:12.40in">
			<div class="alert alert-info">
                <a class="close" data-dismiss="alert" href="#">×</a>Sektörler
            </div>
			<ul class="thumbnails">
			<?php
				$gelenb =$_GET["idb"];
				$geleni =$_GET["idi"];	
				$sorgu = "SELECT * FROM  `sektor` WHERE sektorid BETWEEN '$gelenb' AND '$geleni' ORDER BY sektorid";
				mysql_query("set character set utf8");	
				$sorgusonuc = mysql_query($sorgu);
				while($sektorler = mysql_fetch_array($sorgusonuc)){
					ECHO '<li class="span5 clearfix">';
					ECHO '<div class="thumbnail clearfix">';
					ECHO '<img src="'.$sektorler['sektorlogo'].'" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
					ECHO '<div class="caption" class="pull-left">';
					ECHO '<a href="sektorv.php?sektorid='.$sektorler['sektorid'].'"class="btn btn-primary icon  pull-right">BUL</a>';
					ECHO '<H6>'.$sektorler['sektorad'].'</H6>';
					ECHO '</div>';
					echo '</div>';
					echo '</li>';
				
				}
			
			?>
			</ul>
				<div class="pagination pagination-centered">
				  <ul>	 <li><a href="#">«</a></li>
						<li><a href="sektor.php?idb=1&idi=9">1</a></li>
						<li><a href="sektor.php?idb=10&idi=18">2</a></li>
						<li><a href="sektor.php?idb=19&idi=27">3</a></li>
						<li><a href="sektor.php?idb=28&idi=36">4</a></li>
						<li><a href="sektor.php?idb=37&idi=45">5</a></li>
						<li><a href="sektor.php?idb=47&idi=47">6</a></li>
						<li><a href="#">»</a></li>					
				  </ul>
				</div>
		</div>
	</div>
</div>