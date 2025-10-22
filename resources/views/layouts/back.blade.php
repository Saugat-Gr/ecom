<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} CMS</title>
    <link rel="stylesheet" href="{{ asset('css/back.css') }}">
</head>

<body>

    @auth('cms')
        @include('back.includes.nav')
    @endauth
    @yield('content')

    <script src="{{ asset('js/back.js') }}"></script>
</body>

</html>
