<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
            PDF
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- The styles -->
    {{ HTML::style('assets/asset/css/bootstrap.min.css') }}
	{{ HTML::style('assets/asset/css/markdown.css') }}
    @yield('styles')
    

</head>
<body>
	@foreach($users as $user)
	  <div class="container" style='margin-top: 15px'>
	    
	    <h1></h1>
	    <div class="page-header">
			<div class="title span7">
				<h1>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
				<h4>Email: {{ $user->email }}</h4>
	 		 </div>
		</div>
	
	
	    <div class="page-header">
	  		<h1>{{ $user->first_name}} {{ $user->last_name }} Hakkındaki Yazılar </h1>
		</div>
		@foreach ($mycomments as $comment)
			@if($user->id == $comment->user_id)
			<ul class="list-group">
				 	  	<li class="list-group-item callout callout-other">
				 			@if ($who = User::find($comment->who_did_id))
					  			<h3><small> {{ $who->first_name }} {{ $who->last_name }} </small></h3>
					  		@endif
					  		
					  		<p>{{ $comment->comment }} </p>
	
					 	</li>
			@endif
			@endforeach
		
				<br>

				<li class="list-group-item listheader-other"><h3>Resimler</h3></li>
				@foreach($images as $image)
					@if($user->id == $image->user_id)
						<li class="list-group-item callout callout-other" style="margin-top:30px;">
				           	<a class="span6" >
				  	          <img src="{{ URL::asset($image->image_path )}}" width="180" height="250">
				            </a>
				        </li>
					@endif
			    @endforeach
			    <hr>

			</ul>
	</div>
	@endforeach
	</body>
</html>
