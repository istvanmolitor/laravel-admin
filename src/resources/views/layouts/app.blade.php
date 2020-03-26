<!DOCTYPE html>
<html>
<head>
    @include('admin::layouts.includes.head')
</head>
<body>
<div class="container-fluid">
    @include('admin::layouts.includes.header')

    <div class="row">
        <div class="col-md-4">
            @include('admin::layouts.includes.sidebar')
        </div>
        <div class="col-md-8">

            @yield('breadcrumb')

            <h1 class="m-0 text-dark">@yield('title')</h1>

            <section>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fas fa-check"></i> {{ session()->get('success') }}
                    </div>
                @endif

                @yield('content')
            </section>
        </div>
    </div>

    @include('admin::layouts.includes.footer')
</div>
@include('admin::layouts.includes.scripts')
</body>
</html>
