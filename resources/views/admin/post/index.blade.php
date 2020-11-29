@extends('tmpt_admin.home')
@section('sub-judul', 'Posts')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="POST">
	{{ Session('success')}}
	</div>
@endif

	<a href="{{ route('post.create') }}" class="btn btn-dark btn-sm"><i class="fa fa-plus"></i>&nbsp Tambah Data</a><br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($post as $result => $hasil)
			<tr>
				<td>{{ $result + $post->firstitem() }}</td>
				<td>{{ $hasil-> judul }}</td>
				<td>{{ $hasil->category->name }}</td>
				<td>
					<img src="{{ asset( $hasil->gambar) }}" class="img-fluid" style="width:100px"></td>
				</td>
				<td>
					<form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
{{$post->links()}}
@endsection