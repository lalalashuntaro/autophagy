<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/phagy.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @component('components.header')
        @slot('heading')
        オートファジー計算アプリ
        @endslot
    @endcomponent

<main>
    <div class="main-wrapper">
        @yield('content')
    </div>
</main>

<footer>
    @component('components.footer')
        @slot('footer')
        lalala_s
        @endslot
    @endcomponent
</footer>
</body>
</html>
