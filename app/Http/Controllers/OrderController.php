<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order() {
        $user = Auth::user();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();

        $messageSuccessOrder = \session('successOrder');


        if (!empty($messageSuccessOrder)) {

            return view('order' , [ 'user' => $user])->with('messageSuccessOrder', $messageSuccessOrder);
    }
        return view('order', [
            'user' => $user,


        ])->with('messageSuccessOrder', $messageSuccessOrder);
    }
    public function orderCreate(Request $request)
    {
        $user = Auth::user();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();

        $zend = $this->validate($request, [
            'phone' => 'required|min:3'
        ],[

            'phone.required' => 'Поле Телефон обязательно для заполнения',
            'phone.min' => 'Ваш номер должен состоять минимум из 3 цифр'
        ]);







        $order = new Order();

        $order->user_id = $user->id;

        $order->cart_data = $order->setCartDataAttribute($cart);

        $order->phone = $request->phone;

        $order->comment = $request->comment;


        if( $order->save()) {

            \Cart::clear();

            Session::flash('successOrder', 'Заказ успешно отправлен');

            return back();
        }

        Session::flash('errorOrder', 'Что-то пошло не так');

    }


}
