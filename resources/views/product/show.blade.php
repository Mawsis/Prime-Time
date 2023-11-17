<x-layout>
    <a href="/">
        <div class="absolute flex flex-col justify-center text-white px-8 -space-y-2 text-lg mt-2">
            <div class=" text-left">Prime</div>
            <div class="text-gold text-right font-semibold" style="font-family: 'Playfair Display';">Time</div>
        </div>
    </a>
    <div x-data="{isVisible : false}" class="flex justify-center items-center bg-black h-screen text-white">
        <div  x-show="isVisible" @click.away="isVisible=false" class="absolute m-auto top-0 bottom-0 right-0 left-0 bg-gray border border-gold w-2/5 h-3/5">
            <form action="/purchase" method="post" class="flex flex-col justify-center items-center p-20 space-y-8">
                <h1 class="text-3xl text-gold">Confirm Your purchase</h1>
                <div class="mb-6 w-full">
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
                <div class="flex justify-center items-center space-x-60 pt-16">
                    <button class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gold" type="button" @click="isVisible=false">Cancel</button>
                    <button class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gold" type="submit">Confirm</button>
                </div>
            </form>
        </div>
        <div class="bg-gray h-5/6 w-5/6 flex p-5 border border-gold space-x-4">
            <div class="flex border border-gold w-3/6">
                <img src="{{ asset("/storage/" . $product->image) }}" class="aspect-square object-cover object-center">
            </div>
            <div class="flex flex-col my-10 space-y-28 w-3/6">
                <h1 class="font-bold text-7xl text-yellow font-play">{{ round($product->price) }}$</h1>
                <h2 class="text-6xl">{{ $product->name }}</h2>
                <h3 class="text-2xl font-light">{{ $product->desc }}</h3>
                <div class="flex flex-row-reverse mr-10">
                    <button class="bg-gold px-4 py-2 text-black border border-black hover:bg-black hover:text-gold hover:border-gold"
                    @click="isVisible=true">Buy</button>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>