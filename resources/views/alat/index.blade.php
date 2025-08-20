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
                    <li><a class="transition delay-150 duration-300 hover:bg-[#7bc7f3] text-white px-3 py-2 rounded-md" href="#">BARANG</a></li>
                    <li><a class="transition delay-150 duration-300 hover:bg-[#7bc7f3] text-white px-3 py-2 rounded-md" href="#">COMMING SOON</a></li>
                </ul>
            </div>
            <div> 
                <button class="ml-auto transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#7bc7f3] bg-[#7ba8f5] text-white px-5 py-2 rounded-full font-semibold">login admin</button>
            </div>
        </nav>
    </header>
    <tbody>
        
    </tbody>
</body>
</html>