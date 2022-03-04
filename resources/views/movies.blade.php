@extends('layout.home')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center flex-wrap">
        @foreach ($movies as $movie )
        <div class="movie-card d-flex align-items-center m-2 col-5">
            <div>
                <h2 class="p-2">Title: {{ $movie->title }}</h2>
                <h3 class="p-2">Original Title: {{ $movie->original_title }}</h3>
                <h4 class="p-2">Nationality: {{ $movie->nationality }}</h4>
                <h4 class="p-2">Date: {{ $movie->date }}</h4>
                <h4 class="p-2">Vote: {{ $movie->vote }}</h4>
            </div>
            <div class="loop-index">
               Loop Index: {{$loop->index}}
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection