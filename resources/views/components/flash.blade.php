@if (session()->has('success'))
    <div x-data='{show:true}' x-init="setTimeout(()=>show=false,4000)" x-show='show' class="fixed bg-black border border-gold text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
        <button @click="show = false" class="text-center bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg></button>
    </div>
@endif
@if (session()->has('fail'))
    <div x-data='{show:true}' x-init="setTimeout(()=>show=false,4000)" x-show='show' class="fixed bg-gold border border-black text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('fail') }}</p>
        <button @click="show = false" class="text-center bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg></button>
    </div>
@endif