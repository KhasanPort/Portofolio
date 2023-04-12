@extends('layout.log')

@section('container')
        <form action="/register" method="post" class="px-20 py-10 grid bg-transparent backdrop-blur-md rounded-md shadow-lg text-slate-700 gap-y-1">
            <h1 class="w-full font-bold text-3xl text-blue-500 text-center">Register</h1>
            @csrf
            <div class="w-full h-1/4">
                <label for="username">Username</label>
                <label for="username"> : </label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 my-2 text-black" placeholder="username">
            </div>
            
            <div class="w-full h-1/4">
                <label for="email">Email</label>
                <label for="email"> : </label>
                <input type="text" name="email" id="email" class="w-full px-4 py-2 my-2 text-black" placeholder="email@example.com">
            </div>
            
            <div class="w-full h-1/4">
                <label for="password">Password</label>
                <label for="password"> : </label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 my-2 text-black" placeholder="🔐:password">
            </div>

            <div class="w-full h-1/4">
                <label for="confirm-password">Confirm Password</label>
                <label for="confirm-password"> : </label>
                <input type="password" name="confirm-password" id="confirm-password" class="w-full px-4 py-2 my-2 text-black" placeholder="🔐:confirm password">
            </div>

            <div class="w-full text-center mt-5">
                <button type="submit" class="bg-white border-blue-600 hover:border-white border-2 hover:text-white font-bold rounded-md w-1/2 px-4 py-2 hover:bg-blue-600 transition duration-300">Register</button>
            </div>
            <p class="text-center pt-2">Have Account? <a href="/login" class="text-center text-blue-400 underline-offset-1">Login</a></p>
        </form>
@endsection