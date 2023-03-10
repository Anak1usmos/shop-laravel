@extends('layouts.app')

@section('content')

<div class="sered">
    @if($messageSuccessOrder)
        <div>{{$messageSuccessOrder}}</div>
    @endif
        @error('phone')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
    <div class="checkoutF">

        <form action="{{ route('order/create') }}" method="post">
            @csrf
            <p>Ваше имя</p>
            <input type="text" name="name" placeholder="" value="{{$user->name}}"/>
            <br>
            <p>Номер телефона</p>
            <input type="text" name="phone" placeholder="" value=""/>
            <br>

            <p>Комментарий к заказу</p>
            <input type="text" name="comment" placeholder="" value=""/>
            <br>


            <input type="submit" name="submit" class="checkoutButton" value="Оформить" style="margin-top: 10px"/>
        </form>



    </div>




</div>
@endsection