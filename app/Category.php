<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public static function getCategoriesList()
    {
      $cat = DB::table('categories')->select('name','id')->get();
      return $cat;


    }
}
