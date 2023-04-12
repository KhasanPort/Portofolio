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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --bg: url(https://images4.alphacoders.com/130/1306991.jpeg);
        }

        .bg {
            background: var(--bg);
        }
    </style>
</head>

<body class="">
    <div class="container-fluid">
        <div class="bg w-full h-screen bg-cover bg-center flex justify-center items-center transition duration-500">
            @yield('container')
        </div>
    </div>

    <script src="{{ URL::asset('js/index.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()

        const form = document.querySelector('form')

        const doc = document.documentElement;
        const bg = [
            'https://images4.alphacoders.com/130/1306991.jpeg',
            'https://images4.alphacoders.com/130/1307433.jpg',
            'https://images5.alphacoders.com/606/606272.jpg',
            'https://images5.alphacoders.com/319/319176.jpg',
            'https://images2.alphacoders.com/606/606275.jpg',
        ]
        setInterval(() => {
            const r = Math.round(Math.random() * bg.length)
            doc.style.setProperty('--bg', 'url(' + bg[r] + ')')
            console.log('url(' + bg[r] + ')')
        }, 100000);

        window.addEventListener('load', () => {
            form.reset()
            const r = Math.floor(Math.random() * bg.length)
            doc.style.setProperty('--bg', 'url(' + bg[r] + ')')
        })
    </script>
</body>

</html>
