<div>
    <nav class="flex flex-row z-[100] items-center justify-center justify-between w-full p-5 fixed text-black bg-white shadow-lg transition-all ease-in-out duration-4000 top-0" id="navbar">
        <div class="flex flex-row gap-5 items-center">
            <img title="logo" src="./images/SPEPHMARIE_LOGO-removebg-preview.png" class="h-12 w-12 contain">
            
        </div>
        <div>
            <div class="md:flex flex-row gap-3 items-center py-2 px-5 border rounded-lg hidden">
                <input type="search" placeholder="Search" class="outline-none bg-transparent">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="flex flex-row gap-5">
            <ul class="w-fit lg:flex flex-row justify-center gap-5 items-center hidden">
                <li><a href="#" title="Home" class="text-sky-500 hover:text-sky-300">Home</a></li>
                <li><a href="#" title="Courses" class="hover:text-sky-300">Courses</a></li>
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
</div>