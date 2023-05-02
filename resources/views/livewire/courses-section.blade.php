<div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 w-full mb-10">
        @foreach ($courses as $course)
            
       
        <div class="rounded-lg shadow-lg p-5 flex flex-col hover:-translate-y-2 hover:shadow-xl transition-all ease-in-out duration-3000">
            <div class="w-full flex flex-row justify-between">
                <button href="#" class="p-3 bg-transparent text-sky-500 border border-sky-500 rounded-lg">{{ $course -> category }}</button>
                <i class="far fa-heart text-pink-500 text-xl"></i>
            </div>
            @if ($course -> category == "Science")
                <object data="{{ asset('images/science.svg') }}" class="h-12 w-12 mt-3"></object>
            @endif
            
            <p class="text-2xl mt-3 font-bold capitalize">{{ $course -> name }}</p>
            <p class="mt-3">Created By {{ $course -> teacher }}</p>
            <p class="mt-3">0 lessons</p>
            <button class="p-3 bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg mt-5 w-full" wire:click="addToCart(['{{ $course -> id }}', '{{ $course -> name }}', '{{ $course -> category }}' ])"><i class="fa fa-plus"></i> Add To Cart</button>
    
        </div>
    
    
        @endforeach
    
        


    </div>

    <div class="w-full fixed bottom-0 p-3 flex-row justify-end gap-5 shadow-t-lg left-0 bg-gray-100 @if ($cart != null)
        flex
    @else
        hidden
    @endif">
    
        <button class="p-3 w-fit bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg w-full float-right"><i class="fa fa-cart-shopping"></i> View Cart</button>
        <form method="POST" action="{{ url('/free-checkout') }}">
            @csrf
            @foreach ($cart as $item)
                <input type="hidden" name="cart[]" value="{{ implode(',', $item) }}">
            @endforeach
            <button class="p-3 w-fit bg-gradient-to-r from-cyan-500 to-blue-500 mr-4 text-white rounded-lg w-full float-right"><i class="fa fa-arrow-right"></i> Checkout</button>
        </form>
    </div>
</div>