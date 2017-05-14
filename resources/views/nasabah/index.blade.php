@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Nasabah</h3>
    <div class="box-tools">
		<a href="{{ route('nasabah.create') }}" class="bg-navy btn-sm btn btn-box-tool">Add Nasabah</a>
	</div>
  </div>
  <div class="box-body">
    <table id="datatable" style="width: 100%;">
    	<thead>
    		<tr>
    			<th>Nama</th>
    			<th>Alamat</th>
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