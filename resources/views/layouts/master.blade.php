<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tanara</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>

    <div id="app">
        <router-view></router-view>
    </div>

    <script async src="{{ mix('js/app.js') }}"></script>
</body>
</html>
