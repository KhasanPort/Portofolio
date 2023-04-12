@extends('layout.log')

@section('container')
        <form action="/register" method="post" class="px-20 py-10 grid bg-transparent backdrop-blur-md rounded-md shadow-lg text-white gap-y-3">
            <h1 class="w-full font-bold text-3xl text-blue-500 text-center">Register</h1>
            @csrf
            <div class="w-full h-1/3">
                <label for="username">Username</label>
                <label for="username"> : </label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 my-2 text-black" placeholder="username">
            </div>
            
            <div class="w-full h-1/3">
                <label for="email">Email</label>
                <label for="email"> : </label>
                <input type="text" name="email" id="email" class="w-full px-4 py-2 my-2 text-black" placeholder="email@example.com">
            </div>
            
            <div class="w-full h-1/3">
                <label for="password">Password</label>
                <label for="password"> : </label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 my-2 text-black" placeholder="🔐:password">
            </div>

            <div class="w-full text-center mt-5">
                <button type="submit" class="bg-blue-500 rounded-md w-1/2 px-4 py-2 hover:bg-blue-800 transition duration-300">Register</button>
            </div>
        </form>
@endsection