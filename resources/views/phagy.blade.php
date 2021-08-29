@extends('layouts.phagyapp')

@section('title', 'Phagy')

@section('content')

    <p>現在の日時 : {{$now}}</p>

    <p>１６時間後 : {{$endtime}}</p>

    <p>開始時間を入力してください</p>

    <div class="form-wrapper">
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
    </div>

@endsection
