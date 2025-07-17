@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="md:mb-18 max-md:mb-8 relative">
  <img class="w-full object-center object-cover max-md:min-h-[200px] max-h-[400px]" src="{{url('/images/aboutcarousel01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white customFont2 text-5xl font-bold max-md:text-4xl">ABOUT US</div>
    <div class="text-white text-2xl max-md:text-base">關於我們</div>
  </div>
</div>
<!-- story -->
<div class="flex justify-center items-center mx-auto mb-18 max-w-7xl md:px-8 max-lg:px-4 max-md:flex-col-reverse max-md:max-w-[580px] max-md:mb-8">
  <div class="relative md:max-w-[480px] md:min-w-[390px] flex flex-1 flex-col items-end p-8 bg-white -mr-10 max-lg:py-4 max-md:mr-0 max-md:p-0 max-md:mt-4 max-md:items-start">
    <div class="text-main text-2xl max-md:text-base">品牌故事</div>
    <div class="text-end uppercase text-neutral-800 customFont2 text-5xl font-bold mb-4 max-xl:text-5xl break-all max-md:text-3xl max-md:mb-1 max-md:text-start">Brand<br class="max-md:hidden"> Story</div>
    <div class="text-end text-neutral-500 text-lg max-md:text-sm max-md:text-start">
      我們是一家專注於老屋重建與翻新的室內設計公司，結合甲級營造實力，擁有超過30年在地經驗，完成無數屋主與商業空間的夢想藍圖。
    </div>
  </div>
  <div class="flex-2">
    <img class="" src="{{url('/images/aboutwork01.png')}}" alt="">
  </div>
</div>
<div class="flex justify-center items-center mx-auto mb-18 max-w-7xl md:px-8 max-lg:px-4 max-md:flex-col max-md:max-w-[580px] max-md:mb-8">
  <div class="flex-2">
    <img class="max-w-[710px] w-full" src="{{url('/images/aboutwork02.png')}}" alt="">
  </div>
  <div class="relative md:max-w-[480px] md:min-w-[390px] flex flex-1 flex-col items-start p-8 bg-white -ml-10 max-lg:py-4 max-md:ml-0 max-md:p-0 max-md:mt-4">
    <div class="text-main text-2xl max-md:text-base">經營理念</div>
    <div class="uppercase text-neutral-800 customFont2 text-5xl font-bold mb-4 max-xl:text-5xl break-all max-md:text-3xl max-md:mb-1 max-md:text-start">Business<br class="max-md:hidden"> philosophy</div>
    <div class="text-neutral-500 text-lg max-md:text-sm max-md:text-start">
      我們相信，設計不只是裝飾，而是生活方式的延伸。每一個空間規劃，我們都從「人」出發，深入了解客戶的生活習慣、風格喜好與實際需求，打造出既貼心又具品味的專屬空間。
    </div>
  </div>
</div>
<div class="flex justify-center items-center mx-auto mb-18 max-w-7xl md:px-8 max-lg:px-4 max-md:flex-col-reverse max-md:max-w-[580px] max-md:mb-8">
  <div class="relative md:max-w-[480px] md:min-w-[390px] flex flex-1 flex-col items-end p-8 bg-white -mr-10 max-lg:py-4 max-md:mr-0 max-md:p-0 max-md:mt-4 max-md:items-start">
    <div class="text-main text-2xl max-md:text-base">我們的優勢</div>
    <div class="text-end uppercase text-neutral-800 customFont2 text-5xl font-bold mb-4 max-xl:text-5xl break-all max-md:text-3xl max-md:mb-1 max-md:text-start">Our<br class="max-md:hidden"> strength</div>
    <div class="text-end text-neutral-500 text-lg max-md:text-sm max-md:text-start">
      我們強調「快速整合、精準執行」，讓您省去繁瑣協調，安心把家交給我們。從初期構思、圖面設計，到工程執行與軟裝完工，我們都親自參與每一個細節，將您的想法逐步實現。
    </div>
  </div>
  <div class="flex-2">
    <img class="max-w-[710px] w-full" src="{{url('/images/aboutwork03.png')}}" alt="">
  </div>
</div>
<!-- contact -->
<div class="w-full h-[480px] min-w-[390px] flex items-center justify-center max-lg:h-[320px] relative bg-cover bg-center max-md:flex-col max-md:h-auto" style="background-image: url('{{ asset('/images/indexcontact01.png')}}')">
  <div class="h-full flex-1 flex flex-col justify-center items-center gap-4 p-4  max-md:w-full max-md:py-12 max-md:gap-2">
    <div class="customFont2 text-center text-white text-5xl font-bold uppercase max-xl:text-4xl">WORKS</div>
    <div class="text-center text-white text-lg mb-4 max-md:text-sm">
      歡迎欣賞我們的真實作品
      <br>
      讓實力為我們說話
    </div>
    <a href="#" class="bg-main w-fit px-16 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
      了解更多
    </a>
  </div>
  <div class="h-full flex-1 flex flex-col justify-center items-center gap-4 p-4 max-md:w-full max-md:py-12 max-md:gap-2 bg-main/70">
    <div class="customFont2 text-center text-white text-5xl font-bold uppercase max-xl:text-4xl">Contact Us</div>
    <div class="text-center text-white text-lg mb-4 max-md:text-sm">
      體驗最精緻的室內設計
      <br>
      訂製專屬你的宅邸
    </div>
    <a href="#" class="bg-white w-fit px-16 py-3 rounded-[999px] gap-2 text-neutral-800 text-2xl font-normal hover:bg-neutral-800 hover:text-white max-md:text-base max-md:px-8 max-md:py-2">
      立即諮詢
    </a>
  </div>
</div>
@endsection