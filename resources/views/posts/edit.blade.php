@extends('main')
@section('title', '|Edit Blog Post')
@section('content')

<div class="row">

    <div class="col-md-8">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @method('PATCH')
            @csrf
        <div class="form-group">
            <label name="title">Title:</label>
        <input name="title" id="title" class="form-control input-group-lg" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label name="slug" class="form-spacing-top">Slug:</label>
        <input name="slug" id="slug" class="form-control" value="{{ $post->slug }}">
        </div>
        <div class="form-group">
            <label class="form-spacing-top"name="body">Body:</label>
        <textarea name="body" id="body" class="form-control input-group-lg" cols="30" rows="10">{{ $post->body }}</textarea>
        </div>
        
    
    </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                <dd>{{ date( 'M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                       
                    <a href="/posts/{{$post->id}}" class="btn btn-danger btn-block">Cancel</a>
                    </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Save changes</button> 
                </div>
    </form> 
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <a href="{{ route('posts.index')}}" class="btn btn-info btn-block btn-h1-spacing text-white"><< See All Posts</a>
                    </div>
                </div>
            </div>
  </div>
  @csrf
</div> <!--end of .row (form) -->
</div>
@endsection