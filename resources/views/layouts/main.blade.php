<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies App</title>

    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="32" height="32"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,41.65625c-35.60937,0 -64.5,28.89063 -64.5,64.5c0,35.60938 28.89063,64.5 64.5,64.5h57.10938c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-57.10937c-31.175,0 -56.4375,-25.2625 -56.4375,-56.4375c0,-31.175 25.2625,-56.4375 56.4375,-56.4375c31.175,0 56.4375,25.2625 56.4375,56.4375c0,16.93125 -7.52605,32.78802 -20.56042,43.53802c-1.74688,1.47813 -2.01353,3.89583 -0.5354,5.6427c1.47812,1.74687 4.0302,2.01615 5.6427,0.53802c14.91563,-12.3625 23.51563,-30.50312 23.51563,-49.71875c0,-35.60937 -28.89062,-64.5 -64.5,-64.5zM86,58.31928c-8.86875,0 -16.125,7.25625 -16.125,16.125c0,9.00312 7.52605,16.39375 16.52917,16.125c8.46563,-0.26875 15.45208,-7.25782 15.72083,-15.72345c0.26875,-9.1375 -7.12188,-16.52655 -16.125,-16.52655zM54.28803,90.03125c-8.90559,0 -16.125,7.21941 -16.125,16.125c0,8.90559 7.21941,16.125 16.125,16.125c8.90559,0 16.125,-7.21941 16.125,-16.125c0,-8.90559 -7.21941,-16.125 -16.125,-16.125zM117.71197,90.03125c-8.90559,0 -16.125,7.21941 -16.125,16.125c0,8.90559 7.21941,16.125 16.125,16.125c8.90559,0 16.125,-7.21941 16.125,-16.125c0,-8.90559 -7.21941,-16.125 -16.125,-16.125zM86,102.125c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125zM86,121.74322c-4.27662,0 -8.37807,1.69888 -11.4021,4.7229c-3.02402,3.02402 -4.7229,7.12548 -4.7229,11.4021c0,8.90559 7.21941,16.125 16.125,16.125c8.90559,0 16.125,-7.21941 16.125,-16.125c0,-4.27662 -1.69888,-8.37807 -4.7229,-11.4021c-3.02402,-3.02402 -7.12548,-4.7229 -11.4021,-4.7229zM163.26563,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                    </a>
                </li>
                <li class="md:ml-16">
                    <a href=" {{ route('movies.index') }} " class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6">
                    <a href=" {{ route('actors.index') }} " class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.png" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    
    <livewire:scripts>
    @yield('scripts')
</body>
</html>