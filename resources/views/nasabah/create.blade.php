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
            <label class="col-sm-2 control-label" for="name">Nama Barang *</label>
            <div class="col-sm-8">
                <input type="text" name="name" id="name" class="form-control form-roll" placeholder="" value="{{ old('name') }}" required="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="color">Warna Barang *</label>
            <div class="col-sm-8">
                <input type="text" name="color" id="color" class="form-control form-roll" placeholder="" value="{{ old('color') }}" required="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="unit">Satuan *</label>
            <div class="col-sm-8">
                <input type="text" name="unit" id="unit" class="form-control form-roll" placeholder="" value="{{ old('unit') }}" required="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="quantity">Jumlah *</label>
            <div class="col-sm-8">
                 <input type="number" min="0" name="quantity" id="quantity" class="form-control form-roll numbersOnly" placeholder="" value="{{ old('quantity') }}" required="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="cost_price">Harga Beli *</label>
            <div class="col-sm-8">
                <input type="number" min="0" name="cost_price" id="cost_price" class="form-control form-roll numbersOnly" placeholder="" value="{{ old('cost_price') }}" required=""  required="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="selling_price">Harga Jual *</label>
            <div class="col-sm-8">
                <input type="number" min="0" name="selling_price" id="selling_price" class="form-control form-roll numbersOnly" placeholder="" value="{{ old('selling_price') }}" required="" />
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