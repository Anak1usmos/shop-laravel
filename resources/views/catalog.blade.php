@extends('layouts.app')

@section('content')
<div class="catalogplace">
    <div class="naz">
        <h2>Категории:</h2>
    </div>
    <div class="content1">
        <ul >
           @foreach($categories as $prod)
            <li class="categories">
                <a class ="categories-name" href="{{ route('showProductCat', [$prod->id]) }}"> {{ $prod->name }} </a>
            </li>
            @endforeach
        </ul>

    </div>
    @foreach($catalogList as $catalog)
        <div class="containercatalog">
            <div class ="photogame">
                <img src="\image\{{ $catalog->image }}" alt="">
            </div>
            <div class="namegame">
                <p><a href="{{ route('showProduct', [$catalog->id]) }}">{{ $catalog->title }}</a></p>
            </div>
            <div class="price2">
                <p>{{ $catalog->price }} руб.</p>
            </div>
            <div class="knopkacatalog">
                <a href="{{ route('add', ['id' => $catalog->id]) }}">

                    <button>Добавить в корзину</button></a>
                </form>

            </div>
        </div>
    @endforeach
</div>
@endsection