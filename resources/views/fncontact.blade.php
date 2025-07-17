@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="md:mb-18 max-md:mb-8 relative">
  <img class="w-full object-center object-cover max-md:min-h-[200px] max-h-[400px]" src="{{url('/images/service01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white customFont2 text-5xl font-bold uppercase max-md:text-4xl">CONTACT</div>
    <div class="text-white text-2xl max-md:text-base">聯絡我們</div>
  </div>
</div>
<div class="m-auto mb-18 px-8 relative max-w-7xl max-md:px-4 max-md:mb-8">
  <div class="flex flex-col mb-4">
    <div class="text-main text-2xl max-md:text-lg">立即填寫預約表單・專人一對一諮詢</div>
    <div class="justify-center text-neutral-800 text-7xl font-bold customFont2 uppercase max-sm:text-5xl">Online Form</div>
  </div>
  <div class="">
    <div class="flex justify-start items-start gap-12 max-lg:gap-0 max-lg:flex-col">
      <div></div>
    </div>
  </div>
</div>
@include('layouts.fncontact')
@endsection