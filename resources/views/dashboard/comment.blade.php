@extends('layout.dashboard')

@section('top')
    <div id="Tool"
        class="w-full px-4 py-2 lg:justify-center lg:items-center
lg:row-span-1 lg:col-span-10 bg-blue-500 lg:grid lg:grid-rows-3 lg:grid-cols-1">
        <div class="row-span-2 text-center font-bold text-white text-3xl">Comment Page</div>
        <div>
            <a href="/dashboard"
                class="bg-slate-100 rounded-md py-1 px-2 hover:text-slate-100 transition duration-300 border-2 hover:border-white text-blue-600 hover:bg-blue-600 hover:text-white flex items-end"><svg
                    xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-corner-down-left">
                    <polyline points="9 10 4 15 9 20"></polyline>
                    <path d="M20 4v7a4 4 0 0 1-4 4H4"></path>
                </svg> Back To Profile</a>
        </div>
    </div>
@endsection

@section('main')
@endsection
