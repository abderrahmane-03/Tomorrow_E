<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased bg-black">
    <!--welcome-->

<nav class="flex justify-between bg-black h-[80px] text-white w-[96.55rem]">

<div class="px-5 xl:px-12 py-6 flex w-full items-center ">
    <a class="text-3xl font- flex items-center font-heading h-[60px] w-[170px]" href="#">
        <img width="75" src="logo.png" alt="logo">

    </a>
    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
        <li><a class="text-black" href="#">Home</a></li>
        <li><a class="text-black" href="#">Products</a></li>
        <li><a class="text-black" href="#">Collections</a></li>
        <li><a class="text-black" href="#">Contact Us</a></li>
    </ul>

    <a href="{{route("login")}}"class="p-2 mr-4 px-10 bg-pink-300 hover:bg-pink-400 hover:text-white text-pink-400 rounded-lg">login</button>
    <a href="{{ route("register") }}" class="p-2 px-10 bg-violet-400 hover:bg-violet-600 text-violet-600 hover:text-white rounded-lg">register</a>
</div>
<!-- Responsive navbar -->

<a class="navbar-burger self-center mr-12 xl:hidden" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</a>

</nav>



<div class="fixed top-0 left-0 w-full h-full overflow-hidden z-[-1]">
    <video class="w-full h-full object-cover" autoplay muted loop>
        <source src="/concert.mp4" type="video/mp4">
    </video>
</div>
<div class="hero-content text-center text-neutral-content">
            <div class="max-w-l mt-52">
                <h1 class="mb-5 text-5xl font-bold">Welcome to Tomorrow-<span  class="text-violet-400">E</span>VENT</h1>
                <p class="mb-5 font-bold">Don’t wait, grab our premium Services now up to <span  class="text-violet-400 ">500</span> Verified organizers and <span class="text-violet-400">50.000</span> Clients</p>
                <a href="{{route("organisateur-register")}}" class=" rounded-md p-4 bg-violet-400 hover:bg-violet-600 text-lg text-violet-600  hover:text-white ">Get Started as a Events maker</a>
            </div>
        </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
    </body>
</html>
