<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steph Maria</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.2-web/css/all.css') }}">
    <livewire:styles></livewire:styles>
</head>
<body>
    
    <header>
        <livewire:navbar></livewire:navbar>
    </header>

    <div class="fixed hidden w-full h-full bg-[#00000060] top-0 z-[1000] flex-row gap-2" id="navcon">
        <div class="w-[80%] md:w-[50%] bg-white px-5 py-[5em] flex flex-col gap-10">
            <ul class="flex flex-col gap-5">
                <li><a href="#" title="Home" class="text-sky-500 hover:text-sky-300">Home</a></li>
                    <li><a href="#" title="Courses" class="hover:text-sky-300">Courses</a></li>
                    <li><a href="#" title="About Us" class="hover:text-sky-300">About Us</a></li>
            </ul>
            <div class="flex flex-col gap-5">
                <a href="#" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white rounded-lg flex flex-row justify-center">Login</a>
                <a href="#" class="p-3 bg-transparent text-sky-500 border border-sky-500 rounded-lg hover:bg-sky-500 hover:text-white transition-all flex flex-row justify-center">Sign Up</a>
            </div>
        </div>
        <i class="fa fa-times text-2xl text-white m-5" id="cancel-menu"></i>
    </div>
    
    <main>
        <div class="hero w-full py-[8em] pt-[10em] md:px-12 px-8 z-[100]">
            <div class="lg:w-[50%] text-white">
                <h1 class="text-4xl font-bold mb-3">CREATE A NEW WORLD<br/>BY GIVING YOUR CHILDREN<br/> THE BEST QUALITY EDUCATION</h1>
                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore obcaecati nesciunt facere cumque magnam non, possimus suscipit architecto corporis veniam, accusantium, iste modi consequatur explicabo tempore error eaque at dicta.</p>
                <div class="flex flex-row">
                    <button href="#" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg">Get Started</button>
                    <button href="#" class="p-3 bg-transparent border-2 border-sky-500 text-white rounded-lg hover:bg-sky-800 hover:opacity-3 transition-all ease-in-out duration-3000">Learn More</button>
                </div>
            </div>
        </div>

        <div class="my-5">
            <h1 class="text-3xl font-bold text-center">Popular Courses</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:px-8 px-3">
                <div class="rounded-lg shadow-lg p-5 flex flex-col hover:-translate-y-2 hover:shadow-xl transition-all ease-in-out duration-3000">
                    <div class="w-full flex flex-row justify-between">
                        <button href="#" class="p-3 bg-transparent text-sky-500 border border-sky-500 rounded-lg">Science</button>
                        <i class="far fa-heart text-pink-500 text-xl"></i>
                    </div>
                    <object data="{{ asset('images/chemistry.svg') }}" class="h-20 w-20 mt-3"></object>
                    <p class="text-2xl mt-3 font-bold capitalize">Chemistry</p>
                    <p class="mt-3">Created By Tivfa Akombo</p>
                    <p class="mt-3">23 lessons</p>
                    <button href="#" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg mt-5 w-full"><i class="fa fa-plus"></i> Add To Cart</button>
                </div>

                <div class="rounded-lg shadow-lg p-5 flex flex-col hover:-translate-y-2 hover:shadow-xl transition-all ease-in-out duration-3000">
                    <div class="w-full flex flex-row justify-between">
                        <button href="#" class="p-3 bg-transparent text-sky-500 border border-sky-500 rounded-lg">Music</button>
                        <i class="far fa-heart text-pink-500 text-xl"></i>
                    </div>
                    <object data="{{ asset('images/trumpet.png') }}" class="h-20 w-20 mt-3"></object>
                    <p class="text-2xl mt-3 font-bold capitalize">Playing the trumpet</p>
                    <p class="mt-3">Created By Tivfa Akombo</p>
                    <p class="mt-3">15 lessons</p>
                    <button href="#" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg mt-5 w-full"><i class="fa fa-plus"></i> Add To Cart</button>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <button href="#" class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg mt-5">Explore Courses</button>
            </div>
        </div>

        <div class="my-8 flex flex-col items-center">
            <h1 class="text-3xl font-bold text-center">Why Choose Us?</h1>
            <p class="w-[70%] text-center my-10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo iure quia temporibus quidem natus veniam architecto. Animi rerum, earum dignissimos distinctio mollitia quo minus aliquid facere culpa architecto excepturi officiis.</p>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:px-12 px-5">
                <div class="rounded-lg shadow-lg p-5 flex flex-col items-center w-full w-card">
                    <object data="{{ asset('images/school.svg') }}" class="h-20 w-20"></object>
                    <p class="text-2xl text-center mt-3 font-bold capitalize mb-5">We Offer Quality education</p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dolor pariatur fugiat doloribus laboriosam ut amet impedit accusantium commodi nihil ex, cumque qui illo natus maiores fugit soluta, non nemo!</p>
                </div>
                <div class="rounded-lg shadow-lg p-5 flex flex-col items-center w-full w-card">
                    <object data="{{ asset('images/school (1).svg') }}" class="h-20 w-20"></object>
                    <p class="text-2xl text-center mt-3 font-bold capitalize mb-5">We drive you to your future</p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dolor pariatur fugiat doloribus laboriosam ut amet impedit accusantium commodi nihil ex, cumque qui illo natus maiores fugit soluta, non nemo!</p>
                </div>
                <div class="rounded-lg shadow-lg p-5 flex flex-col items-center w-full w-card">
                    <object data="{{ asset('images/school.gif') }}" class="h-20 w-20"></object>
                    <p class="text-2xl text-center mt-3 font-bold capitalize mb-5">We could teach you anywhere in the world</p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dolor pariatur fugiat doloribus laboriosam ut amet impedit accusantium commodi nihil ex, cumque qui illo natus maiores fugit soluta, non nemo!</p>
                </div>
            </div>
        </div>
    </main>

    <!--SCRIPT-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>