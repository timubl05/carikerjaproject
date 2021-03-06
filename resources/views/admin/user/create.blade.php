@extends('layouts.app')

@section('additional_style')
<link href="{{ asset('/assets/css/select2.css') }}" rel="stylesheet">
@endsection

@push('additional_js')
@include('admin.user.script')
@endpush

@section('navigator')
<li><a href="{{ route('home.root') }}"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
<li><a href="{{ route('user.tabel') }}">User</a> <span class="separator"></span></li>
<li>Form Tambah User</li>
@endsection

@section('pageheader')
<div class="pageicon"><span class="iconfa-list-alt"></span></div>
<div class="pagetitle">
    <h5>Form Tambah User</h5>
    <h1>Form</h1>
</div>
@endsection

@section('maincontent')
<div class="widgetbox box-inverse">
    <h4 class="widgettitle">Form Tambah User</h4>
    <div class="widgetcontent">
        {!! Form::open(array('url' => route('user.tambah'),'class' => 'stdform')) !!}
        @include ('admin.user.form')
        {!! Form::close() !!}
    </div><!--widgetcontent-->
</div>
@endsection