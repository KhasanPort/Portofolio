@extends('layout.index')

@section('container')
    <div class="container mx-auto">
        <div class="px-10 m-auto flex flex-wrap md:flex-nowrap w-full my-10 bg-white">
            <style>
                .slide[data-active] {
                    opacity: 1 !important;
                }
            </style>
            <div data-carausel
                class="carausel relative h-96 md:w-5/6 w-full mx-auto border-2 border-sky-500 shadow-lg rounded-md my-5 flex justify-center items-center">
                <button class="absolute left-0 top-1/2 z-20" data-carausel-button="prev">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="bg-slate-300 hover:text-sky-600 text-sky-800 rounded-full hover:bg-black" width="40"
                        height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 8 8 12 12 16"></polyline>
                        <line x1="16" y1="12" x2="8" y2="12"></line>
                    </svg>
                </button>
                <button class="absolute right-0 top-1/2 z-20" data-carausel-button="next">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="bg-slate-300 hover:text-sky-600 text-sky-800 rounded-full hover:bg-black" width="40"
                        height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 16 16 12 12 8"></polyline>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                </button>
                <ul data-slides>
                    <li class="slide w-full h-full absolute left-0 top-0 opacity-0 bg-blue-400" data-active>
                        <img src="https://images.alphacoders.com/131/thumbbig-1310038.webp" alt=""
                            class=" object-cover w-full h-full">
                    </li>
                    <li class="slide w-full h-full absolute left-0 top-0 opacity-0 bg-green-400">
                        <img src="https://images.alphacoders.com/131/thumbbig-1310028.webp" alt=""
                            class=" object-cover w-full h-full">
                    </li>
                    <li class="slide w-full h-full absolute left-0 top-0 opacity-0 bg-yellow-400">
                        <img src="https://images.alphacoders.com/131/thumbbig-1310040.webp" alt=""
                            class=" object-cover w-full h-full">
                    </li>
                    <li class="slide w-full h-full absolute left-0 top-0 opacity-0 bg-slate-400">
                        <img src="https://images6.alphacoders.com/131/thumbbig-1310039.webp" alt=""
                            class=" object-cover w-full h-full">
                    </li>
                    <li class="slide w-full h-full absolute left-0 top-0 opacity-0 bg-ungu-400">
                        <img src="https://images2.alphacoders.com/131/thumbbig-1310034.webp" alt=""
                            class=" object-cover w-full h-full">
                    </li>
                    <li class="slide w-full h-full absolute left-0 top-0 opacity-0 bg-ungu-400">
                        <img src="https://images5.alphacoders.com/131/thumbbig-1310027.webp" alt=""
                            class=" object-cover w-full h-full">
                    </li>
                </ul>
            </div>
            <section class="w-full md:w-1/2 border-4 bg-white">
                <div class="user flex px-4 flex-wrap">
                    <div class="relative rounded-md w-full flex justify-start items-center">
                        <div
                            class="w-14 mt-4 1/6 h-14 md:w-20 md:h-20 rounded-md border-2 border-sky-500 shadow-lg bg-transparent backdrop-blur-md flex justify-center items-center">
                            <img src="/storage/{{ $post->user->image }}" alt="">
                        </div>
                        <div class="w-4/6">
                            <h1 class="w-max ml-10 md:ml-24 border-b-2 border-sky-500">
                                {{ $post->user->username }}
                            </h1>
                            <h1 class="w-2/3 ml-14 md:ml-28 border-b-2 border-sky-500">
                                {{ $post->category->title }}
                            </h1>
                        </div>
                    </div>
                    <div class="detail w-full px-4 py-2 my-4 h-80">
                        <p>{!! $post->descript !!}</p>
                    </div>
                    <div class="flex items-center justify-end sm:justify-center gap-0 flex-wrap md:flex-nowrap">
                        <!-- {/* Youtube */} -->
                        <a href="#" target="_blank"
                            class="scale-75 w-1/6 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="p-4 scale-125 transition duuration-300 box-content fill-current" width="30">
                                <title>YouTube</title>
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank"
                            class="scale-75 w-1/6 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="p-4 scale-125 transition duration-300 box-content fill-current" width="30">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank"
                            class="scale-75 w-1/6 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="p-4 scale-125 transition duuration-300 box-content fill-current" width="30">
                                <title>WhatsApp</title>
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank"
                            class="scale-75 w-1/6 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="p-4 scale-125 transition duuration-300 box-content fill-current" width="30">
                                <title>Facebook</title>
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank"
                            class="scale-75 w-1/6 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="p-4 scale-125 transition duuration-300 box-content fill-current" width="30">
                                <title>Twitter</title>
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>

                        <a href="#" target="_blank"
                            class="scale-75 w-1/6 rounded-full flex justify-center items-center border border-secondary hover:bg-black hover:border-black hover:text-white transition duration-300 opacity-70 hover:opacity-100">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="p-4 scale-125 transition duuration-300 box-content fill-current" width="30">
                                <title>TikTok</title>
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                    </div>
                    <div class="button-group pb-10 w-full translate-x-5">
                        <button type="submit"
                            class="px-4 text-xl py-2 text-blue-600 hover:text-white bg-white border-blue-600 hover:bg-blue-600 hover:border-white rounded-full w-2/3 border-2 font-bold transition duration-300">
                            Chat Penjual
                        </button>
                        <button type="submit"
                            class="px-4 text-xl py-2 text-blue-600 hover:text-white bg-white border-blue-600 hover:bg-blue-600 hover:border-white rounded-full w-1/5 border-2 font-bold transition duration-300">
                            Beli
                        </button>
                    </div>
                </div>
            </section>
        </div>
        <div class="comment mx-auto w-full h-max max-h-screen overflow-y-auto overflow-x-hidden px-4 py-2 my-20 bg-white">
            @if (isset($comments))
                @foreach ($comments as $item)
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
                <div class="w-full h-max px-4 py-2 border-4 border-slate-400 text-slate-400 text-center">
                    Belum Ada Comment
                </div>
            @endif
        </div>
        @if (isset($post_user))
            <h1 class="w-full border-y-2 ml-5 px-4 py-2 text-xl bg-white"> Mungkin Anda Suka</h1>
            <div class="w-full lg:h-80 h-56 border-4 flex flex-nowrap gap-4 text-white ml-4 border-y-2 mb-10">
                @foreach ($posts_user as $item)
                    <div class="card w-40 h-full bg-black relative overflow-hidden ml-1">
                        <img src="/storage/{{ $item->image }}" alt=""
                            class="absolute right-0 bottom-0 top-0 left-0 w-full h-full object-cover">
                        <div class="absolute bottom-1 z-10 rounded-md w-full flex justify-start items-center m-1">
                            <div
                                class="w-14 mt-4 1/6 h-14 md:w-20 md:h-20 rounded-md border-2 border-sky-500 shadow-lg bg-transparent backdrop-blur-md flex justify-center items-center">
                                <img src="/storage/{{ $post->user->image }}" alt="">
                            </div>
                            <div class="w-4/6">
                                <h1 class="ml-1 w-max border-b-2 border-sky-500">
                                    {{ $post->user->username }}
                                </h1>
                                <h1 class="w-2/3 ml-1 md:ml-28 border-b-2 border-sky-500">
                                    {{ $post->category->title }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if (isset($category))
            <h1 class="w-full border-y-2 ml-5 px-4 py-2 text-xl bg-white"> Mungkin Anda Suka Category
                {{ $post->category->title }}</h1>
            <div class="w-full lg:h-80 h-56 border-4 flex flex-nowrap gap-4 text-white ml-4 border-y-2 mb-10">
                @foreach ($category as $item)
                    <div class="card w-40 h-full bg-black relative overflow-hidden ml-1">
                        <img src="/storage/{{ $item->image }}" alt=""
                            class="absolute right-0 bottom-0 top-0 left-0 w-full h-full object-cover">
                        <div class="absolute bottom-1 z-10 rounded-md w-full flex justify-start items-center m-1">
                            <div
                                class="w-14 mt-4 1/6 h-14 md:w-20 md:h-20 rounded-md border-2 border-sky-500 shadow-lg bg-transparent backdrop-blur-md flex justify-center items-center">
                                <img src="/storage/{{ $post->user->image }}" alt="">
                            </div>
                            <div class="w-4/6">
                                <h1 class="ml-1 w-max border-b-2 border-sky-500">
                                    {{ $post->user->username }}
                                </h1>
                                <h1 class="w-2/3 ml-1 md:ml-28 border-b-2 border-sky-500">
                                    {{ $post->category->title }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if (isset($search))
            <h1 class="w-full border-y-2 ml-5 px-4 py-2 text-xl bg-white"> Mungkin Anda Suka </h1>
            <div class="w-full lg:h-80 h-56 border-4 flex flex-nowrap gap-4 text-white ml-4 border-y-2 mb-10">
                @foreach ($search as $item)
                    <div class="card w-40 h-full bg-black relative overflow-hidden ml-1">
                        <img src="/storage/{{ $item->image }}" alt=""
                            class="absolute right-0 bottom-0 top-0 left-0 w-full h-full object-cover">
                        <div class="absolute bottom-1 z-10 rounded-md w-full flex justify-start items-center m-1">
                            <div
                                class="w-14 mt-4 1/6 h-14 md:w-20 md:h-20 rounded-md border-2 border-sky-500 shadow-lg bg-transparent backdrop-blur-md flex justify-center items-center">
                                <img src="/storage/{{ $post->user->image }}" alt="">
                            </div>
                            <div class="w-4/6">
                                <h1 class="ml-1 w-max border-b-2 border-sky-500">
                                    {{ $post->user->username }}
                                </h1>
                                <h1 class="w-2/3 ml-1 md:ml-28 border-b-2 border-sky-500">
                                    {{ $post->category->title }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script>
        const buttons = document.querySelectorAll('[data-carausel-button]')

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const offset = button.dataset.carauselButton === "next" ? 1 : -1
                const slides = button
                    .closest('[data-carausel]')
                    .querySelector('[data-slides]')

                const activeSlide = slides.querySelector('[data-active]')
                let newIndex = [...slides.children].indexOf(activeSlide) + offset
                if (newIndex < 0) newIndex = slides.children.length - 1
                if (newIndex >= slides.children.length) newIndex = 0

                slides.children[newIndex].dataset.active = true
                delete activeSlide.dataset.active
            })
        });
    </script>
@endsection
