@extends('layouts.phagyapp')

@section('title', 'Phagy')

@section('content')

    <p>開始時刻 : {{$numeric}}</p>

    <p>終了時刻 : {{$result}}</p>

    <a href="/">時間入力画面へ戻る</a>

@endsection
