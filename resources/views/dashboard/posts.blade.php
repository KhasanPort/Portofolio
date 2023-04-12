@extends('layout.dashboard')

@section('top')
    <div id="Tool"
        class="w-full px-4 py-2 lg:justify-center lg:items-center
lg:row-span-1 lg:col-span-10 bg-blue-500 lg:grid lg:grid-rows-3 lg:grid-cols-1">

        <div class="w-full h-full row-span-2 text-white font-bold text-3xl flex justify-center items-center">
            Post Page
        </div>
        <div class="flex no-wrap gap-10 w-full justify-end items-end">
            <form action="/user/post/add" method="get" class="w-full">
                @csrf
                <button type="submit"
                    class="border-4 px-4 py-2 bg-blue-600 font-bold text-white line tracking-widest hover:bg-white hover:text-blue-600 transition duration-300">Create
                    New Post</button>
            </form>
            <div class="filter mb-1 flex text-slate-200 px-2 py-1 rounded-md  hover:scale-110 transition duration-300"
                onclick="setToggle(document.querySelector('.filter'), 'bg-white', 'text-blue-600')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-filter">
                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                </svg>
                <button onclick="" class="cursor-pointer transition duration-300">Filter</button>

            </div>
            <form action="/user/posts" method="get" class="w-full">
                <input type="search" name="search" id="search" placeholder="Search.." class="px-4 py-1 border-2 w-2/3">
                <button type="submit"
                    class="border-2 w-max px-3 py-2 bg-blue-600 font-bold text-white line tracking-wider hover:bg-white hover:text-blue-600 transition duration-300">Search</button>
            </form>
        </div>
    </div>
@endsection

@section('main')
    <style>
        .table {
            display: grid;
            grid-template-columns: 1fr 2fr 5fr 2fr 3fr 3fr 1fr;
        }

        .table-row {
            display: grid;
            grid-template-columns: 1fr 2fr 5fr 2fr 3fr 3fr 1fr;
        }

        .table-row:nth-child(even) {
            background: rgb(212, 212, 212);
        }
    </style>
    <div class="table table-head w-full bg-slate-300">
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">No.</h1>
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">Image</h1>
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">Title</h1>
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">Price</h1>
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">Create</h1>
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">Update</h1>
        <h1 class="text-center font-bold border-2 border-white px-4 py-2">Edit</h1>
    </div>
    @for ($i = 0; $i < count($posts); $i++)
        <a href="/user/post?id={{ $posts[$i]->id }}" class="table-row my-2">
            <span class="border-2 px-2 py-1 text-center">{{ $i + 1 }}.</span>
            <img src="" alt="" class="border-2 px-2 py-1">
            <h3 class="border-2 px-2 py-1">{{ $posts[$i]->title }}</h3>
            <h3 class="border-2 px-2 py-1">{{ $posts[$i]->price }}</h3>
            <h3 class="border-2 px-2 py-1">{{ $posts[$i]->created_at }}</h3>
            <h3 class="border-2 px-2 py-1">{{ $posts[$i]->updated_at }}</h3>
            <form method="get" action="/user/post/edit/{{ $posts[$i]->id }}"
                class="border-2 px-2 py-1 flex justify-center items-center hover:text-blue-600 transition duration-300">
                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg></button>
            </form>
        </a>
    @endfor
@endsection
