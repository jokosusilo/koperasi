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
    <table class="table table-condensed" style="width: 100%;">
    	<thead>
    		<tr>
                <th>No</th>
    			<th>Jenis</th>
                <th>S. Pokok</th>
                <th>S. Wajib</th>
                <th>Bunga Simpanan</th>
                <th>Denda Simpanan</th>
    			<th>Keterangan</th>
    			<th></th>
    		</tr>
    	</thead>
        <tbody>
            @forelse ($keanggotaans as $keanggotaan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $keanggotaan->jenis }}</td>
                <td>{{ $keanggotaan->simpanan_pokok }}</td>
                <td>{{ $keanggotaan->simpanan_wajib }}</td>
                <td>{{ $keanggotaan->bunga_simpanan }}</td>
                <td>{{ $keanggotaan->denda_simpanan }}</td>
                <td>{{ $keanggotaan->keterangan }}</td>
                <td>
                    <form method="POST" action="{{ route('keanggotaan.destroy', $keanggotaan->id) }}" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="DELETE">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <a href="{{ route('keanggotaan.edit', $keanggotaan->id) }}" class="btn btn-xs btn-primary">Edit</a>
                        <input type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="8">There is no data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
  </div>
</div>
@endsection

@push('scripts')
<script>
</script>
@endpush