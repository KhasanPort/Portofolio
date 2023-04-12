<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khasanport</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        figure.active {
            background-color: rgb(142, 168, 255);
            color: white;
        }

        .Detaile:hover~.detail-title {
            display: fixed;
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="text-sm md:text-md lg:text-lg xl:text-xl">

    <div class="container-fluid mx-auto grid grid-rows-3 grid-flow-col gap-4">
        <div
            class="w-full h-screen px-2 py-2
                    flex flex-wrap
                    lg:grid lg:grid-cols-12 lg:grid-rows-5 lg:gap-2">
            <nav id="Navbar"
                class="w-10 h-10 fixed right-2 top-2 transition duration-700 px-2 py-10
                        lg:w-full lg:h-full lg:static lg:row-span-5 lg:col-span-2 bg-blue-500">
                <div class="w-7 h-7 rounded-md cursor-pointer mb-10 flex flex-wrap justify-end rotate-90 text-white"
                    onclick="setClass([document.querySelector('#Navbar')])">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                </div>
                @auth
                    <a href="/dashboard">
                        <figure
                            class="flex flex-nowrap bg-white text-blue-600 hover:border-white border-2 w-full-h-20 px-2 py-2 my-2 transition duration-500 {{ $Profile }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>                            
                            <span class="w-4"></span>
                            <figcaption>Profile</figcaption>
                        </figure>
                    </a>
                    <a href="/user/posts">
                        <figure
                            class="flex flex-nowrap bg-white text-blue-600 hover:border-white border-2 w-full-h-20 px-2 py-2 my-2 transition duration-500 {{ $Post }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>                            
                            <span class="w-4"></span>
                            <figcaption>Post</figcaption>
                        </figure>
                    </a>
                    <a href="/user/comments">
                        <figure
                            class="flex flex-nowrap bg-white text-blue-600 hover:border-white border-2 w-full-h-20 px-2 py-2 my-2 transition duration-500 {{ $Comment }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>                            
                            <span class="w-4"></span>
                            <figcaption>Comment</figcaption>
                        </figure>
                    </a>
                @endauth
                @can('admin')
                    <a href="/admin/users">
                        <figure
                            class="flex flex-nowrap bg-white text-blue-600 hover:border-white border-2 w-full-h-20 px-2 py-2 my-2 transition duration-500 {{ $Users }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                            <span class="w-4"></span>
                            <figcaption>Users</figcaption>
                        </figure>
                    </a>
                    <a href="/admin/statistic">
                        <figure
                            class="flex flex-nowrap bg-white text-blue-600 hover:border-white border-2 w-full-h-20 px-2 py-2 my-2 transition duration-500 {{ $Statistic }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>                            <span class="w-4"></span>
                            <figcaption>Statistic</figcaption>
                        </figure>
                    </a>
                @endcan
            </nav>
                @yield('top')
            <main id="Main" class="w-full relative
                        lg:row-span-4 lg:col-span-10">
                @yield('main')
            </main>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
        feather.replace()
        import Trix from "trix"

        document.addEventListener("trix-before-initialize", () => {
            // Change Trix.config if you need
        })
        document.addEventListener("trix-file-accept", function(e) {
            e.preventDefault()
        })
    </script>
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
</body>

</html>
