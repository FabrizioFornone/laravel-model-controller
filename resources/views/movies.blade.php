@extends('layout.home')

@section('content')
<div class="card-row container d-flex">
    @foreach ( $movies as $movie )
    <div class="card-box">
        <div class="single-card">
            <a href="#">
                <img src="{{ $movie['thumb'] }}" alt="" />
            </a>
        </div>
        <div class="series">{{ $movie['series'] }}</div>
    </div>
    @endforeach
</div>
@endsection