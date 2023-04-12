@extends('layout.main')
@section('container')
    <div class="hero slide-y flex flex-nowrap w-max overflow-x-auto">
        <div class="slide-x w-full h-screen bg-blue-200"></div>
        <div class="slide-x w-full h-screen bg-black"></div>
        <div class="slide-x w-full h-screen bg-green-900"></div>
    </div>
    <div class="cards w-full h-screen flex justify-center items-center">
        <div class="card w-40 h-64 bg-blue-500 rounded-md -rotate-1 absolute z-0 "></div>
        <div class="card w-40 h-64 bg-red-500 rounded-md -rotate-6 absolute z-0"></div>
        <div class="card w-40 h-64 bg-yellow-500 rounded-md -rotate-12 absolute z-0"></div>
        <div class="card w-40 h-64 bg-green-500 rounded-md -rotate-45 absolute z-0"></div>
        <div class="card text-white shadow-lg w-64 h-96 py-20 px-5 rounded-md absolute z-0">
            Adi Akhmad Khasan
        </div>
    </div>
    <div class="flex">
        
    </div>
@endsection