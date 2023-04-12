@extends('main')

@section('container')
    <div class="container pt-16">
        <div class="w-full h-screen px-4 py-2">
            <div class="iklan w-full h-20 flex justify-center items-center bg-yellow-200">
                Iklan Slot ZEUS
            </div>
            <div class="w-full h-min mt-10 flex flex-wrap justify-start items-start gap-y-1 relative">
                @foreach ($games as $game)
                    <div class="card w-1/2 h-40 border-4 px-2 py-1 box-border relative
                                md:w-60 md:flex md:m-2">
                        <img src="{{ $game->img }}" alt="{{ $game->name }}" title="{{ $game->name }}">
                        <h1 class="absolute bottom-0 w-full right-1 text-center">{{ $game->name }}</h1>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection





