@extends('admin::layout.base')
@section('body_content')
    <header>
        @include('admin::layout.includes.header')
    </header>

    <div id="main" class="container">
        @yield('content')
    </div>

    <footer>
        @include('admin::layout.includes.footer')
    </footer>
@stop