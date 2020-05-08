@extends('main')
@section('title', '| View Post')
@section('content')
<div class="row">
    <div class="col-md-8">
    <h1>{{ $post->title }}</h1>

    <p class="lead">{{ $post->body }}</p>
    </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label><b>Url:</b></label>
                    <p><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></p>
                </dl>
                <dl class="dl-horizontal">
                    <label><b>Created At:</b></label>
                <p>{{ date( 'M j, Y h:ia', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label><b>Last Updated:</b></label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                       
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-block">Edit Post</a>
                    </div>
                <div class="col-sm-6">
                
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block ">Delete the Post </button>
                    </form>
                </div>
                </div>

                </div>
                    <div class="row">
                        <div class="col-md-12">
                        <a href="{{ route('posts.index')}}" class="btn btn-info btn-block btn-h1-spacing text-white"><< See All Posts</a>
                        </div>
                    </div>
  </div>
</div>
</div>

@endsection