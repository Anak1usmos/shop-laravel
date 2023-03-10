@extends('layouts.app')

@section('content')



<div class="cabinet">
    <div class ="cabin2">

        <h2>Кабинет пользователя</h2>

        <h1>Привет, {{$user->name}} </h1>

        <ul>
            <li><a href="{{ route ('edit') }}">Редактировать данные</a></li>
            <li><a href ="{{ route ('spisok') }}">Список покупок</a></li>
        </ul>

    </div>

</div>
@endsection