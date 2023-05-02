<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login into your StephMarie Leonardo account</title>
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

    <main class="mt-[3em]">
        <div class="container rounded-lg lg:px-[10em] px-3 flex flex-col items-center justify-center w-full h-[100%]">
            <div class="bg-white w-full lg:rounded-2xl md:w-[50%] rounded-2xl lg:p-5 p-5 shadow-lg" id="main">
                <div class="px-2">
                    <h1 class="text-xl text-gray text-bold">WELCOME BACK</h1>
                    <h1 class="text-4xl">Login</h1>
                </div>
                <form class="w-[100%] h-fit py-10" id="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                   <!--- <div class="flex flex-col">
                        <label for="usern">Username or email address</label>
                        <input type="text" id="usern" placeholder="janedoe@example.com" class="border-2 border-sky-500 p-2 w-fit h-fit rounded focus:ring outline-none">
                    </div> -->
                    <input type="text" class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none w-full mb-8 transition-all ease-in-out duration-300" placeholder="Email address" name="email" required>
                    <input type="password" class="p-3 border-b-2 border-gray focus:border-sky-500 outline-none w-full mb-8 transition-all ease-in-out duration-300" placeholder="Password" name="password" required>

                    @if ($errors -> any)
                        <div class="text-red-700">
                            @foreach ($errors -> all as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <button type="submit" class="px-8 py-3 bg-sky-500 hover:bg-sky-600 focus:ring focus:bg-sky-700 rounded-lg text-white transition-all ease-in-out duration-300">Login</button>
                    <p class="my-5">Don't have an account? <a href="{{ route('register') }}" class="text-sky-500">Sign Up</a></p>
                </form>
            </div>
        </div>
    </main>

    <!--SCRIPTS-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>