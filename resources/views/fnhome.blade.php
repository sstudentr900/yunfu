@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="gsapCarousel md:mb-18 max-md:mb-12">
  <div class="homeSlick1">
    <!--img1400*620 -->
    <img src="{{url('/images/indexcarousel01.png')}}" alt="" loading="lazy">
    <img src="{{url('/images/indexcarousel02.png')}}" alt="" loading="lazy">
    <img src="{{url('/images/indexcarousel03.png')}}" alt="" loading="lazy">
  </div>
</div>
<!-- company -->
<div class="flex jusify-center items-center m-auto mb-18 gap-16 max-w-7xl max-[1420px]:items-start max-2xl:gap-8 md:px-8 max-lg:px-4 max-md:flex-col max-md:max-w-[440px] max-md:mb-8 max-sm:gap-4">
  <div class="sticky top-[10px] flex-1 flex gap-4 md:justify-center">
    <div class="gsapTextTop max-w-[400px] flex flex-col mt-8 max-md:mt-0">
      <div class="overflow-hidden">
        <div class="gsapText text-main text-2xl max-md:text-base">公司介紹</div>
      </div>
      <div class="overflow-hidden mb-4">
        <div class="gsapText max-w-[300px] text-neutral-800 customFont2 text-7xl font-bold max-sm:text-6xl max-sm:max-w-[280px]">
          家的溫度<br class="hidden">由您定義
        </div>
      </div>
      <div class="overflow-hidden mb-4">
        <div class="gsapText text-justify text-neutral-500 text-lg max-md:text-sm">我們是一家專注於新建 重建 翻新的 建築設計、工程與室內設計、工程的團隊 ，結合甲級營造實力，擁有超過30年在地經驗，完成無數屋主與商業空間的夢想藍圖。我們相信，設計不只是裝飾，而是生活方式的延伸。</div>
      </div>
      @include('layouts.fnbutton',['type'=>'a_lg','title'=>'了解更多','url'=>route('fnabout')])
      <!-- <div class="overflow-hidden">
        <a href="{{ route('fnabout') }}" class="gsapText bg-main w-fit px-8 py-2 rounded-[999px] gap-2 text-white text-xl inline-block hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">了解更多</a>
      </div> -->
    </div>
  </div>
  <div class="gsapImg flex gap-4 max-[1420px]:flex-col max-[1420px]:relative max-[1420px]:pr-6 max-[1420px]:pt-6 max-xl:w-full max-xl:max-w-[330px] max-md:max-w-full max-md:items-end max-md:pr-4 max-md:pt-4">
    <div class="z-10">
      <img class="max-w-[359px] max-h-[320px] w-full" src="{{url('/images/indexcompany04.png')}}" alt="">
    </div>
    <div class="z-10">
      <img class="max-w-[359px] max-h-[320px] w-full" src="{{url('/images/indexcompany03.png')}}" alt="">
    </div>
    <div class="hidden absolute top-0 right-0 w-[120px] h-[120px] bg-main max-[1420px]:block"></div>
  </div>
  <!-- <div class="max-lg:flex max-lg:justify-end ">
    <img class="max-w-[390px] w-full" src="{{url('/images/indexcompany03.png')}}" alt="">
    <img class="max-w-[390px] w-full" src="{{url('/images/indexcompany04.png')}}" alt="">
  </div> -->
</div>
<!-- ad -->
<div class="overflow-hidden relative z-20 mb-18 flex justify-center p-16 pt-0 bg-linear-to-b from-white from-50% to-[#736156] to-50% max-md:px-0 max-md:from-20% max-md:to-20%">
  <div class="flex justify-center items-end relative max-w-7xl px-8 max-xl:px-0 max-md:flex-col max-md:items-start">
    <div class="gsapImg flex-1 max-md:pl-20">
      <img src="{{url('/images/indexbathroom01.png')}}" alt="">
    </div>
    <div class="gsapLeft md:absolute md:-bottom-4 md:-left-4 flex justify-center items-end bg-white py-2 px-4 max-md:mb-4 max-md:-mt-40 max-md:mx-8 max-sm:mx-4">
      <span class="text-main text-7xl font-bold max-md:text-6xl">8.8</span>
      <span class="text-main text-6xl font-bold customFont2 max-md:text-6xl">萬</span>
      <span class="flex items-center justify-center text-white text-xs font-bold rounded-[999px] bg-neutral-800 p-2 w-6 h-6 -ml-3 max-md:-ml-2">起</span>
    </div>
    <div class="gsapRight relative z-10 flex-1 flex flex-col p-8 bg-white max-w-[580px] md:-ml-12 max-md:mx-8 max-sm:max-w-[340px] max-sm:mx-4 max-sm:p-4">
      <div class="overflow-hidden mb-4">
        <div class="gsapText text-main text-2xl max-md:text-base">名額有限X限時優惠</div>
      </div>
      <div class="overflow-hidden mb-4">
        <div class="gsapText text-neutral-800 customFont2 text-7xl font-bold max-sm:text-6xl">
          浴室翻新
          <br>
          整修專案
        </div>
      </div>
      <div class="overflow-hidden mb-4">
        <div class="gsapText text-justify text-neutral-500 text-lg max-md:text-sm">
          專案內容有防護工程 / 丈量配置設計 / 配電 / 改管 / 拆除 / 清運 / 打底 / 天花板 / 崁燈 / 壁磚 / 地磚 / 防水(滿頂) / 衛浴設備安裝(毛巾架 / 馬桶 / 洗手台)，此價格為1坪浴廁翻新價格，不含衛浴設備，限定台南市區，最終價格依現場評估為主。
        </div>
      </div>
      @include('layouts.fnbutton',['type'=>'a_lg','title'=>'了解更多','url'=> route('fncontact')])
      <!-- <div class="overflow-hidden">
        <a href="{{ route('fncontact') }}" class="gsapText bg-main w-fit px-10 py-3 rounded-[999px] gap-2 text-white text-2xl inline-block hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">了解更多</a>
      </div> -->
    </div>
  </div>
</div>
@include('layouts.fnservices')
<!-- work -->
<div class="work overflow-hidden flex flex-col pr-8 max-lg:px-8 max-md:px-4">
  <div class="flex justify-between items-end mb-4">
    <div class="gsapTextTop inline-flex flex-col justify-start items-start">
      <div class="overflow-hidden">
        <div class="gsapText text-main justify-center text-2xl max-md:text-lg">精選作品</div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText justify-center text-neutral-800 text-7xl customFont3 uppercase max-sm:text-5xl">work</div>
      </div>
    </div>
    @include('layouts.fnbutton',['type'=>'a_lg','title'=>'了解更多','url'=>route('fnworks')])
    <!-- <a href="{{ route('fnworks') }}" class="gsapRight bg-main w-fit px-10 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
      了解更多
    </a> -->
  </div>
  <div class="gsapTop homeSlick2 mb-8">
    @foreach ( $datas as $data)
    <div class="p-2">
      <a class="relative" href="{{ route('fnworkmore',['id' => $data->id]) }}">
        <div class="overflow-hidden">
          <!-- hover:rotate-2  -->
          <img class="w-full object-cover h-96 duration-600 ease-in-out hover:scale-110 max-md:h-80 max-sm:h-64" src="{{ URL::asset('images/'.$data->cover.'?'.rand()) }}" alt="">
        </div>
        <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90% max-md:px-2">
          <div class="text-white text-xl font-bold max-md:text-base">{{$data->title}}</div>
          <div class="text-white text-base max-md:text-sm">{{$data->name}}</div>
        </div>
      </a>
    </div>
    @endforeach
    <!-- <div class="p-2">
      <a class="relative">
        <img class="w-full object-center" src="{{url('/images/indexwork02.png')}}" alt="">
        <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90% max-md:px-2">
          <div class="text-white text-2xl font-bold max-md:text-base">東區大同段</div>
          <div class="text-white text-lg max-md:text-sm">電梯雙車</div>
        </div>
      </a>
    </div>
    <div class="p-2">
      <a class="relative">
        <img class="w-full object-center" src="{{url('/images/indexwork05.png')}}" alt="">
        <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90% max-md:px-2">
          <div class="text-white text-2xl font-bold max-md:text-base">同安路</div>
          <div class="text-white text-lg max-md:text-sm">重建案例</div>
        </div>
      </a>
    </div>
    <div class="p-2">
      <a class="relative">
        <img class="w-full object-center" src="{{url('/images/indexwork03.png')}}" alt="">
        <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90% max-md:px-2">
          <div class="text-white text-2xl font-bold max-md:text-base">安南區商60</div>
          <div class="text-white text-lg max-md:text-sm">七米電梯雙車</div>
        </div>
      </a>
    </div>
    <div class="p-2">
      <a class="relative">
        <img class="w-full object-center" src="{{url('/images/indexwork04.png')}}" alt="">
        <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90% max-md:px-2">
          <div class="text-white text-2xl font-bold max-md:text-base">府安路5段</div>
          <div class="text-white text-lg max-md:text-sm">電梯雙車</div>
        </div>
      </a>
    </div> -->
  </div>
</div>
@include('layouts.fncontact')
@endsection