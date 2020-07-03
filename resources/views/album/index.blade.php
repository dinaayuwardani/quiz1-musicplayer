@extends('tmpt.index')
@section('content')

<div class="row">
            <div class="col-lg-10">
                <section class="widget">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">Data Album</span>
                        </h5>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                        <thead>
                            <tr>
							<th>ALBUM ID</th>
							<th>ALBUM NAME</th>
							<th>ARTIST NAME</th>
							<th>AKSI</th>
							</tr>

						</thead>
                        <tbody>

	@foreach($rows as $row)
	<tr>
		<td>{{ $row->album_id }}</td>
		<td>{{ $row->album_name }}</td>
		<td>{{ $row->artist_name }}</td>

		<td>
		<form action="{{ url('album/' . $row->album_id) }}" method="POST">
			<a href="{{ url('album/' . $row->album_id . '/edit') }}" class="badge bg-success">Edit</a>
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button class="badge bg-danger">Hapus</button>
			</form>
			</td>
			</tr>

	@endforeach
</tbody>
					</table>
				</div>
			</section>
		</div>
</div>

<a href="{{ url('album/create') }}" class="badge bg-info">TAMBAH DATA</a>

@endsection