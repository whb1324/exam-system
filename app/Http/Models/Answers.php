<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Answers extends Model
{
  public function getAnswers($id)
  {
    $answers = DB::table('answers')
    ->join('questions','answers.question_id','=','questions.id')
    ->where('questions.category_id',$id)
    ->get();

    return $answers;

  }

  public function getRightAnswers($id)
  {
    $right_answer = DB::table('answers')
    ->join('questions','answers.question_id','=','questions.id')
    ->where(
      [
        ['questions.category_id','=', $id],
        ['right_answer','=', 1]
      ]
    )
    ->get();

    return $right_answer;

  }

}
