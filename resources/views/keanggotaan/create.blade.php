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
            <div class="col-sm-6">
                <input type="text" name="jenis" id="jenis" class="form-control form-roll" value="{{ old('jenis') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="simpanan_pokok">Simpanan Pokok</label>
            <div class="col-sm-6">
                <input type="text" name="simpanan_pokok" id="simpanan_pokok" class="form-control form-roll" value="{{ old('simpanan_pokok') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="simpanan_wajib">Simpanan Wajib</label>
            <div class="col-sm-6">
                <input type="text" name="simpanan_wajib" id="simpanan_wajib" class="form-control form-roll" value="{{ old('simpanan_wajib') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="bunga_simpanan">Bunga Simpanan</label>
            <div class="col-sm-6">
                <input type="text" name="bunga_simpanan" id="bunga_simpanan" class="form-control form-roll" value="{{ old('bunga_simpanan') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="denda_simpanan">Denda Simpanan</label>
            <div class="col-sm-6">
                <input type="text" name="denda_simpanan" id="denda_simpanan" class="form-control form-roll" value="{{ old('denda_simpanan') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="keterangan">Keterangan</label>
            <div class="col-sm-6">
                <textarea  name="keterangan" id="keterangan" class="form-control form-roll" required>{{ old('keterangan') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" value="Simpan" class="btn btn-default">
                <a href="{{ Route('nasabah.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('/datatable/nasabah') !!}',
        columns: [
            // { data: 'rownum', name: 'rownum'},
            { data: 'nama', name: 'nama' },
            { data: 'alamat', name: 'alamat' },
            { data: 'created_at', name: 'created_at' },
            // { data: 'action', name: 'action' , orderable: false, searchable: false},
        ]
    });
});
</script>
@endpush