@extends('tmpt.index')

@section('content')

<div class="row">
            <div class="col-lg-10">
                <section class="widget">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">Data Track</span>
                        </h5>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>	
								<th>TRACK ID</th>
								<th>TRACK NAME</th>
								<th>ALBUM NAME</th>
								<th>TRACK TIME</th>
								<th>TRACK FILE</th>
								<th>AKSI</th>
							</tr>
						</thead>
                        <tbody>
							@foreach($rows as $row)
							<tr>
								<td>{{ $row->track_id }}</td>
								<td>{{ $row->track_name }}</td>
								<td>{{ $row->album_name }}</td>
								<td>{{ $row->track_time }}</td>

								<td>
									<audio controls>
										<source src="lagu\{{ $row->track_file }}.mp3" type="audio/mpeg">
									</audio>
								</td>

								<td>
									<form action="{{ url('track/' . $row->track_id) }}" method="POST">
										<a href="{{ url('track/' . $row->track_id . '/edit') }}" class="badge bg-success">Edit</a>
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

<a href="{{ url('track/create') }}"  class="badge bg-info">TAMBAH DATA</a>

@endsection