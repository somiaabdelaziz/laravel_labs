@extends('site_layouts.app')
@section('content')
<form method="post" action="/posts/{{$id}}">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="number" class="form-control" name="id" value="{{$id}}" value="{{ old('title') }}">
   </div>
   <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{$title}}" value="{{ old('title') }}">
   </div>
   <div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{$description}}" value="{{ old('title') }}">
   </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('shared.errors')

@endsection