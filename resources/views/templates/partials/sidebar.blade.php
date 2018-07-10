@if ($tags->count())

  <h3> Tags </h3>

  @foreach($tags as $tag)
    <a href = "#" class "tag">{{$tag->name}}</a>
  @endforeach

@endif
