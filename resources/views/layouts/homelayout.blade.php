<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    
</head>
<body class="bg-opacity-25">
    {{-- Navbar --}}
    <nav class="p-8 bg-bawah bg-opacity-50 md:flex md:items-center md:justify-between">
        <div>
            <a href="" class="ml-4 text-2xl text-gray-50 font-bold"><span class="underline decoration-atas decoration-4">
            Student <span class="text-atas underline decoration-white decoration-4">Helper</span>
            </span></a>
        </div>
        <ul class="md:flex md:items-center text-lg">
            <li class="mx-8">
                <a href="{{ route('home') }}">home</a>
            </li>
            <li class="mx-8">
                <a href="{{ route('donasi') }}">Bantuan</a>
            </li>
            <li class="mx-8">
                <a href="">Info Kerja</a>
            </li>
            <li class="mx-8 pr-4">
                <a href="{{ route('akunUser') }}">Masuk/Daftar</a>
            </li>
        </ul>
    </nav>
    <main class="">
    {{ $slot }}
    </main>
</body>
</html>