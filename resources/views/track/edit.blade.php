@extends('layouts.app') 
@section('content') 
<div class="container"> 
	<h3>Tambah Data Track</h3>
	<form action="{{ url('/track/'.$row->track_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="track_name" value="{{$row->track_name }}"></td> 
			</tr> 
			<tr> 
			 	<td>ID Album</td> 
			 	<td><input type="text" name="track_id_album" value="{{$row->track_id_album}}"></td> 
			</tr>
			<tr> 
			 	<td>Time</td> 
			 	<td><input type="text" name="track_time" value="{{$row->track_time }}"></td> 
			</tr>
			<tr> 
			 	<td>File</td> 
			 	<td><input type="file" name="track_file" value="{{$row->track_file }}"></td> 
			</tr>
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection