<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
        @section('title')
            Login
        @show
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<!-- The styles -->

	{{ HTML::style('assets/css/bootstrap.css') }}
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	<link rel="shortcut icon" href="{{asset('assets/img/kep.jpg')}}" type="image/x -icon">
	<style type="text/css">
	  body {
	  	background-image: url({{asset('assets/img/15.jpg')}});
	  }
	  .top_space {
		padding-top: 30px;
	  }
	</style>

		
</head>

<body>
	
<div class="container">
    <div class="row top_space">
    		<center><h1>Mezuniyet Yıllık Uygulaması</h1></center><br><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
            	<div class="panel-heading">
                     <h3 class="panel-title text-center">Ögrenci Girişi</h3>
                 </div>
                <div class="panel-body">
					{{ Form::open(array('url'=>'login', 'method' => 'post', 'class'=>'form-signup')) }}

					@if ($errors->count() > 0)

    					<div class="alert alert-danger">
      	
 					    	<ul>
        					@foreach ($errors->all() as $msg)
        					<li>{{ $msg }}</li>
        					@endforeach
        					</ul>
    					</div>

					@endif
						</ul>
						      
						{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}<br>
						{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
						<br>
						{{ Form::submit('Giriş', array('class'=>'btn btn-large btn-success btn-block'))}}
					{{ Form::close() }}
					
						<a href="{{ URL::to('user/register') }}" class="pull-left"><small>Kayıtlı degil misin ?</small></a>
						<a href="{{ URL::to('/#iletisim') }}" class="pull-right"><small>Şifremi Unuttum ?</small></a><br>
						<center><a href="{{ URL::to('/') }}" class="pull-center"><small>Anasayfa</small></a></center>
					
				</div>
            </div>
        </div>
    </div>
</div>	

</body>
</html>
