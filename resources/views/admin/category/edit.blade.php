@extends('tmpt_admin.home')
@section('sub-judul', 'Edit Data')
@section('content')


@if(Session::has('success'))
	<div class="alert alert-success" role="POST">
	{{ Session('success')}}
	</div>
@endif


<form action="{{ route('category.update', $category->id) }}" method="POST">
	@csrf
	@method('patch')
 	<div class="form-group">
        <label>Data Kategori</label>
        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
    </div>

	<div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Data Kategori</button>
    </div>
</form>


@endsection