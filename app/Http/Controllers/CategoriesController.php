<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }

    public function categories()
    {
      $Categories = new Categories();
      $categories = $Categories->getCategories();

      return view('categories',['categories' => $categories]);
    }
}
