@extends('layout.index')

@section('container')
    <div class="container m-auto pb-80">
        {{-- <div class="h-80 w-full border-2 border-sky-500 shadow-lg rounded-md my-5 flex justify-center items-center">
            Carausel
        </div> --}}
        <style>
            .slide[data-active] {
                opacity: 1 !important;
            }
        </style>
        <div data-carausel
            class="carausel relative h-96 md:w-5/6 w-full mx-auto border-2 border-sky-500 shadow-lg rounded-md my-5 flex justify-center items-center">
            <button class="absolute left-0 top-1/2 z-20" data-carausel-button="prev">
                <svg 
                    xmlns="http://www.w3.org/2000/svg" class="bg-slate-300 hover:text-sky-600 text-sky-800 rounded-full hover:bg-black" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-left-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 8 8 12 12 16"></polyline>
                    <line x1="16" y1="12" x2="8" y2="12"></line>
                </svg> 
            </button>
            <button class="absolute right-0 top-1/2 z-20" data-carausel-button="next"> 
                <svg
                    xmlns="http://www.w3.org/2000/svg" class="bg-slate-300 hover:text-sky-600 text-sky-800 rounded-full hover:bg-black" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right-circle">
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
        <div class="flex flex-wrap gap-10 justify-center">
            @foreach ($posts as $post)
                <a href="/post?post={{ $post->id }}&&category={{ $post->category_id }}&&user={{ $post->user->id }}&&search={{ $post->title }}"
                    class="lg:w-2/5 w-full h-max bg-white rounded-md px-4 py-2 border drop-shadow-lg py-2 pb-4">
                    <div class="relative rounded-md w-full flex justify-start items-center">
                        <div
                            class="w-10 1/6 h-10 md:w-20 md:h-20 rounded-md border-2 border-sky-500 shadow-lg bg-transparent backdrop-blur-md flex justify-center items-center">
                            <img src="/storage/{{$post->user->image}}" alt="">
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
                    <div class="mt-10 px-4 py-2 flex justify-center flex-wrap">
                        <p class="w-full h-max overflow-hidden mt-2 font-bold text-lg">{{ $post->title }}</p>
                        <p class="w-full h-max overflow-hidden mt-2">{!! $post->descript !!}</p>
                        @if ($post->image == null)
                            
                        @else
                            <img src="/storage/{{ $post->image }}" alt="" srcset=""
                                class="w-4/5 h-20 mt-2 border-t-2 border-sky-500">
                        @endif
                    </div>
                    <div class="border-2 border-slate-500 shadow-lg w-full h-max mt-4 bg-sky-400">
                        <div class="w-full h-max px-2 py-1">⭐⭐⭐⭐</div>
                        <div class="flex flex-nowrap py-2 justify-around">
                            <div
                                class="w-1/4 h-10 px-4 py-2 border-2 border-white shadow-lg hover:bg-sky-600 hover:text-white text-slate-500  hover:border-white rounded-md flex justify-center items-center transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="transition duration-200" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                            </div>
                            <div
                                class="w-1/4 h-10 px-4 py-2 border-2 border-white shadow-lg hover:bg-sky-600 hover:text-white text-slate-500  hover:border-white rounded-md flex justify-center items-center transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="transition duration-200" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <div
                                class="w-1/4 h-10 px-4 py-2 border-2 border-white shadow-lg hover:bg-sky-600 hover:text-white text-slate-500  hover:border-white rounded-md flex justify-center items-center transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class="transition duration-200" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-share-2">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
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

        const button = document.querySelector('button[data-carausel-button=next]')
        setInterval(() => {
            button.click()
        }, 15000);
    </script>
@endsection
