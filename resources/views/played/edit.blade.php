@extends('tmpt.index')

@section('content')

<div class="container">
	<h3>Edit Data Played</h3>
	<form action="{{ url('/played/' . $row->played_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>TRACK ID</td>
				<td><input type="text" name="play_id_track" value="{{ $row->play_id_track }}"></td>
			</tr>

			<tr>
				<td>PLAYED DATE</td>
				<td><input type="text" name="play_date" value="{{ $row->play_date }}"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="UPDATE" value="UPDATE"></td>
			</tr>
		</table>
		
	</form>
	
</div>
@endsection