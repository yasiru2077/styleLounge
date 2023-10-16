<x-app-layout>
  <div>
    @php
    $name = Auth::user()->name;
    @endphp
    
<nav class="bg-white border-gray-200 dark:bg-black">
<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center">
      <span style="font-weight: 400" class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $name }}</span>
  </a>
  <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
  </button>
  <div class="hidden w-full md:block md:w-auto" id="navbar-default">
    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-black dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
      </li>
      <li>
        <a href="{{ route('goToCart.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Cart</a>
      </li>
      <li>
        <a href="{{ route('review.create') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Feedback</a>
      </li>
      <li>
        <a href="{{ route('subscription.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Subscribe</a>
      </li>
    </ul>
  </div>
</div>
</nav>

</div>

    <div class="relative text-center text-cyan-50">
      <img style="width: 100%;" src="https://wallpapercrafter.com/desktop7/1752155-japan-tokyo-black-and-white-water-blurr-blurry.jpg" alt="">
      <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black px-4 py-4 group hover:text-black hover:bg-white transition duration-300 hover:scale-105">
        <h1 class="text-2xl">Get This Dress</h1>
      </button>
      
    </div>
    <div class="p-10">
      <h2 class="text-center text-2xl">In The Press</h2>
      <div class="flex flex-wrap justify-center gap-20 items-center p-10">
        <img class=" w-60 " src="https://dissh.com/cdn/shop/files/VOGUE_LOGO_cropped_3b95af3c-0ae7-413e-b4a1-5a1d4deceddd.svg?v=1683699287&width=200" alt="">
        <img class=" w-60 " src="https://dissh.com/cdn/shop/files/Harper_s_Bazaar_Logo.svg?v=1683699287&width=200" alt="">
        <img class=" w-50 " src="https://dissh.com/cdn/shop/files/Grazia-Logo.svg?v=1684130931&width=200" alt="">
        <img class=" w-60 " src="https://dissh.com/cdn/shop/files/Marie_Claire_Magazine_logo.svg?v=1683699287&width=200" alt="">
        <img class=" w-60 " src="https://dissh.com/cdn/shop/files/who-what-wear_1.svg?v=1684131255&width=200" alt="">
      </div>
    </div>
    

  <h2  class="text-center text-4xl p-4 text-white bg-black">Categories</h2>

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 m-5">
  <div class="grid gap-4">
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://cottonon.com/dw/image/v2/BBDS_PRD/on/demandware.static/-/Sites-catalog-master-women/default/dw9271eeef/2054995/2054995-04-2.jpg?sw=400&sh=600&sm=fit" alt="">
          <h3>Tops</h3>
        </div>
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://www.thebudgetfashionista.com/wp-content/uploads/2013/10/where-buy-womens-suits.jpg.webp" alt="">
          <h3>Suits</h3>
      </div>
     
  </div>
  <div class="grid gap-4">
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://cdn.shopify.com/s/files/1/0263/6018/4892/products/IMG_5484_f40ea814-4e54-4f07-959d-6cc97deb1706_610x.jpg?v=1681873437" alt="">
          <h3>Dresses</h3>
        </div>
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://cdn.media.amplience.net/i/rb/WDD23S1927B1PR-431-A/Vintage-Cut-Off-4-Short---Prim-431?$large$&fmt=auto" alt="">
          <h3>Shorts</h3>
      </div>
      
  </div>
  <div class="grid gap-4">
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://img-trendyol.mncdn.com/mnresize/400/-/ty9/product/media/images/20200823/18/8638676/56270191/1/1_org_zoom.jpg" alt="">
          <h3>Skrits</h3>
        </div>
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://www.lulus.com/images/product/xlarge/4936550_940982.jpg?w=195&hdpi=1" alt="">
          <h3>Sweater</h3>
      </div>
      
  </div>
  <div class="grid gap-4">
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://assets.ajio.com/medias/sys_master/root/20230605/gupv/647e026bd55b7d0c634d89b6/-473Wx593H-443006387-ltblue-MODEL.jpg" alt="">
          <h3>Pants</h3>
        </div>
      <div>
          <img class="h-auto max-w-full cursor-pointer filter grayscale hover:grayscale-0" src="https://i.pinimg.com/736x/09/6a/b1/096ab1a488fb28f4afc8e2edb0576092.jpg" alt="">
          <h3>Coats</h3>
      </div>
      
  </div>
</div>

<h2  class="text-center text-2xl p-4 text-white bg-black">Signature Dresses</h2>

<div class=" flex flex-wrap gap-5 justify-center">

  @foreach ( $items as $item)
  @if ($item->item_category === 'Signature Dresses')
  <div class="group my-10 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
    <a class="relative flex h-60 overflow-hidden" href="#">
      <img class="absolute top-0 right-0 h-full w-full object-cover" src={{ $item->image }} alt="product image" />
      <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
        <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
        <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div>
        <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div> 
      </div>
      <div class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
        <form action="">
          <button class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
          </button>
        </form>
      </div>
    </a>
    <div class="mt-4 px-5 pb-5">
      <a href="#">
        <h5 class="text-xl tracking-tight text-slate-900">{{ $item->item_name }}</h5>
      </a>
      <div class="mt-2 mb-5 flex items-center justify-between">
        <p>
          <span class="text-3xl font-bold text-slate-900">${{ $item->item_price }}</span>
          <span class="text-sm text-slate-900 line-through">$99</span>
        </p>
      </div>
      <form action="/addtoCart" method="post" class="flex gap-2 justify-center text-center">
        @csrf
        <input type="hidden" name="name" value="{{ $name }}">
        <input class="border-2" type="number" name="item_count" value="1" min="1">
        <input type="hidden" name="item_name" value="{{ $item->item_name }}">
        <input type="hidden" name="item_price" value="{{ $item->item_price }}">
        <input type="hidden" name="item_category" value="{{ $item->item_category }}">
        <button type="submit" class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
        </button>
    </form>
    
      
    </div>
  </div>
  @endif
  @endforeach
  

</div>
  
      

    
</x-app-layout>

