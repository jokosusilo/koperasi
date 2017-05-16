@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Keanggotaan</h3>
  </div>
  <div class="box-body">
    <form action="{{ route('keanggotaan.store') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-2 control-label" for="jenis">Jenis</label>
            <div class="col-sm-6{{ $errors->has('jenis') ? ' has-error' : '' }}">
                <input type="text" name="jenis" id="jenis" class="form-control form-roll" value="{{ old('jenis') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="simpanan_pokok">Simpanan Pokok</label>
            <div class="col-sm-6{{ $errors->has('simpanan_pokok') ? ' has-error' : '' }}">
                <input type="text" name="simpanan_pokok" id="simpanan_pokok" class="form-control form-roll" value="{{ old('simpanan_pokok') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="simpanan_wajib">Simpanan Wajib</label>
            <div class="col-sm-6{{ $errors->has('simpanan_wajib') ? ' has-error' : '' }}">
                <input type="text" name="simpanan_wajib" id="simpanan_wajib" class="form-control form-roll" value="{{ old('simpanan_wajib') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="bunga_simpanan">Bunga Simpanan</label>
            <div class="col-sm-6{{ $errors->has('bunga_simpanan') ? ' has-error' : '' }}">
                <input type="text" name="bunga_simpanan" id="bunga_simpanan" class="form-control form-roll" value="{{ old('bunga_simpanan') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="denda_simpanan">Denda Simpanan</label>
            <div class="col-sm-6{{ $errors->has('denda_simpanan') ? ' has-error' : '' }}">
                <input type="text" name="denda_simpanan" id="denda_simpanan" class="form-control form-roll" value="{{ old('denda_simpanan') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="keterangan">Keterangan</label>
            <div class="col-sm-6{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                <textarea  name="keterangan" id="keterangan" class="form-control form-roll">{{ old('keterangan') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" value="Simpan" class="btn btn-default">
                <a href="{{ Route('keanggotaan.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush