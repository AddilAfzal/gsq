<!DOCTYPE html>
<html lang="en">
    @include('master.header')
    <body>
        @include('master.nav')
        @yield('content')
        @include('master.footer')
        @yield('js-body')
    </body>
</html>