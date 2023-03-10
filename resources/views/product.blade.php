@extends('layouts.app')

@section('content')

    <div class="osnova">
        <div class="photo3">
            <img src="\image\{{$item->image2}}" alt="Euro Truck Simulator 2">
        </div>
        <div class="text">
            <p>Описание:{{$item->description}}!</p>
        </div>
        <div class ="block-info">
            <ul class="properties1">
                <li>{{$item->title}}</li>
                <li>Цена:{{$item->price}}.руб</li>
                @foreach ($charakt as $val)

                    <li>{{$val->name}}:{{$val->value}}</li>
                @endforeach

            </ul>
        </div>
        <div class="knopka">
            <a href="{{ route('add', ['id' => $item->id]) }}">
                <button>Добавить в корзину</button></a>

        </div>

</div>
@endsection