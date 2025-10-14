<!DOCTYPE html>
<html>
@include('includes.header')
<body>
    @include('includes.navbar')
    @include('includes.cart')
    @yield('content')
</body>

@include('includes.footer')
@include('includes.script')

</html>
