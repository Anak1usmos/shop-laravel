@extends('layouts.app')

@section('content')


<div class="registr">


    <div class="forma">
        <h2>Регистрация</h2>
        <form method="POST" action="{{ route ('register') }}">
            @csrf
            <label for="login"><b>Login</b></label>
            <input id="name" type="text" name="name" placeholder="Введите логин" value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="email"><b>E-mail</b></label>
            <input id="email" type="email" name="email" placeholder="Введите E-mail" value="{{ old('email') }}" required>
            <label for="password"><b>Password</b></label>
            <input id="password" type="password" name="password" placeholder="Введите пароль" value="{{ old('password') }}" required>
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror


            <input type="submit" name="submit" class="GG" value="Регистрация">
        </form>
    </div>

</div>
@endsection