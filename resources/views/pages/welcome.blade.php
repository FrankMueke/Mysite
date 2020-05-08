@extends('main')
@section('title', '|Homepage')
@section('content')

          <div class="row" style="margin-top: 40px;">
              <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome to my site!</h1>
                    <p class="lead">   This is the home news , sports. entertainment ans politics. This is the home news , sports. entertainment ans politics.</br>
                        Please check our latest posts here
                    .</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular  Posts </a>
                  </div>
              </div>
          </div><!--end of header .row -->
          <div class="row">
              <div class="col-md-8">
                @foreach($posts as $post)
                      <div class="post">
                          <h3>{{ $post->title }}</h3>
                      <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                      <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                      </div>
                <hr>
                @endforeach
              </div>
              <div class="col-md-3 col-md-offset-1">
                  <h2>Sidebar </h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
                    Duis aute irure dolor in reprehenderit </p>
                  </div>
          </div>
@endsection 
