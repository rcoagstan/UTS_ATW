@extends('tmpt_admin.home')
@section('sub-judul', 'Tambah Data')
@section('content')


@if(Session::has('success'))
	<div class="alert alert-success" role="POST">
	{{ Session('success')}}
	</div>
@endif


<form action="{{ route('tag.store') }}" method="POST">
	@csrf
 	<div class="form-group">
        <label>Data Tag</label>
        <input type="text" class="form-control" name="name">
    </div>

	<div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Data Tag</button>
    </div>
</form>


@endsection