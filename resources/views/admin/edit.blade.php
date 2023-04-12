@extends('layout.log')

@section('container')
    @foreach ($users as $user)
        <form action="/user/update" method="post" class="px-20 py-10 grid bg-transparent backdrop-blur-md rounded-md shadow-lg text-white gap-y-3">
            <h1 class="w-full font-bold text-3xl text-blue-500 text-center">Update</h1>
            @csrf
            <label for="username">Username : </label>
            <input type="username" name="username" id="username" class="text-black px-4 py-2 mt-2" placeholder="username" value="{{$user->username}}">

            <label for="email">Email : </label>
            <input type="email" name="email" id="email" class="text-black px-4 py-2 mt-2" placeholder="email" value="{{$user->email}}">
            
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" placeholder="🔐: password" class="px-4 py-2 mt-2">
            <div class="w-full text-center mt-5">
                <button type="submit" class="bg-blue-500 rounded-md w-1/2 px-4 py-2 hover:bg-blue-800 transition duration-300">Update</button>
            </div>
        </form>
    @endforeach
@endsection