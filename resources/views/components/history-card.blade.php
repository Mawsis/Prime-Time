@props(['product'])
<div class=" bg-opacity-20 bg-white w-full border border-opacity-20 border-white rounded-xl p-2 flex justify-between items-center space-x-8 h-40">
    <img src="{{ asset("/storage/" . $product->image) }}" class=" object-cover object-center h-full rounded-xl">
    <h2 class=" text-gold ">{{ $product->name }}</h2>
    <h3 class=" text-gold ">{{ $product->price }}$</h3>
</div>