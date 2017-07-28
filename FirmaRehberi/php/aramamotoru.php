<?php
	include("_header.php");
?>

<html>
<meta CHARSEt=UTF-8>
<head>
    <title>Twitter Bootstrap Typeahead Extension Demo</title>
    <link href="../css/prettify.css" rel="stylesheet" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/demo.css" rel="stylesheet">
    <script src="../js1/prettify.js" type="text/javascript"></script>
    <!-- Pick which version of jQuery to use -->    
    <!-- <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script> -->    
    <script src="../js1/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="../js1/mockjax.js" type="text/javascript"></script>
    <script src="../js1/bootstrap-typeahead.js" type="text/javascript"></script>
    <script src="../js1/demo.js" type="text/javascript"></script>
	
</head>

<body class="container"style ="margin-top:1.50in">

	<div class="row">
		<div class="control-group info">
			<input id="demo1" type="text" class="span4" placeholder="Search şehir..." autocomplete="off" style ="position:relative;right: -3.0in;top:0.10in;"/>
		</div>
    </div>
    <hr/>
    <div class="row">
        <div class="control-group error">
            <input id="demo" type="text" class="span4" placeholder="Search sektör..." autocomplete="off" style ="position:relative;right: -3.0in;top:0.10in;"/>
        
		</div>
    </div>
    <hr/>
	
</body>
</html>
