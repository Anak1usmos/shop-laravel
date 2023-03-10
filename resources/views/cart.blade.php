@extends('layouts.app')

@section('content')
<div class="cart">
        <div class="cart2">
            <h2>КОРЗИНА</h2>

            @if ($sum > 0)
            <p>Вы приобрели следующие товары:</p>
            <table class="goodsInCart">
                <tr class="grus">
                    <th>Название</th>
                    <th>Стомость, Руб</th>
                    <th>Количество, шт</th>
                    <th>Удалить</th>
                </tr>
                @foreach($cart as $item)
                <tr>
                    <td><a href="{{ route('showProduct', [$item->id]) }}">
                            {{$item->title}}
                        </a></td>
                    <td><div class="z666z">{{$item->price}}</td></div>
                    <td><div class="zz1122">{{$item->quantity}}</td></div>
                    <td><div class="rr99"> <a href="{{ route('delete', ['id' => $item->id]) }}"><img src="\image\delete.png" alt="" style="width: 40px"></a></td></div>
                </tr>
                @endforeach
                <tr>
                    <td>Общая стоимость </td>
                    <td> {{$sum}}₽</td>

                </tr>

            </table>
            <div class="back">
                <a href="/">Вернуться к покупкам</a>
            </div>

            <div class="end">
                <a class="end2" href="{{ route ('order') }}">Оформить заказ</a>
            </div>
            @else
            <div class="emptyCart goodsInCart"><p>Корзина пуста</p>
            <div class="back">
                <a href="/">Вернуться к покупкам</a>
            </div>
            @endif

</div>

@endsection



