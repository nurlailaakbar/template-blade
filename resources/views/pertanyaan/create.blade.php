@extends('master_template')
@section('contain')

  <form action="{{ route ('pertanyaan.create') }}" method="POST">
  @csrfss
  <div class="form-group">
      <label>PERTANYAAN</label> 
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
      <button class="btn btn-primary">Simpan</button>
    </div>


 @endsection