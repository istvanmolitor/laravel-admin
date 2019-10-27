@extends('admin::layout.layout')

@section('title')
    Admin
@stop

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
@stop

@section('content')
    {!! $menu !!}
@stop