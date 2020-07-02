@extends('layouts.app') 
@section('content') 
<div class="container-fluid bg-dark">
<div class="container bg-info">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
	        <a class="nav-link" href="{{ url('/home') }}">Home</a>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
            <a class="nav-link" href="{{ url('/artist') }}">Artist</a>
            <a class="nav-link" href="{{ url('/album') }}">Album</a>
            <a class="nav-link" href="{{ url('/track') }}">Track</a>
            <a class="nav-link" href="{{ url('/played') }}">Played</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</ul>
</nav>
    <div class="row justify-content-center">
        <div class="col-md-8 bg-light">
<div class="container"> 
	<h3 align="center">Edit Data Track</h3>
	<form action="{{ url('/track') }}" method="post"> 
		@csrf 
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="track_name"></td> 
			</tr> 
			<tr> 
			 	<td>ID Album</td> 
			 	<td><input type="text" name="track_id_album"></td> 
			</tr>
			<tr> 
			 	<td>Time</td> 
			 	<td><input type="text" name="track_time"></td> 
			</tr>
			<tr>
			<td>@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="{{ url('/track/upload') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File </b><br/>
						<input type="file" name="track_file">
					</div>
			</form>
		</td>
			</tr>
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection