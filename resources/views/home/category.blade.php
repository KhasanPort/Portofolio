@extends('layout.main')

@section('container')
    <div class="container m-auto pb-80">
        <div class="h-80 w-full bg-blue-300 my-5 px-4 py-2">
            Category {{$category[0]->category->title}}
        </div>
        <div class="flex flex-wrap gap-10 justify-center">
            @foreach ($category as $post)
                <div class="w-2/5 h-max bg-green-300">
                    <div class="border-2 relative">
                        <div class="absolute -left-3 -top-3 w-10 h-10 lg:w-20 lg:h-20 rounded-md bg-blue-500">
                            <img src="" alt="">
                        </div>
                        <h1 class="ml-10 lg:ml-24 border-b-2 border-black">
                            {{$post->title}}
                        </h1>
                        <h1 class="ml-10 lg:ml-28 border-b-2 border-black">
                            {{$post->category->title}}
                        </h1>
                    </div>
                    <div class="mt-10 px-4 py-2">
                        <p class="w-4/5 h-20 bg-blue-600 mt-2">{{$post->descript}}</p>
                        <img src="" alt="" srcset="" class="w-4/5 h-20 bg-blue-600 mt-2">
                    </div>
                    <div class="border-2 w-full h-max px-4">
                        <div class="w-full h-max bg-yellow-200 px-2 py-1">Rating</div>
                        <div class="flex flex-nowrap py-2 justify-around">
                            <div class="w-1/4 h-10 px-4 py-2 border-2 rounded-md"> </div>
                            <div class="w-1/4 h-10 px-4 py-2 border-2 rounded-md"> </div>
                            <div class="w-1/4 h-10 px-4 py-2 border-2 rounded-md"> </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection