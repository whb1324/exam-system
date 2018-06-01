<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Questions;
use App\Http\Models\Answers;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct()
    {
    }

    public function questions(Request $request,$id)
    {
      $Questions = new Questions();
      $Answers = new Answers();
      $questions = $Questions->getQuestions($id);
      $answers = $Answers->getAnswers($id);
      $right_answer = $Answers->getRightAnswers($id);
      dd($answers);

      return view('questions',
      [
        'questions' => $questions,
        'answers' => $answers
      ]);
    }
}
