@extends('admin.layout')

@section('title')
	Kullanıcı Ekleme
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
						<a href="{{ URL::to('admin/user_add') }}">Kullanıcı Ekle</a>
					</li>
				</ul>
			</div>
			

				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header well" data-original-title>
							<h2><i class="icon icon-add"></i> Kullanıcı Ekleme</h2>
							<div class="box-icon">
								<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							</div>
						</div>
						<center>
						<div class="box-content">
							{{ Form::open(array('url'=>'admin/user_add', 'class'=>'form-signup')) }}

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
							
							<div class="control-group">
								<br>
								{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}<br>
								{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}<br>
								{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Password Confirmation')) }}
								<br>
							</div>
							
							{{ Form::submit('Kullanıcı Ekle', array('class'=>'btn btn-primary btn-block'))}}
						{{ Form::close() }}
						</div>
					</center>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/#content.span10-->
@stop