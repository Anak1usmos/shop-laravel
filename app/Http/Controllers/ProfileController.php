<?php

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $qew = DB::table('users')->select('id', 'name')->get();



        return view('profile', compact('qew'),['user' => $user]);
    }
    public function getEdition()
    {

        return view('edit');
    }
    public function postEdition(Request $request)
    {
        $this->validate($request, [
            'name' => 'alpha|max:50',


        ]);
        Auth::user()->update([
            'name' => $request->input('name'),



        ]);

        return redirect()
            ->route('edit')
            ->with('info','Профиль изменён');
    }
    public function spisok()
    {
        $user = Auth::user();

        $orders = Order::query()->where(['user_id' => $user->getAuthIdentifier()])->get();

        $orders->transform(function ($order) {
            $order->cart_data = unserialize($order->cart_data);

        return $order;

        });
        return view('spisok', ['orders' => $orders]);
    }





}
