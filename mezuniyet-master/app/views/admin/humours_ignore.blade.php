@extends('admin.layout')

@section('title')
	Mizah Reddedilenler
@stop

@section('styles')
<style type="text/css">
	body {
		padding-bottom: 40px;
	}
	.sidebar-nav {
		padding: 9px 0;
	}
	textarea{
		/*overflow: auto;*/
		font-family: arial;
        /*resize:none;*/
        width: 650px;
        height:120px;
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
						<a href="{{ URL::to('admin/humours_ignore') }}">Reddedilen Mizahlar</a> 
					</li>
				</ul>
			</div>
			
			@include('admin.headers')

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-share"></i> Mizahlar</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
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

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>id</th>
								  <th>Mizah Yazısı</th>
								  <th>Fotoğraf</th>
								  <th>İşlemler (Kabul)</th>
							  </tr>
						  </thead>   
						  <tbody>
							@foreach ($humours_r as $humour)
							<tr>
								@if($humour->humour_content != "" and $humour->image_path != "")
									<td>{{ $humour->id }}</td>
									<td>{{ $humour->humour_content }}</td>
									<td>
										<a href="#">
											<img class="dashboard-avatar" src="{{ URL::asset($humour->image_path )}}">
										</a>
									</td>
								@elseif($humour->humour_content != "")
									<td>{{ $humour->id }}</td>
									<td>{{ $humour->humour_content}}</td>
									<td>Boş</td>
								@elseif($humour->image_path != "")
									<td>{{ $humour->id }}</td>
									<td>Boş</td>
									<td>
										<a href="#">
											<img class="dashboard-avatar" src="{{ URL::asset($humour->image_path )}}">
										</a>
									</td>
								@endif

								<td class="center">
									<a class="btn btn-success btn-round" href="{{ URL::route('humours_confirm', array('id' => $humour->id)) }}">
										<i class="icon-ok icon-white"></i> 
										Kabul
									</a>
								</td>
								
							</tr>
							@endforeach

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->	
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->
@stop
