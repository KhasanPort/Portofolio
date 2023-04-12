@extends('layout.dashboard')

@section('top')
    <div id="Tool"
        class="w-full px-4 py-2 lg:justify-center lg:items-center
lg:row-span-1 lg:col-span-10 bg-blue-500 lg:grid lg:grid-rows-3 lg:grid-cols-1">

        <div class="w-full h-full row-span-2 text-center text-white font-bold text-3xl">
            Users Page
        </div>
        <div class="flex no-wrap gap-10 w-full justify-end items-end">
            <form action="/user/add" method="post" class="w-full">
                @csrf
                <button type="submit"
                    class="border-4 px-4 py-2 bg-sky-600 font-bold text-white line tracking-widest hover:bg-blue-400">Create
                    New User</button>
            </form>
            <form action="/admin/users" method="get" class="w-full">
                <input type="search" name="search" id="search" placeholder="Search.." class="px-4 py-1 border-2 w-2/3">
                <button type="submit"
                    class="border-2 px-3 py-2 bg-sky-600 font-bold text-white line tracking-widest hover:bg-blue-400">Search</button>
            </form>
        </div>
    </div>
@endsection

@section('main')
    <style>
        .table {
            display: grid;
            grid-template-columns: 1fr 2fr 5fr 1fr 3fr 1fr 3fr;
        }

        .table-row:nth-child(even) {
            background: rgb(212, 212, 212);
        }
    </style>
    <div class="table table-head w-full bg-slate-300">
        <h1 class="text-center font-bold border-2 border-white px-2 py-1">No.</h1>
        <h1 class="text-center font-bold border-2 border-white px-2 py-1">Image</h1>
        <h1 class="text-center font-bold border-2 border-white px-2 py-1">Username</h1>
        <h1 class="text-center font-bold border-2 border-white px-2 py-1">Id</h1>
        <h1 class="text-center font-bold border-2 border-white px-2 py-1">Email</h1>
        <h1 class="text-center font-bold border-2 border-white px-2 py-1">Role</h1>
        <h1 class="text-center font-bold border-2 border-white px-2 py-1 flex justify-around">
            <span class="text-green-500 shadow-md"> Check </span>
            <span class="text-yellow-500 shadow-md"> Edit </span>
            <span class="text-red-500 shadow-md"> Delete </span>
        </h1>
    </div>
    @for ($i = 0; $i < count($users); $i++)
        <div class="table-row table my-2">
            <span class="border-2 px-2 py-1 overflow-auto text-center">{{ $i + 1 }}.</span>
            <img src="" alt="" class="border-2 px-2 py-1 overflow-auto">
            <h3 class="border-2 px-2 py-1 overflow-auto">{{ $users[$i]->username }}</h3>
            <h3 class="border-2 px-2 py-1 overflow-auto">{{ $users[$i]->id }}</h3>
            <h3 class="border-2 px-2 py-1 overflow-auto">{{ $users[$i]->email }}</h3>
            <h3 class="border-2 px-2 py-1 overflow-auto text-center">{{ $users[$i]->role }}</h3>
            {{-- <a href="/user/post/edit/{{ $users[$i]->id }}" class="border-2 px-2 py-1 flex justify-center items-center">
            <img src="/img/edit.svg" alt="">
        </a> --}}
            <div class="border-2 w-full px-2 py-1 flex gap-3 justify-center text-center target">
                <form action="/user/profile/{{ $users[$i]->id }}" method="post">
                    @csrf
                    <button type="submit">
                        <svg class="rounded-full border-2 px-1 box-content text-green-600 border-green-600 hover:text-white hover:bg-green-600 transition duration-500 Details"
                            title="Details" xmlns="http://www.w3.org/2000/svg" width="30" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-check">
                            <title>Check</title>
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                    </button>
                </form>

                <form action="/user/edit/{{ $users[$i]->id }}" method="post">
                    @csrf
                    <button type="submit">
                        <svg class="rounded-full border-2 px-1 box-content text-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-500 transition duration-500 Edit"
                            title="Edit" xmlns="http://www.w3.org/2000/svg" width="30" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-minus">
                            <title>Edit</title>
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </button>
                </form>

                <form action="/user/destroy/{{ $users[$i]->id }}" method="post"
                    onclick="confirm('Yakin mau di hapus bre?')">
                    @csrf
                    <button type="submit">
                        <svg class="rounded-full border-2 px-1 box-content text-red-600 border-red-600 hover:text-white hover:bg-red-600 transition duration-500 Delete"
                            title="Delete" xmlns="http://www.w3.org/2000/svg" width="30" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-x">
                            <title>Delete</title>
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="18" y1="8" x2="23" y2="13"></line>
                            <line x1="23" y1="8" x2="18" y2="13"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    @endfor
    {{-- <style>
        .admin-users {
            overflow: hidden;
            grid-template-columns: 1fr 2fr 5fr 2fr 3fr 3fr 1fr;
            grid-auto-rows: 40px;
        }


        .table-row:nth-child(even) {
            background: rgb(211, 208, 208)
        }
    </style>
    <div class="w-full lg:grid admin-users lg:grid-flow-rows lg:items-center lg:gap-3">
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold number ">No</div>
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold username ">Username</div>
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold id ">Id</div>
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold email ">Email</div>
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold password ">Password</div>
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold admin ">Admin</div>
        <div class="border-4 w-full px-2 py-1 text-center text-xl font-bold admin ">Target</div>
    </div>
    @for ($i = 0; $i < count($users); $i++)
    <div class="w-max lg:grid admin-users lg:grid-flow-rows lg:items-center lg:gap-3 table-row">
        <div class=" border-2 w-full px-2 py-1 number text-center">
            {{$i + 1}}
        </div>
        <div class=" border-2 w-full px-2 py-1 username">
            {{$users[$i]->username}}
        </div>
        <div class=" border-2 w-full px-2 py-1 id text-center">
            {{$users[$i]->id}}
        </div>
        <div class=" border-2 w-full px-2 py-1 email">
            {{$users[$i]->email}}
        </div>
        <div class=" border-2 w-full px-2 py-1 password overflow-auto">
            {{$users[$i]->password}}
        </div>
        <div class=" border-2 w-full px-2 py-1 admin text-center">
            {{$users[$i]->is_admin}}
        </div>
        <div class="border-2 w-full px-2 py-1 flex gap-3 justify-center text-center target">
            <form action="/user/profile/{{$users[$i]->id}}" method="post">
                @csrf
                <button type="submit">
                    <svg class="rounded-full border-2 px-1 box-content text-green-600 border-green-600 hover:text-white hover:bg-green-600 transition duration-500 Details" title="Details" xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </button>
            </form>

            <form action="/user/edit/{{$users[$i]->id}}" method="post">
                @csrf
                <button type="submit">
                    <svg class="rounded-full border-2 px-1 box-content text-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-500 transition duration-500 Edit" title="Edit" xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>                
                </button>
            </form>

            <form action="/user/destroy/{{$users[$i]->id}}" method="post" onclick="confirm('Yakin mau di hapus bre?')">
                @csrf
                <button type="submit">
                    <svg class="rounded-full border-2 px-1 box-content text-red-600 border-red-600 hover:text-white hover:bg-red-600 transition duration-500 Delete" title="Delete" xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg>
                </button>
            </form>
        </div>
    </div>
    @endfor --}}
@endsection
