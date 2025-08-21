<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>tes</title>
</head>
<body class="bg-white">
    <header class="relative bg-gray-800">
            
        <nav class="flex items-center justify-between w-[90%] mx-auto">
            <div>
                <img src="{{asset('tes.png')}}" alt="logo" class="h-20 w-auto">
            </div>
 
            <div class="">
                <ul class="flex items-center gap-9 px-9 py-4">
                    <li><a aria-current="page" class="rounded-md bg-[#7bc7f3] text-white px-3 py-2 text-sm font-medium">HOME</a></li>
                    <li><a class="transition delay-150 duration-300 hover:bg-[#7bc7f3] text-white px-3 py-2 rounded-md" href="#">INVENTORY</a></li>
                </ul>
            </div>
            <div> 
                <button class="ml-auto transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#7bc7f3] bg-[#7ba8f5] text-white px-5 py-2 rounded-full font-semibold"><a href="{{ route('login') }}">login admin</a></button>
            </div>
        </nav>
    </header>
    <tbody>
        <div class="container mx-auto px-4 py-16 text-center">
    <h1 class="text-4xl font-bold text-gray-900 md:text-5xl">Selamat Datang di Portal Sarana & Prasarana</h1>
    <p class="mt-4 text-lg text-gray-600">
        Kelola dan temukan semua aset yang Anda butuhkan dengan mudah.
    </p>
    
    
    <a href="#" class="mt-8 inline-block rounded-full bg-[#7ba8f5] px-8 py-3 font-semibold text-white transition delay-150 duration-300 hover:bg-[#7bc7f3]">
        Jelajahi Inventory
    </a>
</div>
    </tbody>
</body>
</html>