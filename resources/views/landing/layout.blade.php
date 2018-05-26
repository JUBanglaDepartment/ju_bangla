<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="utf-8">
    <title>Department of Bangla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="main_content">
        @yield('header')
        @yield('menu')
        @yield('banner')
        @yield('content_header')
        <div id="content_div">
            @yield('content_body')
            @yield('footer')
        </div>
    </div>
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
