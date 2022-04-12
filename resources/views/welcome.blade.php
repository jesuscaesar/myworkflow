@extends('layout')

@section('content')

          <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" src="{{ $post->img }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>{{ $post->title }}</b></p>
                  <p class="card-text">{{ $post->description }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{ route('show', ['post' => $post->slug]) }}">View</a>
                    </div>
                    <div class="btn-group">
                      <a href="/">Edit</a>
                    </div>
                    <small class="text-muted"><p class="card-text">{{ $post->date }}</p></small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

@endsection