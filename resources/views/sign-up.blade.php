<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new account on StephMarie Leonardo</title>
    <link rel="stylesheet" href="./fontawesome-free-6.1.2-web/css/all.min.css">
    <livewire:styles></livewire:styles>
</head>
<body class="bg-gray-100">
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

    <main class="mt-[10em]">
        <div class="container rounded-lg lg:px-20 px-5 flex flex-row my-20 h-fit-content w-full">
            <img alt="" src="./images/connor-olson-7yPmjStM6rY-unsplash.jpg" class="rounded-l-2xl w-[50%] object-cover hidden lg:block" id="lg-img">
            <div class="bg-white lg:w-[50%] h-fit-content w-full lg:!rounded-r-2xl lg:rounded-l-none rounded-2xl lg:p-5 py-20 p-5" id="main">
                <div class="px-2">
                    <h1 class="text-xl text-gray text-bold">CREATE AN ACCOUNT FOR FREE</h1>
                    <h1 class="text-4xl">Sign Up</h1>
                </div>
                <form class="w-[100%] h-[100%] py-10 lg:pr-10" id="sign-up" method="POST" action="{{ route('register') }}">
                    @csrf
                   <!--- <div class="flex flex-col">
                        <label for="usern">Username or email address</label>
                        <input type="text" id="usern" placeholder="janedoe@example.com" class="border-2 border-sky-500 p-2 w-fit h-fit rounded focus:ring outline-none">
                    </div> -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 w-full">
                        <input type="text" class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none mb-8 transition-all ease-in-out duration-300" placeholder="First Name" id="fname" name="fname" value="{{ old('fname') }}" required>
                        <input type="text" class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none mb-8 transition-all ease-in-out duration-300" placeholder="Last Name" id="lname" name="lname" value="{{ old('lname') }}" required>
                    </div>
                    <input type="text" class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none w-full mb-8 transition-all ease-in-out duration-300" placeholder="Username" id="uname" name="uname" value="{{ old('uname') }}" required>
                    <input type="email" class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none w-full mb-8 transition-all ease-in-out duration-300" placeholder="Email Address" id="email" name="email" value="{{ old('email') }}" required>
                    <select class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none w-full mb-8 transition-all ease-in-out duration-300" placeholder="Gender" id="gender" name="gender" value="Female" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>

                    </select>
                    <input type="password" class="p-3 border-b-2 border-gray @error('pwd')
                        border-red
                    @enderror focus:border-sky-500 outline-none w-full transition-all ease-in-out duration-300" placeholder="Password" id="password" name="pwd" value="{{ old('pwd') }}" required>
                    <p class="@error('pwd')
                        block
                    @enderror
                    
                    text-red-700">@error('pwd')
                        Password must be up to 8 characters
                    @enderror</p>
                    <div class="flex flex-row mb-8 mt-8">
                        <input type="checkbox" class="mr-2 accent-sky-600 transition ease-in-out duration-300" id="subscribe" name="subscribe">
                        <label for="subscribe">Subscribe to our newsletter</label>
                    </div>
                    <button type="submit" class="px-8 py-3 bg-sky-500 hover:bg-sky-600 focus:ring focus:bg-sky-700 rounded-lg text-white transition-all ease-in-out duration-300">Sign Up</button>
                    <p class="my-5">Already have an account? <a href="login.html" class="text-sky-500">Login</a></p>
                </form>
            </div>
        </div>
    </main>

    <!--SCRIPTS-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>