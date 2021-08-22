<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>オートファジー計算アプリ</h1>

    <p>現在の日時 : {{$now}}</p>

    <p>１６時間後（オートファジー終了）の日時 : {{$endtime}}</p>

    <p>開始時間を入力してください</p>

    <form action="/hello" method="post">
        @csrf
        <input type="time" name="numeric" required>
        <button>数値計算</button>
    </form>

    @if ($errors)
        @foreach ($errors -> all() as $error)
            {{$error}}
        @endforeach
    @endif
</body>
</html>
