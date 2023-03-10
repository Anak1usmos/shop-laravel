@extends('layouts.app')

@section('content')


<div class="supp">
    <p>Введите свой вопрос:</p>
    <form action="support/create" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <p><textarea name="question"></textarea></p>
        <div class="knopka2">

            <input type="submit" name="submit2" class="GG2" value="Отправить">
    </form>


</div>
@endsection