
@extends('layouts.app')

@section('content')

<div class="glav">


        <div class="photka">
            <a href="#"><img src="\image\photo1.jpg" alt="ИГРА" id="change_image"></a>

        </div>

    <div class="prod">
        <p>ПОПУЛЯРНОЕ</p>
    </div>



    @foreach ($PopularProducts as $product)

    <div class="igra">
        <img src="\image\{{$product->image}}" alt="">
        <h4><a href="{{ route('showProduct', [$product->id]) }}">{{ $product->title }}</h4>
        <p>{{ $product->price }} руб.</a></p>

    </div>

    @endforeach

    <div class ="prod2">
        <p>НОВИНКИ</p>
    </div>

    @foreach ($NewProducts as $product)

    <div class="igra2">
        <img src="\image\{{$product->image}}" alt="">
        <h4><a href="{{ route('showProduct', [$product->id]) }}">{{ $product->title }}</h4>
        <P>{{ $product->price }} руб.</a></P>
    </div>

    <?php endforeach;?>

    <div class ="prod3">
        <p>ОЖИДАЕМЫЕ</p>
    </div>
    @foreach ($ExpectProducts as $product)

        <div class="igra2">
            <img src="\image\{{$product->image}}" alt="">
            <h4><a href="{{ route('showProduct', [$product->id]) }}">{{ $product->title }}</h4>
            <P>{{ $product->price }} руб.</a></P>
        </div>

        <?php endforeach;?>




@endsection





