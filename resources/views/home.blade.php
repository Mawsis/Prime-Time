<x-layout>
  <div class="big w-screen h-screen bg-cover bg-no-repeat ">
    <div class="small w-full h-full p-5">
      <div class="grid grid-cols-12">
        <div class="flex flex-col justify-center col-span-1 text-white px-8 -space-y-2 text-lg">
          <div class=" text-left">Prime</div>
          <div class="text-gold text-right font-semibold" style="font-family: 'Playfair Display';">Time</div>
        </div>
        <div class="flex justify-between col-span-6 col-start-4 text-white py-3">
          <h3><a href="/collection" class="hover:text-gold transition-all"> Collection </a></h3>
          <h3><a href="/collection?g=male" class="hover:text-gold transition-all"> Men</a></h3>
          <h3><a href="/collection?g=female" class="hover:text-gold transition-all"> Women</a></h3>
          <h3><a href="/collection?t-trending" class="hover:text-gold transition-all"> Trending</a></h3>
        </div>
        <div class=" col-start-11 col-span-2 flex justify-center items-center space-x-8 text-white">
          @auth
          <a href="/profile" class="hover:text-gold transition-all"><h1>Profile</h1></a>
          <form action="/logout" method="post" >
            @csrf
            <input type="submit" value="Logout" class=" cursor-pointer hover:text-gold transition-all">
          </form>
          @else
            <a href="/register" class="hover:text-gold transition-all"><h1>Sign Up</h1></a>
            <a href="/login" class="hover:text-gold transition-all"><h1>Sign In</h1></a>
          @endauth
        </div>
      </div>
      <div class="flex flex-col justify-center items-center pt-[38vh]">
        <div class="text-white font-semibold text-5xl text-center opacity-80">
          Timeless Elegance, Unrivaled Precision: <br>
          Where Luxury Meets Your Wrist.
        </div>
        <div class=" text-yellow font-light text-base text-center opacity-80 mt-6">
          Prime Time: Find Your Perfect Fit, Crafted for Your Every Moment.
        </div>
        <div>
          <button class="px-9 py-2 bg-black text-yellow border border-yellow-500 mt-8 font-semibold text-base hover:bg-yellow hover:text-black">
            Search
          </button>
        </div>
      </div>
    </div>
  </div>
  <style>
    .big{
      background-image: url('/img/home-bg.jpg');
      background-position-y:-15vh;
    }
    .small{
      background: linear-gradient(180deg, rgba(221, 164, 0, 0.14) 0%, rgba(51, 51, 51, 0.25) 39.58%, rgba(51, 51, 51, 0.55) 100%);  width: 100vw;
    }
  </style>
</x-layout>