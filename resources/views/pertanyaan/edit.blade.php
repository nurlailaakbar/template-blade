@extends('master_template')
@section('contain')

	<form action="{{ route ('pertanyaan.update', $pertanyaan->id) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
      <label>Pertanyaan</label> 
      <input type="text" class="form-control" name="name" value="{{ $pertanyaan->judul }}">
    </div>

    <div class="form-group">
    	<button class="btn btn-primary">Update</button>
    </div>

@endsection