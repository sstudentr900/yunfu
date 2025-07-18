@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="md:mb-18 max-md:mb-8 relative">
  <img class="w-full object-center object-cover max-md:min-h-[200px] max-h-[400px]" src="{{url('/images/customization01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white customFont3 text-6xl uppercase max-md:text-4xl">Customization</div>
    <div class="text-white text-2xl max-md:text-base">專屬客製</div>
  </div>
</div>
<!-- story -->
<div class="flex justify-center items-center mx-auto max-w-7xl md:px-8 max-lg:px-4">
  <div class="flex justify-center items-center gap-8 pb-8 mb-8 border-b-1 border-neutral-200 max-md:flex-col-reverse max-md:gap-2">
    <div class="relative md:max-w-[340px] flex flex-1 flex-col bg-white max-md:items-start">
      <div class="text-main text-2xl uppercase mb-2 max-md:text-base max-md:mb-0">Step 01</div>
      <div class="flex items-center text-neutral-800 customFont2 text-7xl font-bold mb-4 gap-4 max-xl:text-5xl max-md:text-5xl max-md:mb-1">
        外觀
        <div class="w-8">
          <svg class="w-full h-auto fill-current" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 49.5L51 4.5M51 4.5H6M51 4.5V49.5" stroke="#1E1E1E" stroke-width="8" stroke-linecap="square"/>
          </svg>
        </div>
      </div>
      <div class="text-neutral-500 text-lg max-md:text-sm max-md:text-start">
        我們擁有甲級營造資質與30年結構實作經驗，不僅了解每一吋鋼筋與混凝土，更懂如何將你的需求融入結構之中。不被格局限制，從地基到樑柱，全為你量身打造。
      </div>
    </div>
    <div class="flex-2">
      <img class="" src="{{url('/images/customizationwork01.png')}}" alt="">
    </div>
  </div>
</div>
<div class="flex justify-center items-center mx-auto max-w-7xl md:px-8 max-lg:px-4">
  <div class="flex justify-center items-center gap-8 pb-8 mb-8 border-b-1 border-neutral-200 max-md:flex-col-reverse max-md:gap-2">
    <div class="relative md:max-w-[340px] flex flex-1 flex-col bg-white max-md:items-start">
      <div class="text-main text-2xl uppercase mb-2 max-md:text-base max-md:mb-0">Step 02</div>
      <div class="flex items-center text-neutral-800 customFont2 text-7xl font-bold mb-4 gap-4 max-xl:text-5xl max-md:text-5xl max-md:mb-1">
        結構
        <div class="w-8">
          <svg class="w-full h-auto fill-current" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 49.5L51 4.5M51 4.5H6M51 4.5V49.5" stroke="#1E1E1E" stroke-width="8" stroke-linecap="square"/>
          </svg>
        </div>
      </div>
      <div class="text-neutral-500 text-lg max-md:text-sm max-md:text-start">
        我們擁有甲級營造資質與30年結構實作經驗，不僅了解每一吋鋼筋與混凝土，更懂如何將你的需求融入結構之中。不被格局限制，從地基到樑柱，全為你量身打造。
      </div>
    </div>
    <div class="flex-2">
      <img class="" src="{{url('/images/customizationwork02.png')}}" alt="">
    </div>
  </div>
</div>
<div class="flex justify-center items-center mx-auto max-w-7xl md:px-8 max-lg:px-4">
  <div class="flex justify-center items-center gap-8 pb-8 mb-8 border-b-1 border-neutral-200 max-md:flex-col-reverse max-md:gap-2">
    <div class="relative md:max-w-[340px] flex flex-1 flex-col bg-white max-md:items-start">
      <div class="text-main text-2xl uppercase mb-2 max-md:text-base max-md:mb-0">Step 03</div>
      <div class="flex items-center text-neutral-800 customFont2 text-7xl font-bold mb-4 gap-4 max-xl:text-5xl max-md:text-5xl max-md:mb-1">
        格局
        <div class="w-8">
          <svg class="w-full h-auto fill-current" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 49.5L51 4.5M51 4.5H6M51 4.5V49.5" stroke="#1E1E1E" stroke-width="8" stroke-linecap="square"/>
          </svg>
        </div>
      </div>
      <div class="text-neutral-500 text-lg max-md:text-sm max-md:text-start">
        我們相信，理想居所從「格局」開始被實現。不套用制式設計，而是根據生活動線、採光、需求規劃，量身打造屬於你的專屬格局配置，讓每一步都合乎你心。
      </div>
    </div>
    <div class="flex-2">
      <img class="" src="{{url('/images/customizationwork03.png')}}" alt="">
    </div>
  </div>
</div>
<div class="flex justify-center items-center mx-auto max-w-7xl md:px-8 max-lg:px-4">
  <div class="flex justify-center items-center gap-8 pb-8 mb-8 max-md:flex-col-reverse max-md:gap-2">
    <div class="relative md:max-w-[340px] flex flex-1 flex-col bg-white max-md:items-start">
      <div class="text-main text-2xl uppercase mb-2 max-md:text-base max-md:mb-0">Step 04</div>
      <div class="flex items-center text-neutral-800 customFont2 text-7xl font-bold mb-4 gap-4 max-xl:text-5xl max-md:text-5xl max-md:mb-1">
        裝潢
        <div class="w-8">
          <svg class="w-full h-auto fill-current" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 49.5L51 4.5M51 4.5H6M51 4.5V49.5" stroke="#1E1E1E" stroke-width="8" stroke-linecap="square"/>
          </svg>
        </div>
      </div>
      <div class="text-neutral-500 text-lg max-md:text-sm max-md:text-start">
        我們提供全方位客製化裝潢與家電配置服務，從櫃體設計到家電收納、動線規劃到使用習慣，每一處細節都為你的生活方式量身打造，讓空間美學與實用機能完美融合。
      </div>
    </div>
    <div class="flex-2">
      <img class="" src="{{url('/images/customizationwork04.png')}}" alt="">
    </div>
  </div>
</div>
@include('layouts.fncontact')
@endsection