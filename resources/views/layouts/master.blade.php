<!DOCTYPE html>
<html>

@include('includes.header')
<body>
    @include('includes.navbar')

    @yield('content')
</body>

@include('includes.footer')
@include('includes.script')

</html>
