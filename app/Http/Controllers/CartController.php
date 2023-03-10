<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addCart(Request $request)
    {

    $product = Product::query()->where(['id' => $request->id])->first();

    $sessionId = Session::getId();

    \Cart::session($sessionId)->add([
        'id' => $product->id,
        'title' => $product->title,
        'price' => $product->price,
        'quantity' => $request->qty ?? 1 ,

    ]);

    $cart = \Cart::getContent();

    return redirect()->back();
    }
    public function actionIndex()
    {
        $sessionId = Session::getId();

        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');



        return view('cart', ['cart' => $cart, 'sum' => $sum]);
    }
    public function deleteCart(Request $request)
    {


        $sessionId = Session::getId();
        \Cart::session($sessionId);


        $items =\Cart::getContent();

        foreach($items as $banz) {
            $banz->id; // the Id of the item
            $banz->title; // the name
            $banz->price; // the single price without conditions applied
            $banz->quantity; // the quantity
        }
        if ((($banz->quantity) == 1) and (($banz->id) == ($request->id))) {
            \Cart::session($sessionId)->remove($request->id);

        } else {
            \Cart::update($request->id, array(
                'quantity' => -1));
        }




        return redirect()->back();


    }
}
