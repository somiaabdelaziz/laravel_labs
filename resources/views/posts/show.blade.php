@extends('site_layouts.app')
@section('content')
<ul class="list-group">
  <li class="list-group-item">The id is {{$id}}</li>
  <li class="list-group-item">Title is {{$title}}</li>
  <li class="list-group-item">The description is {{$description}}</li>
  <li class="list-group-item">the post has created at {{$created_at}}</li>
  <li class="list-group-item">the post has updated at {{$updated_at}}</li>
  <li class="list-group-item"><a href="/posts">Back</a></li>
</ul>
</body>
</html>
@endsection