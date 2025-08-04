@if($type=="a_lg")
<div class="overflow-hidden">
  <div class="gsapText">
    <a href="{{ $url }}" class="bg-main w-fit px-8 py-2 rounded-[999px] gap-2 text-white text-lg inline-block duration-600 ease-in-out hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">{{$title}}</a>
  </div>
</div>
@elseif($type=="a_xl")
<div class="overflow-hidden">
  <div class="gsapText">
    <a href="{{ $url }}" class="bg-main w-fit px-12 py-3 rounded-[999px] gap-2 text-white text-xl inline-block duration-600 ease-in-out hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">{{$title}}</a>
  </div>
</div>
@elseif($type=="b_lg")
  <a class="cursor-pointer bg-white px-8 py-2 rounded-[999px] text-neutral-500 text-lg duration-600 ease-in-out hover:bg-neutral-800 hover:text-white hover:border-neutral-800 max-md:text-base border border-neutral-300" href="{{ $url }}">{{$title}}</a>
@endif