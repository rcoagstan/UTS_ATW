@extends('tmpt_admin.home')
@section('sub-judul', 'Tags')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="POST">
	{{ Session('success')}}
	</div>
@endif

	<a href="{{ route('tag.create') }}" class="btn btn-dark btn-sm"><i class="fa fa-plus"></i>&nbsp Tambah Data</a><br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Tag</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($tag as $result => $hasil)
			<tr>
				<td>{{ $result + $tag->firstitem() }}</td>
				<td>{{ $hasil-> name }}</td>
				<td>
					<form action="{{ route('tag.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('tag.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
{{$tag->links()}}
@endsection