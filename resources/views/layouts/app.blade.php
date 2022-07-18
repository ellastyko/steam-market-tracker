<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('header')
            @include('layouts.header.head')
        @show
    </head>
    <body>
    {{-- Main content --}}
    @yield('content')

    @include('layouts.footer.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
