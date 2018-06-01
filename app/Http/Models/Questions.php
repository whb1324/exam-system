<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Questions extends Model
{
    public function getQuestions($id)
    {
      $questions = DB::table('questions')
      ->where('category_id',$id)
      ->get();

      return $questions;

    }

}
