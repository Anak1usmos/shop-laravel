@extends('layouts.app')

@section('content')
<div class="genre">



    @foreach($cat as $prod)
        <div class="containercatalog">
            <div class ="photogame">
                <img src="\image\{{ $prod->image }}" alt="">
            </div>
            <div class="namegame">
                <p><a href="{{ route('showProduct', [$prod->id]) }}">{{ $prod->title }} </a></p>
            </div>
            <div class="price2">
                <p> {{ $prod->price }} руб. </p>
            </div>
            <div class="knopkacatalog">
                <a href="{{ route('add', ['id' => $prod->id]) }}">
                    <button>Добавить в корзину</button>


            </div>
        </div>
    @endforeach

</div>

@endsection