<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    public function getCategories()
    {
      $categories = DB::table('categories')
      ->orderBy('rank','asc')
      ->get();

      return $categories;

    }
}
