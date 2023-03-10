<?php

namespace App\Http\Controllers;

use\App\Product;
use App\Catalog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index()
    {

        $catalogList = DB::table('product')->select('title', 'price', 'id','image')->get();

        $categories = DB::table('categories')->select('name','id')->get();


        return view('catalog', compact('catalogList','categories'));
    }
    public function show($cat_id)
    {

        $cat = DB::table('product')->select('title','price','id','image')->where('category_id', '=', $cat_id)->get();


        return view('genre' ,compact('cat'));



    }
}
