<div class="overflow-hidden relative">
  <div class="gsapTop">
    <img class="w-full object-center object-cover h-[480px] max-lg:h-[320px]" src="{{url('/images/indexcontact01.png')}}" alt="">
    <div class="absolute inset-0 flex flex-col items-center justify-center gap-4 p-4 max-md:gap-2">
      <div class="customFont3 text-center text-white text-6xl uppercase max-md:text-4xl">Contact Us</div>
      <div class="text-center text-white text-lg mb-4 max-md:text-sm">
        體驗最精緻的室內設計
        <br>
        訂製專屬你的宅邸
      </div>
      @include('layouts.fnbutton',['type'=>'a_xl','title'=>'立即諮詢','url'=>route('fncontact')])
      <!-- <a href="{{ route('fncontact') }}" class="bg-main w-fit px-10 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
        立即諮詢
      </a> -->
    </div>
  </div>
</div>