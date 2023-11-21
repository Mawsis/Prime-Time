<div>
        
        <div class="h-10 space-x-8 bg-black text-white flex justify-center items-center">
            <h2>Filter</h2>
            <div class="flex space-x-4 items-center">
                <select wire:model="gender" wire:change='applyFilter' class="bg-gold text-black">
                    <option value="all">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
                <select wire:model="trending" wire:change='applyFilter' class="bg-gold text-black">
                    <option value="all">All</option>
                    <option value="trending">Trending</option>
                    <option value="unique">Unique</option>
                </select>
                <div class="flex justify-center items-center space-x-1">
                    <label for="priceMin" class="block mb-2 text-sm font-medium text-white">Price Min</label>
                    <input id="priceMin" type="range" class="w-full h-2 bg-white rounded-lg appearance-none cursor-pointer" 
                    wire:model="priceMin" wire:change='applyFilter'  name="priceMin" min="1" max="15000">
                    <div>{{ $priceMin }}</div>
                </div>                
                <div class="flex justify-center items-center space-x-1">
                    <label for="priceMax" class="block mb-2 text-sm font-medium text-white">Price Max</label>
                    <input id="priceMax" type="range" class="w-full h-2 bg-white rounded-lg appearance-none cursor-pointer" 
                    wire:model="priceMax" wire:change='applyFilter'  name="priceMax" min="1" max="15000">
                    <div>{{ $priceMax }}</div>
                </div>                

                <input type="text" placeholder="Search" wire:model.live='search' wire:change='applyFilter' class="text-black p-1">
            </div>
        </div>
        <div class="grid grid-cols-3 ">
            @foreach ($products as $product)
                <div class="bg-gold border h-auto border-black">
                    <h1><a href="/collection/{{ $product->slug }}">{{ $product->name }}</a></h1>
                    <img src="{{ asset("/storage/" . $product->image) }}" class="aspect-square object-cover object-center">
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
</div>
