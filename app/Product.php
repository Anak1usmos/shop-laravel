<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function getPopularProduct()
    {
        $Pop = DB::table('product')->select('title','price','id','image')->where('is_popular', '=', 1)->get();
        return $Pop;

    }
    public static function getNewProduct()
    {
        $New = DB::table('product')->select('title','price','id','image')->where('is_new', '=', 1)->get();
        return $New;

    }
    public static function getExpectProduct()
    {
        $Expect = DB::table('product')->select('title','price','id','image')->where('is_expect', '=', 1)->get();
        return $Expect;

    }
    public $table = "Product";

}
