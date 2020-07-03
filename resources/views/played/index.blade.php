@extends('tmpt.index')
@section('content')

<div class="row">
            <div class="col-lg-10">
                <section class="widget">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">Data Played</span>
                        </h5>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                        <thead>
                            <tr>
								<th>PLAYED ID</th>
								<th>TRACK NAME</th>
								<th>PLAYED DATE</th>
								<th>AKSI</th>
							</tr>
						</thead>
                        <tbody>
						@foreach($rows as $row)
						<tr>
							<td>{{ $row->play_id }}</td>
							<td>{{ $row->track_name }}</td>
							<td>{{ $row->play_date }}</td>

							<td>
							<form action="{{ url('played/' . $row->play_id) }}" method="POST">
								<a href="{{ url('played/' . $row->play_id . '/edit') }}" class="badge bg-success">Edit</a>
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
<a href="{{ url('played/create') }}" class="badge bg-info">TAMBAH DATA</a>

@endsection