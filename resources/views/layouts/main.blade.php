<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.meta')
    @include('partials.styles')

    {{-- Injectable styles --}}
    @yield('styles')
</head>

<body class="antialiased">
    @include('partials.nav')

    <div class="my-5">
        {{-- Dynamically Injectable Content --}}
        @yield('content')
    </div>

    @include('partials.footer')
    @include('partials.scripts')

    {{-- Injectable script --}}
    @yield('scripts')
</body>

</html>
