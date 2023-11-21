<x-layout>
    <a href="/">
        <div class="absolute flex flex-col justify-center text-white px-8 -space-y-2 text-lg mt-2">
            <div class=" text-left">Prime</div>
            <div class="text-gold text-right font-semibold" style="font-family: 'Playfair Display';">Time</div>
        </div>
    </a>
    <div class="flex justify-center items-center bg-black h-screen text-white">
        <div class="absolute m-auto top-0 bottom-0 right-0 left-0 bg-gray border border-gold w-2/5 h-3/5">
            <form action="/login" method="post" class="flex flex-col justify-center items-center p-8 xl:space-y-5 2xl:space-y-10">
                <h1 class="text-3xl text-gold">Login</h1>
                @csrf
                <div class="mb-6 w-full">
                    <label for="email" class="block mb—2 uppercase font—bold text-gold">email</label>
                    <input placeholder="Email" class="border border-gold p-2 w-full text-black" required type="email" name="email" id="" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 w-full">
                    <label for="password" class="block mb—2 uppercase font—bold text-gold">password</label>
                    <input placeholder="Password" class="border border-gold p-2 w-full text-black" required type="password" name="password" id="" value="{{ old('password') }}">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <a class="text-sm underline text-gold" href="/signup">Or Sign Up.</a>
                <h3 class="text-xl text-gold">We are happy to give you the time.</h3>
                <div class="flex justify-center items-center pt-6">
                    <button class="bg-gold px-8 py-4 text-black border border-black hover:bg-black hover:text-gold hover:border-gold"
                     type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    
</x-layout>