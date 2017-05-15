@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <h3 class="box-title">Dokumen</h3>
    <div class="box-tools">
		<a href="{{ route('dokumen.create') }}" class="bg-navy btn-sm btn btn-box-tool">Add Dokumen</a>
	</div>
  </div>
  <div class="box-body">
    <table id="datatable" style="width: 100%;">
    	{!! $dataTable->table() !!}
    </table>
  </div>
</div>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@endpush