@extends('tmpt_admin.home')
@section('sub-judul', 'Tambah Data')
@section('content')


@if(Session::has('success'))
	<div class="alert alert-success" role="POST">
	{{ Session('success')}}
	</div>
@endif


<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
 	<div class="form-group">
        <label>Nama Post</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
        	<option value="" holder>Pilih Kategori</option>
        	@foreach($category as $result)
        	<option value="{{ $result->id }}">{{ $result->name }}</option>
        	@endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Select Multiple</label>
        <select class="form-group select2" multiple="" name="tags[]">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea type="text" class="form-control" name="content"></textarea>
    </div>
    <div class="form-group">
        <label>Thumnail</label>
        <input type="file" class="form-control" name="gambar">
    </div>
	<div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Data Post</button>
    </div>
</form>


@endsection