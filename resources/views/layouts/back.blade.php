<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} CMS</title>
    <link rel="stylesheet" href="{{ asset('css/back.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Toastr CSS --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    {{-- Toastr JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>

<body>

    @auth('cms')
        @include('back.includes.nav')
    @endauth
    @yield('content')

    @include('back.includes.message')
    @foreach (session('flash_notification', collect())->toArray() as $message)
        @if ($message['overlay'])
            @include('flash::modal', [
                'modalClass' => 'flash-modal',
                'title' => $message['title'],
                'body' => $message['message'],
            ])
        @else
            <div class="alert alert-{{ $message['level'] }}">
                {!! $message['message'] !!}
            </div>
        @endif
    @endforeach

    {{ session()->forget('flash_notification') }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/back.js') }}"></script>
</body>

</html>
