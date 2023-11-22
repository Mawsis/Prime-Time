<x-layout>
    <x-logo/>
    <div class="bg-black grid grid-cols-4 px-16 py-20 h-screen">
        <div class=" col-start-1 col-span-2 row-start-1 bg-gray  border border-gold rounded-md p-4 mr-5 mb-2 grid grid-cols-2 -space-y-8 ">
                <h2 class="text-gold font-semibold text-2xl col-start-1 row-start-1">Name :</h2>
                <h2 class="text-white font-semibold text-2xl col-start-2 row-start-2">{{ $user->name }}</h2>
                <h2 class="text-gold font-semibold text-2xl col-start-1 row-start-3">Email :</h2>
                <h3 class="text-white text-xl col-start-2 row-start-4">{{ $user->email }}</h3>

        </div>
        <div class=" col-start-1 col-span-2 row-start-2 bg-gray  border border-gold rounded-md mr-5 mt-2 flex justify-center items-center ">
            <h1 class="text-white text-2xl font-bold">Random</h1>
        </div>
        <div class=" col-start-3 col-span-2 row-span-2 bg-gray border border-gold rounded-md p-4 overflow-y-scroll h-full">
            <h1 class="text-white font-semibold text-xl">Purchases:</h1>
            <div class="flex flex-col mt-5 space-y-4">
                @foreach ($purchases as $purchase)
                    <x-history-card :purchase="$purchase"/>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>