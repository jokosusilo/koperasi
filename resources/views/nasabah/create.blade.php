@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Nasabah</h3>
  </div>
  <div class="box-body">
    <form action="{{ route('nasabah.store') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-2 control-label" for="kode">Kode ID Pengenal</label>
            <div class="col-sm-6">
                <input type="text" name="kode" id="kode" class="form-control form-roll" value="{{ old('kode') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="nama">Nama</label>
            <div class="col-sm-6">
                <input type="text" name="nama" id="nama" class="form-control form-roll" value="{{ old('nama') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="alamat">Alamat</label>
            <div class="col-sm-6">
                <textarea  name="alamat" id="alamat" class="form-control form-roll" required>{{ old('alamat') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="telepon">Telepon</label>
            <div class="col-sm-6">
                <input type="text" name="telepon" id="telepon" class="form-control form-roll numbersOnly" placeholder="" value="{{ old('telepon') }}" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="cost_price">Keanggotaan</label>
            <div class="col-sm-6">
                <input type="number" min="0" name="cost_price" id="cost_price" class="form-control form-roll numbersOnly" placeholder="" value="{{ old('cost_price') }}" required=""  required="" />
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