@extends('layouts.fn')
@section('content')
<!-- Carousel -->
@include('layouts.fncarousel', [
  'text_tw' => '關於我們',
  'text_en' => 'ABOUT US',
  'url' => url('/images/aboutcarousel01.png'),
])
<!-- about -->
@include('layouts.fnabout', [
  'title' => '品牌故事',
  'text_en1' => 'Brand',
  'text_en2' => 'Story',
  'text' => '我們是一家專注於老屋重建與翻新的室內設計公司，結合甲級營造實力，擁有超過30年在地經驗，完成無數屋主與商業空間的夢想藍圖。',
  'url' => url('/images/aboutwork01.png'),
  'direction'=>'l'
])
@include('layouts.fnabout', [
  'title' => '經營理念',
  'text_en1' => 'Business',
  'text_en2' => 'philosophy',
  'text' => '我們相信，設計不只是裝飾，而是生活方式的延伸。每一個空間規劃，我們都從「人」出發，深入了解客戶的生活習慣、風格喜好與實際需求，打造出既貼心又具品味的專屬空間。',
  'url' => url('/images/aboutwork02.png'),
  'direction'=>'r'
])
@include('layouts.fnabout', [
  'title' => '我們的優勢',
  'text_en1' => 'Our',
  'text_en2' => 'strength',
  'text' => '我們強調「快速整合、精準執行」，讓您省去繁瑣協調，安心把家交給我們。從初期構思、圖面設計，到工程執行與軟裝完工，我們都親自參與每一個細節，將您的想法逐步實現。',
  'url' => url('/images/aboutwork03.png'),
  'direction'=>'l'
])
<!-- contact -->
<div class="overflow-hidden relative">
  <div class="gsapTop">
    <img class="w-full object-center object-cover h-[480px] max-lg:h-[520px]" src="{{url('/images/indexcontact01.png')}}" alt="">
    <div class="absolute inset-0 flex max-md:flex-col max-md:h-auto">
      <div class="h-full flex-1 flex flex-col justify-center items-center gap-4 p-4  max-md:w-full max-md:py-12 max-md:gap-2">
        <div class="customFont3 text-center text-white text-5xl uppercase max-xl:text-4xl">WORKS</div>
        <div class="text-center text-white text-lg mb-4 max-md:text-sm">
          歡迎欣賞我們的真實作品
          <br>
          讓實力為我們說話
        </div>
        @include('layouts.fnbutton',['type'=>'a_xl','title'=>'了解更多','url'=>route('fnworks')])
        <!-- <a href="{{ route('fnworks') }}" class="bg-main w-fit px-16 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
          了解更多
        </a> -->
      </div>
      <div class="h-full flex-1 flex flex-col justify-center items-center gap-4 p-4 max-md:w-full max-md:py-12 max-md:gap-2 bg-main/70">
        <div class="customFont3 text-center text-white text-5xl uppercase max-xl:text-4xl">Contact Us</div>
        <div class="text-center text-white text-lg mb-4 max-md:text-sm">
          體驗最精緻的室內設計
          <br>
          訂製專屬你的宅邸
        </div>
        <a href="{{ route('fncontact') }}" class="bg-white w-fit px-12 py-3 rounded-[999px] gap-2 text-neutral-800 text-xl font-normal hover:bg-neutral-800 hover:text-white max-md:text-base max-md:px-8 max-md:py-2">
          立即諮詢
        </a>
      </div>
    </div>
  </div>
</div>
@endsection