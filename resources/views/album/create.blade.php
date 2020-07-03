@extends('tmpt.index')
@section('content')

<div class="container">
	<h3>Tambah Data Album</h3>
	<form action="{{ route('album.store') }}" method="POST" role="form">
		@csrf
		<table>
			<tr>
				<td>ARTIST ID</td>
				<td><select name="album_id_artist" id="album_id_artist">
					@foreach($rows as $row)
					<option name="album_id_artist" id="album_id_artist" value="{{ $row->artist_id }}">{{ $row->artist_name }}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td>ALBUM NAME</td>
				<td><input type="text" id="album_name" name="album_name"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" value="SIMPAN">SIMPAN</button></td>
			</tr>
		</table>
	</form>
</div>
@endsection