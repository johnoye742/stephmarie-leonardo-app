<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }} -  {{ $thisLesson -> title }} Steph Marie</title>
    <script src="https://kit.fontawesome.com/fe8ea98d93.js" crossorigin="anonymous"></script>
    <livewire:styles></livewire:styles>
</head>
<body class="bg-gray-100">
    <header>
        <nav class="flex z-[100] flex-row items-center justify-center justify-between w-full p-5 fixed  text-black bg-gray-100 shadow-lg transition-all ease-in-out duration-4000 top-0" id="navbar">
            <div class="flex flex-row gap-5 items-center">
                <img title="logo" src="{{ asset('/images/SPEPHMARIE_LOGO-removebg-preview.png') }}" class="h-12 w-12 contain">
                
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
    <div class="fixed hidden w-full h-full bg-[#00000060] top-0 z-[1000] flex flex-row gap-2" id="navc">
        <ul class="w-[90%] md:w-[50%] -scale-0 bg-gray-100 transition-all ease-in-out duration-5000 overflow-y-scroll bg-gray-300 text-black list-decimal" id="sidebar">
            <h1 class="text-3xl text-center my-5">Lessons</h1>
            <li class="w-full p-5 bg-gray-400 capitalize transition-all ease-in-out duration-3000" id="mm">Introduction to chemistry <i class="fas fa-chevron-down ml-3 transition-all ease-in-out duration-3000" id="ic"></i></li>
            <div class="mx-8 my-3 hidden transition-all ease-in-out duration-3000" id="sub">
                <p>Definition Of Chemistry <span class="ml-5">5mins</span></p>
            </div>
            <li class="w-full p-5 bg-gray-400 capitalize transition-all ease-in-out duration-3000 mt-5" id="mm">Atoms, Elements and Compounds <i class="fas fa-chevron-down ml-3 transition-all ease-in-out duration-3000" id="ic"></i></li>
            <div class="mx-8 my-3 hidden transition-all ease-in-out duration-3000" id="sub">
                <p>What are atoms? <span class="ml-5">5mins</span></p>
                <p>What are elements? <span class="ml-5">5mins</span></p>
            </div>
        </ul>
        <i class="fa fa-times text-2xl text-white m-5" id="cancel-men"></i>
    </div>

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

    <main class="mt-[6em] flex flex-row gap-3">
        
        <ul class="w-[30%] h-[100vh] overflow-scroll bg-gray-300 text-black list-decimal hidden lg:block">
            <h1 class="text-3xl text-center my-5">Lessons</h1>


            @foreach ($lessons as $lesson)
                @if ($lesson -> parent == null || $lesson -> parent == '' || $lesson -> parent == "none")
                    <li class="w-full p-5 bg-gray-400 capitalize transition-all ease-in-out duration-3000" id="mm">{{ $lesson -> title }} <i class="fas fa-chevron-down ml-3 transition-all ease-in-out duration-3000" id="ic"></i></li>
                    <div class="mx-8 my-3 @foreach ($lessons -> where('parent', null, $thisLesson -> id) as $less)
                        @if ($thisLesson -> id == $less -> id)

                            show

                        @else

                            hidden
                            
                        @endif
                    @endforeach transition-all ease-in-out duration-3000" id="sub">
                    
                        @foreach ($lessons -> where('parent', null, $lesson -> id) as $child)
                            @if ($child -> parent == $lesson -> id)
                                
                            @endif
                            <a class="" href="{{ strtolower(str_ireplace(' ', '-', $child -> title)) }}">{{ $child -> title }} <span class="ml-5">5mins</span></a>
                        @endforeach
                    </div>                
                @endif
            
            @endforeach

        </ul>
        <div class="h-[100vh] bg-transparent relative hidden">
            <i class="fa fa-arrow-left absolute mt-5 text-2xl cursor-pointer"></i>
        </div>
        <div class="flex flex-col lg:w-[75%] w-full">
            <i class="fa fa-bars text-xl lg:hidden w-fit ml-5 border rounded-lg border-sky-500 px-5 py-3 hover:bg-sky-500 hover:text-white mt-10" id="m-slider"> Lessons</i>

            <h1 class="text-4xl mt-5 text-center">{{ $name }}</h1>
            <div class="w-full md:px-10 px-5 mt-10 mb-8">
                <iframe src="{{ $thisLesson -> video_url }}" title="video" class="w-[100%]"></iframe>
                <div class="p-8 shadow-lg rounded-b-lg bg-white">
                    <h1 class="text-3xl mb-5"><b>Lesson:</b> {{ $thisLesson -> title }}</h1>
                    <h1 class="text-2xl mb-5">Description</h1>
                    <p>{{ $thisLesson -> description }}</p>
                    <livewire:next-lesson wire:with="['j', 'k']" wire:params="['j', 'k']" wire:data="['j', 'k']"></livewire:next-lesson>
                </div>
            </div>
        </div>
    </main>
    <!--SCRIPT-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/courses.js') }}"></script>
</body>
</html>