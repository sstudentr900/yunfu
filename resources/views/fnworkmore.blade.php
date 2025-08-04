@extends('layouts.fn')
@section('content')
<!-- Carousel -->
@include('layouts.fncarousel', [
  'text_tw' => '作品案例',
  'text_en' => 'WORKS',
  'url' => url('/images/works01.png'),
])
<!-- list -->
<div class="grid grid-cols-3 gap-8 mx-auto max-w-7xl mb-10 max-lg:gap-4 max-lg:px-4 max-md:grid-cols-1">
  @foreach ( $datas as $data)
  <div class="gsapTop flex flex-col items-center gpa-4">
    <div class="overflow-hidden w-full">
      <!-- duration-400 ease-in-out hover:scale-110 hover:rotate-2 -->
      <img class="w-full" src="{{ URL::asset('images/'.$data->cover.'?'.rand()) }}" alt="">
    </div>
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
<div class="gsapTop flex items-center justify-center mb-18">
  <!-- <a class="cursor-pointer bg-white px-10 py-2 rounded-[999px] text-neutral-500 text-xl hover:bg-neutral-800 hover:text-white hover:border-neutral-800 max-md:text-base border border-neutral-300" href="{{route('fnworks')}}"></a> -->
  @include('layouts.fnbutton',['type'=>'b_lg','title'=>'回上一頁','url'=>route('fnworks')])
</div>
@include('layouts.fncontact')
@endsection