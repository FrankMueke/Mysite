@extends('main'), 
@section('title', '|Create New Post')
@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
<h1>Create New Post</h1>
<hr>
<form action="/posts" method="POST">
    <div class="form-group">
        <label name="title">Title:</label>
        <input name="title" type="text" id="title" class="form-control" placeholder="Post Title" autocomplete="off">
        {{-- @error('title')<p style="color: red">{{ $message }}</p> @enderror >>>..Errors displayed under _messages --}}
    </div>
    <div class="form-group">
    <label name="slug">Slug:</label>
        <input name="slug" type="text" id="slug" class="form-control" placeholder="Post Slug" autocomplete="off" minlength="5" maxlength="255">
        {{-- @error('title')<p style="color: red">{{ $message }}</p> @enderror >>>..Errors displayed under _messages --}}
    </div>
  <div class="form-group">
      <label name="body">Body:</label>
      <textarea name="body" id="body" class="form-control" rows="10" placeholder="Type the body here..."></textarea>
      {{-- @error('body')<p style="color: red">{{ $message }}</p> @enderror --}}
  </div>
  <input type="submit" value="Create Post" class="btn btn-success btn-block btn-lg">
  @csrf
</form>
      </div>
  </div>
@endsection
