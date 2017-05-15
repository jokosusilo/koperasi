@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Dokumen</h3>
  </div>
  <div class="box-body">
    <form action="{{ route('dokumen.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-2 control-label" for="user_id">User_id</label>
            <div class="col-sm-8">
                <input type="input" name="user_id" id="user_id" class="form-control form-roll" placeholder="" value="{{ old('user_id') }}" required="" />
            </div>
        </div>
        <div class="form form-group">
            <label class="col-sm-2 control-label" for="ktp">KTP</label>
            <div class="col-sm-8">
                <input type="file" name="ktp" class=" form-roll" value="{{ old('ktp') }}">
            </div>
        </div>
        <div class="form form-group">
            <label class="col-sm-2 control-label" for="kk">KK</label>
            <div class="col-sm-8">
                <input type="file" name="kk" class="form-roll" value="{{ old('kk') }}">
            </div>
        </div>
        <div class="form form-group">
            <label class="col-sm-2 control-label" for="assets">Aset</label>
            <div class="col-sm-8">
                <input type="file" name="assets" class="form-roll" value="{{ old('assets') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" value="Simpan" class="btn btn-default">
                <a href="{{ Route('dokumen.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
  </div>
</div>
@endsection
