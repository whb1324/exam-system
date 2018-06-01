<html>
<head>
</head>

<body>

  @isset($questions)
  <form method="post" action="{{action('AnswersController@answers')}}">
    {{ csrf_field() }}
    @foreach($questions as $question)
      {{$question->question_title}}<br />
        @isset($answers)
          @foreach($answers as $answer)
            @if($question->id == $answer->question_id)
              <input type="radio" name="question_{{$question->id}}" value="{{$answer->answer_choice}}">{{$answer->answer_choice}}.{{$answer->answer_content}}<br />
            @endif
          @endforeach
        @endisset
    @endforeach
    <input type="submit">
  </form>
  @endisset

</body>


</html>
