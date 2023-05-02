<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Courses - StephMarie Leonardo</title>
    <livewire:styles></livewire:styles>
    <link rel="stylesheet" href="./fontawesome-free-6.1.2-web/css/all.min.css">
</head>
<body>
    <header>
        <nav class="flex flex-row z-[100] items-center justify-center justify-between w-full p-5 fixed text-black bg-white shadow-lg transition-all ease-in-out duration-4000 top-0" id="navbar">
            <div class="flex flex-row gap-5 items-center">
                <img title="logo" src="./images/SPEPHMARIE_LOGO-removebg-preview.png" class="h-12 w-12 contain">
                <h1 class="md:text-4xl text-3xl">Courses</h1>
            </div>
            <div>
                <div class="md:flex flex-row gap-3 items-center py-2 px-5 border rounded-lg hidden">
                    <input type="search" placeholder="Search" class="outline-none">
                    <i class="fa fa-search text-gray-800"></i>
                </div>
            </div>
            <div class="flex flex-row gap-5">
                <ul class="w-fit lg:flex flex-row justify-center gap-5 items-center hidden">
                    <li><a href="#" title="Home" class="hover:text-sky-300">Home</a></li>
                    <li><a href="#" title="Courses" class="text-sky-500">Courses</a></li>
                    <li><a href="#" title="About Us" class="hover:text-sky-300">About Us</a></li>
                    
                </ul>
                <div class="lg:flex flex-row gap-5 items-center hidden">
                    <a href="{{ route('login') }}" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white rounded-lg flex flex-row justify-center">Login</a>
                    <a href="{{ route('register') }}" class="p-3 bg-transparent text-sky-500 border border-sky-500 rounded-lg hover:bg-sky-500 hover:text-white transition-all flex flex-row justify-center">Sign Up</a>
                </div>
                <div class="flex flex-row items-center">
                    <i class="fa fa-bars lg:hidden text-2xl" id="menu-toggle"></i>
                </div>
            </div>
        </nav>
    </header>
    <div class="fixed hidden w-full h-full bg-[#00000060] top-0 z-[1000] flex-row gap-2" id="navcon">
        <div class="w-[80%] md:w-[50%] bg-white px-5 py-[5em] flex flex-col gap-10">
            <ul class="flex flex-col gap-5">
                <li><a href="#" title="Home" class="hover:text-sky-300">Home</a></li>
                <li><a href="#" title="Courses" class="text-sky-500">Courses</a></li>
                <li><a href="#" title="About Us" class="hover:text-sky-300">About Us</a></li>
            </ul>
            <div class="flex flex-col gap-5">
                <a href="#" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white rounded-lg flex flex-row justify-center">Login</a>
                <a href="#" class="p-3 bg-transparent text-sky-500 border border-sky-500 rounded-lg hover:bg-sky-500 hover:text-white transition-all flex flex-row justify-center">Sign Up</a>
            </div>
        </div>
        <i class="fa fa-times text-2xl text-white m-5" id="cancel-menu"></i>
    </div>
    <main class="mt-[6em]">
        <div class="md:p-10 p-5">
            <h2 class="text-4xl mb-8">Explore courses<br/>by category.</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-5">
                <div class="rounded-lg border hover:bg-slate-500 hover:text-white transition-all ease-in-out duration-3000 border-gray-500 p-5 cursor-pointer hover:-translate-y-2">
                    <img src="./images/trumpet.png" class="h-12 w-12" alt="Music">
                    <h1 class="text-2xl my-5 text-bold">Music</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus nisi, nulla incidunt repellendus dolorem dolores debitis dignissimos, similique, molestias quos minus eaque reprehenderit totam. Corporis, laborum. Eaque sunt iure ex.</p>
                    <p class="mt-5">32 courses</p>
                </div>
                <div class="rounded-lg border hover:bg-slate-500 hover:text-white transition-all ease-in-out duration-3000 border-gray-500 p-5 cursor-pointer hover:-translate-y-2">
                    <object data="./images/science.svg" class="h-12 w-12" alt="Science"></object>
                    <h1 class="text-2xl my-5 text-bold">Science</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempore quo rem temporibus ducimus veniam neque deleniti dicta expedita commodi explicabo ipsa, voluptas natus corporis repellat atque dolorum quae autem?</p>
                    <p class="mt-5">32 courses</p>
                </div>
                <div class="rounded-lg border hover:bg-slate-500 hover:text-white transition-all ease-in-out duration-3000 border-gray-500 p-5 cursor-pointer hover:-translate-y-2">
                    <object data="./images/mathematics.svg" class="h-12 w-12" alt="Mathematics"></object>
                    <h1 class="text-2xl my-5 text-bold">Mathematics</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora molestias in minus unde molestiae praesentium, odio ex asperiores aliquam, fuga minima numquam sunt cupiditate recusandae sint deserunt fugiat quia consequuntur?</p>
                    <p class="mt-5">32 courses</p>
                </div>
            </div>
        </div>

        <div class="md:p-10 p-5">
            <h2 class="text-4xl mb-8">Our Latest<br/>Courses</h2>
            <livewire:courses-section></livewire:courses-section>
        </div>
    </main>

    <!--SCRIPT-->
    <livewire:scripts></livewire:scripts>
    <script src="./js/tailwind.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>