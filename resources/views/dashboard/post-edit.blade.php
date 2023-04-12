@extends('layout.dashboard')

@section('top')
    <div id="Tool" class="w-full px-4 py-2 lg:justify-center lg:items-center
        lg:row-span-1 lg:col-span-10 bg-blue-500 lg:grid lg:grid-rows-3 lg:grid-cols-1">
        <div class="row-span-2"></div>
        <div class="flex justify-between">
            <a href="/user/posts" class="bg-slate-100 rounded-md py-1 px-2 hover:text-slate-100 transition duration-300 border-2 hover:border-white text-blue-600 hover:bg-blue-600 hover:text-white flex items-end"><svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg> Back To Posts</a>
            <form action="/user/post/destroy" method="post">
                @csrf
                <input type="hidden" name="destroy" value="{{$post->id}}">
                <button type="submit" onclick="confirm('Delete?')" class="bg-slate-100 rounded-md py-1 px-2 hover:text-slate-100 transition duration-300 border-2 hover:border-white text-red-600 hover:bg-red-400 hover:text-white font-bold">Delete Post</button>
            </form>
        </div>
    </div>
@endsection

@section('main')
    <style>
        .col {
            display: grid;
            grid-template-columns: 3fr 1fr 10fr;
        }
    </style>
    @if (isset($post->image))
        <img src="/storage/{{$post->image}}" alt="">
    @endif
    <form action="/user/post/update" method="post" class="grid w-full px-4 py-2 gap-4 bg-slate-100 rounded-md">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        <div class="w-full col shadow px-4 py-2">
            <label for="title">Title</label>
            <label for="title"> : </label>
            <input type="text" class="border border-slate-300 py-1 px-2" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="w-full col shadow px-4 py-2">
            <label for="descript">Descript</label>
            <label for="descript"> : </label>
            <div>
                <input type="hidden" name="descript" id="descript" value="{{$post->descript}}">
                <trix-editor input="descript"></trix-editor>
            </div>
        </div>
        <div class="w-full col shadow px-4 py-2">
            <label for="category_id">Category</label>
            <label for="category_id"> : </label>
            <select name="category_id" id="category_id" class="border border-slate-300 py-1 px-2" @required(true)>
                <option value="1" @if(old('category_id')) @selected(true) @endif>Tools</option>
                <option value="2" @if(old('category_id')) @selected(true) @endif>Foods</option>
                <option value="3" @if(old('category_id')) @selected(true) @endif>Materials</option>
                <option value="4" @if(old('category_id')) @selected(true) @endif>Wood</option>
                <option value="5" @if(old('category_id')) @selected(true) @endif>Decorative</option>
                <option value="6" @if(old('category_id')) @selected(true) @endif>Plastic</option>
                <option value="7" @if(old('category_id')) @selected(true) @endif>Transportasion</option>
                <option value="8" @if(old('category_id')) @selected(true) @endif>Drawwing</option>
                <option value="9" @if(old('category_id')) @selected(true) @endif>Full Color</option>
            </select>
        </div>
        <div class="w-full col shadow px-4 py-2">
            <label for="price">Price</label>
            <label for="price"> : </label>
            <input type="number" name="price" id="price" min="500" @required(true)
                class="border border-slate-300 py-1 px-2" value="{{$post->price}}">
        </div>
        <div class="w-full col shadow px-4 py-2">
            <label for="file">File</label>
            <label for="file"> : </label>
            <input type="file" name="img" id="img">
        </div>
        <div class="text-end">
            <button type="submit"
                class="px-4 py-1 text-blue-600 border-blue-500 border mr-10 text-xl rounded-md font-bold hover:text-white transition duration-300 hover:bg-blue-600">Update</button>
        </div>
    </form>
@endsection
