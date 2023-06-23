@include('connect_to_database')
@extends('layouts.app')
@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <title>Registration system PHP and MySQL</title>
@endsection
@section('content')
    <div class="register">


        <form method="post" action="{{ route('signin') }}">
            @csrf
            @include('errors')
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" >
            </div>
            <div class="input-group">
                <label>Пароль</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Логін</button>
            </div>
            <p>
                Ви досі не учасник нашого магазину? <a href="{{ route('register') }}">Зареєструватись</a>
            </p>
            <p>
                Створю аккаунт пізніше. <a href="{{ action([\App\Http\Controllers\PagesController::class, 'Landing']) }}">Перейти на головну</a>
            </p>
        </form>
    </div>
@endsection
