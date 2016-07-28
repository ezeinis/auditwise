<!DOCTYPE html>
<html>
<head>
    <title>Auditwise</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-3.3.7.min.css">
    <link rel="stylesheet" type="text/css" href="/css/auditwise_main.css">
    @yield('header')
</head>
<body>


    @include('auditwise_theme.includes.nav_header')
    @yield('content')
    @include('auditwise_theme.includes.footer')

    <script src="/js/bootstrap-3.3.7.min.js"></script>
    @yield('js')
</body>
</html>
