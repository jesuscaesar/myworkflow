@extends('layout')

@section('content')

    <section class="jumbotron text-center">
        <p class="lead text-muted">
            <img width="85%" src="{{ $post->img }}">
        </p>
        <div class="container">
          <h2 class="jumbotron-heading">{{ $post->title }}</h2>
          <p class="lead text-muted">{{ $post->date }}</p>
        </div>
        <a href="{{ route('index') }}">Go Back</a>
    </section>
    <div class="container">
        <p class="lead text-muted">{{ $post->content }}</p>
    </div>

@endsection