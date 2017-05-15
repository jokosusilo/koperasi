@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Keanggotaan</h3>
    <div class="box-tools">
		<a href="{{ route('keanggotaan.create') }}" class="bg-navy btn-sm btn btn-box-tool"><i class="fa fa-plus"></i> Add Keanggotaan</a>
	</div>
  </div>
  <div class="box-body">
    <table id="datatable" style="width: 100%;">
    	<thead>
    		<tr>
    			<th>Jenis</th>
                <th>S. Pokok</th>
                <th>S. Wajib</th>
                <th>Bunga Simpanan</th>
                <th>Denda Simpanan</th>
    			<th>Keterangan</th>
    			<th>Tanggal Masuk</th>
    		</tr>
    	</thead>
    </table>
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