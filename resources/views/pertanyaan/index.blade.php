@extends('master_template')
@section('contain')


	<a href="{{ route ('pertanyaan.create')}}" class="btn btn-info">Tambah pertanyaan</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>Tanggal dibuat</th>
				<th>Tanggal Di perbarui</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($pertanyaan as $result => $hasil)
			<tr>
				<td>{{ $result + $pertanyaan -> firstitem() }}</td>
				<td>{{ $hasil->judul }}</td>
					<form action="{{ route('pertanyaan.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<td><a href="{{ route('pertanyaan.edit', $hasil->id ) }}" class="btn btn-primary">Edit</a>
					<button type=""class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

{{$pertanyaan->links()}}

@endsection