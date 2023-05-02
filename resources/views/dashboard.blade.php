<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Steph Marie</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.2-web/css/all.css') }}">

    <livewire:styles></livewire:styles>
</head>
<body class="dark:bg-slate-700 bg-gray-100 dark:text-white">
    <header>
        <nav class="flex z-[100] flex-row items-center justify-center justify-between w-full p-5 fixed dark:text-white dark:bg-slate-700 text-black bg-gray-100 shadow-lg transition-all ease-in-out duration-4000 top-0" id="navbar">
            <div class="flex flex-row gap-5 items-center">
                <img title="logo" src="./images/SPEPHMARIE_LOGO-removebg-preview.png" class="h-12 w-12 contain">
                
            </div>
            <div>
                <div class="md:flex flex-row gap-3 items-center py-2 px-5 border border-slate-500 rounded-lg hidden">
                    <input type="search" placeholder="Search" class="outline-none bg-transparent">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="w-fit flex flex-row justify-center items-center gap-5">
                <ul class="lg:flex flex-row gap-5 mr-5 items-center hidden">
                    <li><a href="#" title="Home" class="text-sky-500">Home</a></li>
                    <li><a href="#" title="Courses" class="hover:text-sky-300">Courses</a></li>
                    <li><a href="#" title="About Us" class="hover:text-sky-300">About Us</a></li>
                </ul>
                <div class="flex flex-row w-fit gap-5 items-center hidden md:flex">
                    <i class="fa fa-bell text-xl"></i>
                    <div>
                        <img src="{{ asset('images/HEAD 2.png') }}" class="w-12 h-12 object-cover rounded-full" alt="Profile Picture">
                    </div>
                </div>
                <div class="lg:hidden">
                    <i class="fa fa-bars text-2xl" id="menu-toggle"></i>
                </div>
            </div>
        </nav>
    </header>

    <div class="fixed hidden w-full h-full bg-[#00000060] top-0 z-[1000] flex-row justify-between" id="navcon">
        <div class="w-[80%] md:w-[50%] bg-white text-black px-5 py-[5em] flex flex-col gap-5">
            <div class="flex flex-row items-center gap-5">
                <img src="./images/d8sgrki-9b28a51a-e96c-47a1-9e7e-f5d463b4df0b.jpg" class="w-12 h-12 object-cover rounded-full" alt="Profile Picture">
                <h1>Hinata Hyuga</h1>
            </div>
            <div>
                <div class="flex flex-row gap-3 items-center py-2 px-5 border border-slate-500 rounded-lg lg:hidden">
                    <input type="search" placeholder="Search" class="outline-none bg-transparent w-full">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <ul class="flex flex-col gap-5">
                    <li><a href="#" title="Home" class="text-sky-500">Home</a></li>
                    <li><a href="#" title="Courses" class="hover:text-sky-300">Courses</a></li>
                    <li><a href="#" title="About Us" class="hover:text-sky-300">About Us</a></li>
            </ul>
        </div>
        <i class="fa fa-times text-2xl text-white m-5" id="cancel-menu"></i>
    </div>

    <main class="mt-[5.5em]">
        <div class="p-8 grid lg:grid-cols-2 grid-cols-1 gap-8 text-black dark:text-white">
            <div>
                <h1 class="text-2xl">Welcome back, <b>{{ auth() -> getUser() -> name }}</b></h1>
                <p class="text-gray-400">Learn about your progress.</p>

                <canvas id="chart" class="w-full">

                </canvas>
                <div class="flex flex-row items-center gap-3 justify-center w-full">
                    <h1 class="text-2xl font-bold mt-5 text-center">My Courses</h1>
                    <a href="{{ route('courses') }}" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg mt-5">Explore</a>
                </div>

                <livewire:user-courses></livewire:user-courses>
                
            </div>
            <div>
                <h1 class="text-2xl text-center text-bold my-5">Certification</h1>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-3">
                    <img src="./images/305798552_884405315869444_9220813295385660845_n.jpg" alt="certification" class="object-cover">
                </div>
            </div>
        </div>
    </main>

    <footer class="border-t border-gray-400 mt-[15em] p-5 dark:text-white text-black flex flex-col justify-center items-center text-center">
        <p>&copy; 2023 Steph Marie Leonardo. All Rights Reserved.</p>
    </footer>

    <!--SCRIPT-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>