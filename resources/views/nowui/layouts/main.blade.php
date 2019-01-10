<!DOCTYPE html>
<html lang="en">
@include('nowui.partials.head')
<body class="login-page sidebar-collapse">
@include('nowui.partials.navbar')

{{--    @include('partials.header')--}}
@yield('content')
@include('nowui.partials.footer')
</body>

</html>