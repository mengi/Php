<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
           
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- The styles -->
    
	{{ HTML::style('assets/asset/css/bootstrap-cerulean.css') }}
	{{ HTML::style('assets/asset/css/bootstrap-responsive.css') }}

    @yield('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/kep.jpg')}}" type="image/x -icon">

</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="btn-group pull-right" >
					<a class="btn " href="{{ URL::to('/') }}"><i class="icon-home"></i> Anasayfa</a>
					
				</div>
				
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="{{ URL::to('helper') }}">Mezuniyet Yıllığı Yardım Merkezi</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	@yield('content')

</body>
	{{ HTML::script('assets/asset/js/jquery-1.7.2.min.js') }}
	{{ HTML::script('assets/asset/js/jquery-ui-1.8.21.custom.min.js') }}
	{{ HTML::script('assets/asset/js/bootstrap-transition.js') }}
	{{ HTML::script('assets/asset/js/bootstrap-alert.js') }}
	{{ HTML::script('assets/asset/js/bootstrap-dropdown.js') }}
	{{ HTML::script('assets/asset/js/bootstrap-collapse.js') }}

</html>
