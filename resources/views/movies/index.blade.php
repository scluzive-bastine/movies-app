@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    @if($loop->index < 10)
                        <x-movie-card :movie="$movie" :genres="$genres"/>
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                @if($loop->index < 10)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endif
            @endforeach
              {{-- {{$movie['genres']}} --}}
            </div>
        </div>
    </div>

@endsection

