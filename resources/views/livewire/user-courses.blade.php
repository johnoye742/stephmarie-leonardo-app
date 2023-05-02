<div class="grid md:grid-cols-2 grid-cols-1 gap-5 justify-center w-full mt-5">
    
    @foreach ($courses as $course)
        
        <a href="{{ url('/courses/' . $course -> name) }}" class="rounded-lg shadow-lg dark:bg-slate-600 bg-white p-3 flex flex-row gap-3 items-center hover:-translate-y-2 hover:shadow-xl transition-all ease-in-out duration-3000">
            <div class="p-3 rounded-lg dark:bg-slate-500 bg-gray-100">
                <object data="./images/chemistry-white.svg" type="" class="h-8 w-8"></object>
            </div>
            <div class="">
                <h1 class="text-xl font-bold">{{ $course -> name }}</h1>
                <p>Fundamentals</p>
            </div>
        </a>
    @endforeach


</div>
