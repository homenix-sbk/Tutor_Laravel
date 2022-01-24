<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', '家庭教師マッチング') }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="fade-in">

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/reload.js') }}"></script>
    <script src="{{ asset('js/openNav.js') }}"></script>
    <script src="{{ asset('js/activeNav.js') }}"></script>
    <script src="{{ asset('js/gotoTop.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
</body>
</html>