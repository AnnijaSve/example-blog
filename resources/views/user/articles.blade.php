@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($user->articles as $article)
           <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
        @endforeach
    </div>
@endsection
