@props(['color'=>$product->color->value])
<x-layout>
    <x-logo/>
    <div x-data="{isVisible : false}" class="flex justify-center items-center bg-black h-screen text-white">
        <div  x-show="isVisible" @click.away="isVisible=false" class="absolute m-auto top-0 bottom-0 right-0 left-0 bg-gray border border-gold w-2/5 h-3/5" style="display: none">
            <form action="/purchase" method="post" class="flex flex-col justify-center items-center xl:p-14 2xl:p-20 2xl:space-y-8">
                @csrf
                <h1 class="text-3xl text-gold">Confirm Your purchase</h1>
                <div class="mb-6 w-full">
                    <input type="hidden" name="product" value="{{$product->id}}">
                    <label for="card" class="block mb—2 uppercase font—bold text-gold">card</label>
                    <input placeholder="xxxx-xxxx-xxxx" class="border border-gold p-2 w-full text-black" type="text" name="card" id="" value="{{ old('card') }}">
                    @error('card')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 w-full">
                    <label for="password" class="block mb—2 uppercase font—bold text-gold">password</label>
                    <input placeholder="**********" class="border border-gold p-2 w-full text-black" type="text" name="password" id="" value="{{ old('password') }}">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <h3 class="text-xl text-gold">We are happy to give you the time.</h3>
                <div class="flex justify-center items-center space-x-60 xl:pt-12 2xl:pt-16">
                    <button class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gold" type="button" @click="isVisible=false">Cancel</button>
                    <button class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gold" type="submit">Confirm</button>
                </div>
            </form>
        </div>
        <div class="bg-gray h-5/6 w-5/6 flex p-5 border border-gold space-x-4">
            <div class="flex border border-gold w-1/2 items-center justify-center aspect-square">
                <img src="{{ asset("/storage/" . $product->image) }}" class="object-cover h-full w-full object-center">
            </div>
            <div class="flex flex-col my-10 lg 2xl:space-y-24 xl:space-y-12 w-1/2">
                <h1 class="font-bold text-7xl text-yellow font-play">{{ round($product->price) }}$</h1>
                <h2 class="text-6xl">{{ $product->name }}</h2>
                <div class="flex space-x-9">
                    <h3 class="text-2xl font-light">Color: </h3>
                    <div class="aspect-square w-4 rounded-full p-4 border border-black" style="background-color: {{$color}}"></div>
                </div>
                <h3 class="text-2xl font-light">{{ $product->desc }}</h3>
                <div class="flex flex-row-reverse mr-10">
                    @auth
                        <button class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gold"
                        @click="isVisible=true">Buy</button>
                    @else
                        <a href="/login" class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gol">
                            Buy
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    
</x-layout>