@extends('layout.log')

@section('container')
    <form action="/login" method="post" class="px-20 py-10 grid bg-transparent backdrop-blur-md rounded-md shadow-lg text-white gap-y-3">
        <h1 class="w-full font-bold text-3xl text-blue-500 text-center">Login</h1>
        @csrf
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" class="text-black px-4 py-2 mt-2" placeholder="myemail@example.com" value="{{old('email')}}">
        
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" placeholder="🔐: password" class="px-4 py-2 mt-2" value="{{old('password')}}">

        <div class="w-full text-center mt-5">
            <button type="submit" class="bg-blue-500 rounded-md w-1/2 px-4 py-2 hover:bg-blue-800 transition duration-300">Login</button>
        </div>
        <p class="text-center">Have no account? <a href="/register" class="text-center text-blue-400 underline-offset-1">Register</a></p>
    </form>
@endsection