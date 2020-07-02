@extends('layouts.app') 
@section('content') 
<div class="container"> 
	<h3>Edit Data Played</h3>
	<form action="{{ url('/played/'.$row->play_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf 
		<table> 
			<tr> 
			 	<td>ID Track</td> 
			 	<td><input type="text" name="play_id_track" value="{{$row->play_id_track }}"></td> 
			</tr> 
			<tr> 
			  	<td>Date</td> 
			  	 <td><input type="text" name="play_date" value="{{$row->play_date }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection