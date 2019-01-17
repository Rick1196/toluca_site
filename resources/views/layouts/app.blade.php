<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('partials.header')
</head>
<body class="modal-open">
    @include('partials.navbar')
        @yield('content')
    {{-- @include('partials.footer') --}}
    @include('partials.scripts')
    @yield('scriptcase')
</body>
</html>
