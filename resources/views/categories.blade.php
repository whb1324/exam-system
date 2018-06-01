<html>
<head>
</head>

<body>

  @isset($categories)
  <ul>
    @foreach($categories as $category)
      <li><a href="{{action('QuestionsController@questions', ['id' => $category->id])}}">{{$category->category_name}}</li>
    @endforeach
  </ul>
  @endisset

</body>


</html>
