@extends('layout.dashboard')

@section('top')
    <div class="lg:row-span-1 lg:col-span-10 bg-blue-500 flex flex-wrap px-4 py-2 items-end">
        <h1 class="w-full text-center font-bold text-3
        xl text-white">Your Post</h1>
        <div
            class="h-max w-max p-1 flex gap-3 justify-center items-center bg-white rounded-md hover:bg-blue-500 transition duration-500">
            <div
                class="border-2 border-blue-500 h-max w-max px-2 py-1 flex gap-3 justify-center items-center bg-white rounded-md hover:border-white hover:bg-blue-500 transition duration-500">
                <a href="/user/posts"
                    class="bg-slate-100 rounded-md py-1 px-2 hover:text-slate-100 transition duration-300 border-2 hover:border-white text-blue-600 hover:bg-blue-600 hover:text-white flex items-end"><svg
                        xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-corner-down-left">
                        <polyline points="9 10 4 15 9 20"></polyline>
                        <path d="M20 4v7a4 4 0 0 1-4 4H4"></path>
                    </svg> Back To Posts</a>

                <form action="/post/edit/{{ $post[0]->id }}" method="post">
                    @csrf
                    <button type="submit">
                        <svg class="rounded-full border-2 px-1 box-content text-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-500 transition duration-500"
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

                <form action="/user/post/destroy" method="post" onclick="confirm('Yakin mau di hapus bre?')">
                    @csrf
                    <input type="hidden" name="id" value="{{ $post[0]->id }}">
                    <button type="submit">
                        <svg class="rounded-full border-2 px-1 box-content text-red-600 border-red-600 hover:text-white hover:bg-red-600 transition duration-500"
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
    </div>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="px-10 m-auto flex w-full my-10 bg-white">
            <section class="w-1/2 border-4 flex justify-center items-center">
                <img src="/img/user-x.svg" alt="">
                <img src="/img/user-x.svg" alt="">
                Carausel
                <img src="/img/user-x.svg" alt="">
                <img src="/img/user-x.svg" alt="">
            </section>
            <section class="w-1/2 border-4 bg-white">
                <div class="user flex px-4 flex-wrap">
                    <img src="" alt="" class="mx-4 w-10 h-10 lg:w-20 lg:h-20">
                    <div class="user-info flex flex-wrap gap-2 py-2">
                        <h1 class="w-full text-lg">{{ $post[0]->user->username }}</h1>
                        {{-- <h2 class="w-full text-sky-500">{{ $post[0]->category->title }}</h2> --}}
                    </div>
                    <div class="detail w-full px-4 py-2 my-4 h-80">
                        <p>{!! $post[0]->descript !!}</p>
                    </div>
                    <div class="button-group pb-10 w-full translate-x-5">
                        <button type="submit"
                            class="px-4 text-xl py-2 text-blue-600 hover:text-white bg-white border-blue-600 hover:bg-blue-600 hover:border-white rounded-full w-2/3 hover:opacity-75 border-2 font-bold transition duration-300"
                            disabled>
                            Chat Penjual
                        </button>
                        <button type="submit"
                            class="px-4 text-xl py-2 text-blue-600 hover:text-white bg-white border-blue-600 hover:bg-blue-600 hover:border-white rounded-full w-1/5 hover:opacity-75 border-2 font-bold transition duration-300"
                            disabled>
                            Beli
                        </button>
                    </div>
                </div>
            </section>
        </div>
        <div
            class="comment container mx-auto w-full h-max max-h-screen overflow-y-auto overflow-x-hidden px-4 py-2 my-20 bg-white">
            @if (isset($posts))
                @foreach ($posts as $item)
                    <div class="w-full px-4 py-2 border-2 rounded-md">
                        <div class="relative bg-gradient-to-b from-teal-200 to-white rounded-md mt-2">
                            <div
                                class="absolute -left-3 -top-3 w-10 h-10 lg:w-20 lg:h-20 rounded-md border-2 border-black shadow-lg bg-transparent backdrop-blur-md flex justify-center items-center">
                                <img src="/img/user-plus.svg" alt="">
                            </div>
                            <h1 class="ml-10 lg:ml-24 border-b-2 border-black">
                                {{ $item->user->username }}
                            </h1>
                            <h1 class="ml-10 lg:ml-28 border-b-2 border-black">
                                {{ $item->user->is_admin }}
                            </h1>
                        </div>
                        <div class="comment-body w-full mt-5 px-4 py-2 ml-14">
                            <p>{{ $item->comment }}</p>
                        </div>
                        <div class="link-group flex justify-between">
                            <a href="" class="w-max text-blue-400 font-bold ml-10 text-lg">Balasan</a>
                            <div class="mr-10 flex gap-5">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="like{{ $item->id }} transition-none"
                                        onclick="setClass(document.querySelector('.like{{ $item->id }}'), 'fill-black', 'text-slate-300')"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                </button>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        onclick="setClass(document.querySelector('.dislike{{ $item->id }}'), 'fill-black', 'text-slate-300')"
                                        class="dislike{{ $item->id }} transition-none" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-thumbs-down">
                                        <path
                                            d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="w-full h-max px-4 py-2 border-4 border-slate-400 text-slate-500 font-bold text-center">
                    no Comment
                </div>
            @endif
        </div>
    </div>
@endsection
