@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="mb-10 relative max-md:mb-6">
  <img class="w-full object-center object-cover max-md:min-h-[200px] max-h-[400px]" src="{{url('/images/works01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white customFont3 text-7xl uppercase max-md:text-5xl">WORKS</div>
    <div class="text-white text-2xl max-md:text-base">作品案例</div>
  </div>
</div>
<!-- list -->
<div class="grid grid-cols-3 gap-8 mx-auto max-w-7xl mb-10 max-lg:gap-4 max-lg:px-4 max-md:grid-cols-1">
  @foreach ( $datas as $data)
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{ URL::asset('images/'.$data->cover.'?'.rand()) }}" alt="">
  </div>
  @endforeach
  <!-- <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto02.png')}}" alt="">
  </div>
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto03.png')}}" alt="">
  </div>
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto04.png')}}" alt="">
  </div>
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto05.png')}}" alt="">
  </div>
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto06.png')}}" alt="">
  </div>
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto07.png')}}" alt="">
  </div>
  <div class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto08.png')}}" alt="">
  </div> -->
</div>
<div class="flex items-center justify-center mb-18">
  <a class="cursor-pointer bg-white px-10 py-2 rounded-[999px] text-neutral-500 text-xl hover:bg-neutral-800 hover:text-white hover:border-neutral-800 max-md:text-base border border-neutral-300" href="{{route('fnworks')}}">回上一頁</a>
</div>
@include('layouts.fncontact')
@endsection