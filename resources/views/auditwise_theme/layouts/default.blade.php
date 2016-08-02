<!DOCTYPE html>
<html>
<head>
    <title>Auditwise</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-3.3.7.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/auditwise_main.css">
    <script src="https://use.typekit.net/vpa3uqg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    @yield('header')
</head>
<body>

    @include('auditwise_theme.includes.side_drawer')
    @include('auditwise_theme.includes.career_drawer')
    <div id="site_wrap" class="container-fluid">
        @include('auditwise_theme.includes.nav_header')
        @yield('content')
        @include('auditwise_theme.includes.newsletter')
    </div>

    @include('auditwise_theme.includes.footer')
    <script src="/js/bootstrap-3.3.7.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="/js/drawer_js.js"></script>
</body>
</html>
