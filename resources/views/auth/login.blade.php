@extends('layouts.app')

@section('content')
    <div class="registr">

        <div class="forma2">
            <h2>Вход на сайт</h2>
            <form action="{{ route ('login') }}" method="post">
                @csrf
                <label for="email"><b>E-mail</b></label>
                <input type="email" name="email" placeholder="Введите E-mail" value="">
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label for="password"><b>Password</b></label>
                <input type="password" name="password" placeholder="Введите пароль" value="">
                @error('password')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <input type="submit" name="submit" class="GG" value="Вход">
                <div class="z322">Если у вас нет аккаунта<a href="{{ route ('register') }}"> зарегестрируйтесь</a></div>
            </form>

        </div>

    </div>

@endsection
