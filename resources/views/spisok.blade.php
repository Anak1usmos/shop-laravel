@extends('layouts.app')

@section('content')


<div class="cart">
    <div class="cart2">



        <p>Вы приобрели следующие товары:</p>
        <table class="goodsInCart">
            <tr class="grus">
                <th>ID</th>
                <th>Название</th>
                <th>Стомость, Руб</th>
                <th>Количество, шт</th>
            </tr>
        @foreach($orders as $order)
            @foreach($order->cart_data as $cart_data)
            <tr>
                <td>{{$cart_data['id']}}</td>
                <td>{{$cart_data['title']}}</td>
                <td>{{$cart_data['price']}}</td>
                <td>{{$cart_data['quantity']}}</td>




            </tr>
            @endforeach
        @endforeach




        </table>

    </div>
</div>
@endsection