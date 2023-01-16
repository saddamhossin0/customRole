<!DOCTYPE html>
<html lang="en">
@include('admin.partials.header-asset')
<body class="">
<div id="app">
    <div class="main-wrapper">
        @include('admin.partials.header')
        @include('admin.partials.sidebar')
        <div class="main-content">
            <!-- Main Content -->
            @yield('main-content')
            <!-- Main Content End -->
        </div>
{{--        @include('admin.partials.footer')--}}
    </div>
</div>
@include('admin.partials.footer-asset')
</body>
</html>
