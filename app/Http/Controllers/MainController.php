<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $PopularProducts = Product::getPopularProduct();

        $NewProducts = Product::getNewProduct();
        $ExpectProducts = Product::getExpectProduct();

        return view('mainpage', compact('PopularProducts', 'NewProducts', 'ExpectProducts'));


    }
    public function about()
    {


    return view('about');
    }
    public function support()
    {

        return view('support');
    }
    public function insert(Request $request)
    {
        $name = $request->input('question');
        DB::insert('insert into supports (support) values(?)',[$name]);
        echo "Спасибо за вопрос </br>";
        echo '<a href = "/support">Нажмите здесь</a> чтобы вернуться назад.';


    }
    public function show($id)
    {
        $item = Product::where('id', $id)->first();


        $charakt = DB::table('action')->join('properties', 'action.property_id', '=', 'properties.id')->where('product_id', $id)->get();

        return view('product' ,[
            'item' => $item,
            'charakt' => $charakt,
        ]);


    }

}
