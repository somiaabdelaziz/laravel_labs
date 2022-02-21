@extends('site_layouts.app')

@section('content')
    <a href="posts/create">Add post</a>
    <!-- <div class="container mt-5"> -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($posts as $post)
    <tr>
      <th scope="row">{{ $post['id'] }}</th>
      <td>{{ $post->user->name }}</td>
      <td>{{ $post->user->email }}</td>
      <td>{{ $post['title'] }}</td>
      <td>{{ $post['description'] }}</td>
      <td>{{ $post['created_at'] }}</td>
      <td>{{ $post['updated_at'] }}</td>
      <td><a href="/posts/{{$post['id']}}">Show</a></td>
      <td><a href="/posts/{{$post['id']}}/edit">Edit</a></td>
   <td>
     <form action="/posts/{{ $post->id}}" method="post">
       @csrf
       @method('DELETE')
       <input type="submit" name="delete" value="Delete">
</form>
</td>
    </tr>
    @endforeach
  </tbody>

</table>
<div class="d-flex justify-content-center">
    {!! $posts->links() !!}
</div>
<!-- </div> -->

@endsection