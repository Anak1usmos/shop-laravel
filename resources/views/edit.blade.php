@extends('layouts.app')

@section('content')

    <div class="change">
        @if (session()->has('info'))
            <div class="alert alert-success">
                {{ session()->get('info') }}
            </div>
        @endif

        <div class="change2">
            <h2>Редактирование данных</h2>
            <form action="{{ route ('edit') }}" method="post">
                @csrf
                <label for="login"><b>Login</b></label>
                <input type="text" name="name" placeholder="Логин" value="">

                <input type="submit" name="submit" class="GG" value="Изменить">
        </div>


        </form>



    </div>
@endsection