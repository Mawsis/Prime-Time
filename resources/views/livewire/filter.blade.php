<div>
        
        <div class="h-10 space-x-8 bg-black text-white flex justify-center items-center">
            <h2>Filter</h2>
            <div class="flex space-x-4">
                <select wire:model="gender" wire:change='$refresh' class="bg-gold text-black">
                    <option value="all">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
                <input wire:model="priceMin" wire:change='$refresh' type="range" id="range" name="priceMin" min="1" max="15000">
                <output for="range" class="text-white">{{ $priceMin }}</output>
                <input wire:model="priceMax" wire:change='$refresh' type="range" id="range" name="priceMax" min="1" max="15000">
                <output for="range" class="text-white">{{ $priceMax }}</output>
                <input type="text" wire:model.live='search' wire:change='applyFilters' class="text-black">
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
</div>
