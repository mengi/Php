@extends('admin.layout')

@section('title')
		Yönetici Personal Page
@stop

@section('styles')
<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
@stop

@section('content')

		@include('admin.header')
		<div id="content" class="span10">
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="{{ URL::to('admin/profile') }}">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="{{ URL::to('admin/admins') }}">{{ $firstname }} {{ $lastname }}</a>
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Admin Bilgileri</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					@foreach ($adminler as $admin)
					<div class="box-content">
						{{ Form::open(array('url'=>'admin/adminupdate', 'method' => 'post', 'class'=>'form-horizontal')) }}
						  <fieldset>
							<legend>Bilgileri Güncelle</legend>

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
							<div class="alert alert-success">{{ Session::get('message') }}</div>
							@endif
							{{ Form::hidden('id', $admin->id) }}	  
							<div class="control-group">
							  <label class="control-label" for="date01">E-Posta</label>
							  <div class="controls">
								{{ Form::text('email', $admin->email, array('class'=>'form-control input-xlarge')) }}
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">İsim</label>
							  <div class="controls">
								{{ Form::text('first_name', $admin->first_name , array('class'=>'form-control input-xlarge')) }}
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Soyisim</label>
							  <div class="controls">
								{{ Form::text('last_name', $admin->last_name, array('class'=>'form-control input-xlarge')) }}
							  </div>
							</div>

							<div class="form-actions">
								{{ Form::submit('Güncelle', array('class' => 'btn btn-success')); }}
								<a href="{{ URL::route('admin/admins') }}" class="btn btn-danger">İptal</a>
							</div>
						</fieldset>
					{{ Form::close() }}
					
					</div>
					@endforeach
				</div><!--/span-->	
			</div><!--/row-->
		
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Parola Bilgisini Güncelle</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					@foreach ($adminler as $admin)	
					<div class="box-content">
						{{ Form::open(array('url'=>'admin/password_update', 'class'=>'form-horizontal')) }}
						  <fieldset>
							<legend>Parola Bilgisini Güncelle</legend>
							
							{{ Form::hidden('id', $admin->id) }}
							
							<div class="control-group">
							  <label class="control-label" for="date01">Eski Parola</label>
							  <div class="controls">
								{{ Form::password('old_password', array('class'=>'form-control input-xlarge')) }}
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Yeni Parola</label>
							  <div class="controls">
								{{ Form::password('password', array('class'=>'form-control input-xlarge')) }}
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Yeni Parola(Tekrar)</label>
							  <div class="controls">
								{{ Form::password('password_confirmation', array('class'=>'form-control input-xlarge')) }}
							  </div>
							</div>
							
							<div class="form-actions">
								{{ Form::submit('Güncelle', array('class'=>'btn btn-success'))}}
								<a href="{{ URL::route('admin/profile') }}" class="btn btn-danger">İptal</a>
							</div>
						</fieldset>
					{{ Form::close() }}           
					</div>
					@endforeach
				</div><!--/span-->
			</div><!--/row-->
</div><!--/row-->
@stop
