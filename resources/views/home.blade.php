@extends('layouts.app')

{{-- @section('title', 'Dashboard') --}}
{{-- @section('subtitle', 'Page Title') --}}

@section('content')
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Nasabah</span>
        <span class="info-box-number">1.410</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Simpanan</span>
        <span class="info-box-number">410</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Deposito</span>
        <span class="info-box-number">13.648</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pinjaman</span>
        <span class="info-box-number">93.139</span>
      </div>
    </div>
  </div>
</div>
@endsection
