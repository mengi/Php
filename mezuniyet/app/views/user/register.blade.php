<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
        @section('title')
            Kaydol
        @show
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<!-- The styles -->
	{{ HTML::style('assets/css/bootstrap.css') }}
	<style type="text/css">
	  body {
	  	background-image: url({{asset('assets/img/6.jpg')}});
	  }
	  .top_space {
		padding-top: 10px;
	  }
	</style>	
</head>

<body>
	  <div class="container">
    <div class="row top_space">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
            	<div class="panel-heading">
                     <center><h3 class="panel-title">Mezuniyet Yıllık Uygulaması</h3><br>
                     	<h3 class="panel-title">Lütfen Kayıt Olun.</h3></center>
                 </div>
                <div class="panel-body">
					{{ Form::open(array('url'=>'user/register', 'class'=>'form-signup')) }}

						@if ($errors->count() > 0)

							<div class="alert alert-danger">
			
								<ul>
								@foreach ($errors->all() as $msg)
								<li>{{ $msg }}</li>
								@endforeach
								</ul>
							</div>

						@endif
						@if(Session::get('message'))
						<a href="{{ URL::to('user/register') }}" class="close" data-dismiss="alert">&times;</a>
						<div class="alert alert-success">{{ Session::get('message') }}</div>
						@endif
						            	<div class="panel-heading">
                     <h3 class="panel-title"><center>Kullanıcı Bilgileri</center></h3>
                 </div>
						{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
						{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Parola')) }}
						{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Parola Tekrar')) }}
						<br>
						            	<div class="panel-heading">
                     <h3 class="panel-title"><center>Üyelik Bilgileri</center></h3>
                 </div>
                 		{{ Form::text('first_name', null, array('class'=>'form-control', 'placeholder'=>'Ad')) }}
						{{ Form::text('last_name', null, array('class'=>'form-control', 'placeholder'=>'Soyad')) }}
						{{ Form::text('birthday', null, array('class'=>'form-control', 'placeholder'=>'Dogum Tarihi(gün/ay/yıl)')) }}
						{{ Form::text('phone_number', null, array('class'=>'form-control', 'placeholder'=>'Telefon')) }}
						<select name="gender" class="form-control">
							<option> Cinsiyet Seçiniz</option>
								<option value="Bay">Bay</option>
								<option value="Bayan">Bayan</option>
                       	</select>
						<br>
				 <div class="panel-heading">
                     <h3 class="panel-title"><center>Okul Bilgileri</center></h3>
                 </div>
						{{ Form::text('faculty_name', null, array('class'=>'form-control', 'placeholder'=>'Fakülte')) }}
						{{ Form::text('department_name', null, array('class'=>'form-control', 'placeholder'=>'Bölüm')) }}
						{{ Form::text('student_number', null, array('class'=>'form-control', 'placeholder'=>'Okul Numarası')) }}
						<br>
						{{ Form::submit('Kaydol', array('class'=>'btn btn-large btn-success btn-block'))}}
					{{ Form::close() }}
					<br>
					<center><a href="{{ URL::to('/') }}" class="pull-center"><small>Anasayfa</small></a></center>
				</div>
            </div>
        </div>
    </div>
</div>	
		
</body>
</html>
