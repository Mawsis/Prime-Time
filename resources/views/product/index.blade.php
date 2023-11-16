<x-layout>
    <div class="h-10 space-x-8 bg-black text-white flex justify-center items-center">
        <h2>Filter</h2>
        <div class="flex space-x-4">
            <form action="/collection" method="get">
                
                <select name="gender" id="" class="bg-gold text-black">
                    <option value="male"   {{ request('gender')==='male' ? "selected" : "" }}>Male</option>
                    <option value="female" {{ request('gender')==='female' ? "selected" : "" }} >Female</option>
                    <option value="unisex" {{ request('gender')==='unisex' ? "selected" : "" }}>Unisex</option>
                </select>
                <button type="submit" class="bg-white text-black border border-gold px-3">Filter</button>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-3 ">
        @foreach ($products as $product)
            <div class="bg-gold border h-auto border-black">
                <h1>{{ $product->name }}</h1>
                <img src="{{ asset("/storage/" . $product->image) }}" class="aspect-square object-cover object-center">
            </div>
        @endforeach
    </div>
</x-layout>