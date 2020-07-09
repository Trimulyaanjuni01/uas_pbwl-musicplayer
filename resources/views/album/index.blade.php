@extends('layouts.app') 

@section('content') 
<div class="container navbar-expand-sm bg-light navbar-dark">
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
	<h3 style="text-align: center;">Daftar Album</h3> 
	<div>
		<div>
	<table class="table"> 
		<tr> 
			<td>Nama</td> 
			<td>ID Artist</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->album_name }}</td> 
			<td>{{ $row->album_id_artist }}</td>
			<td><form action="{{ url('album/' . $row->album_id) }}" method="POST"> 
 				<input name="_method" type="hidden" value="DELETE"> 
 				@csrf 
 					<button>Hapus</button> 
				</form></td>
			<td><a href="{{ url('album/' . $row->album_id . '/edit') }}"><button>Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 
</div>
<div><a href="{{ url('album/create') }}">Tambah Data</a></div>
</div>
 @endsection