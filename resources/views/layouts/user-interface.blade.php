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
<body>
    <nav class="h-10 bg-gray-400 pr-12 flex justify-end content-center">
        <h2 class="self-center">sebuah email dari user</h2>
    </nav>
    <aside class="fixed top-0 left-0 h-full w-60 bg-tengah">
        <div class="flex justify-center my-4 border-b-2 border-black">
            <a href="{{ route('home') }}">Kembali</a>
        </div>
        <div class="pl-4">
            <ul class="space-y-2 font-medium ">
                <li>
                    <a href="">informasi akun</a>
                </li>
                <li>
                    <a href="">Posting Donasi</a>
                </li>
                <li>
                    <a href="">lamar Kerja</a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="ml-60">
    {{ $slot }}
    </main>
</body>
</html>