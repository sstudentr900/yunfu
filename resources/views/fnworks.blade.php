@extends('layouts.fn')
@section('content')
<!-- Carousel -->
@include('layouts.fncarousel', [
'text_tw' => '作品案例',
'text_en' => 'WORKS',
'url' => url('/images/works01.png'),
])
<!-- list -->
<div class="overflow-hidden mb-6 max-md:mb-2">
  <div class="gsapBottom flex justify-center items-center text-xl text-neutral-500 max-md:text-base ">
    <a href="{{ route('fnworks') }}" class="hover:text-main px-6 py-1 max-md:px-3 {{ $class==0 ? 'text-main' : '' }}">全部案例</a>
    <span class="w-[1px] h-6 bg-neutral-200"></span>
    <a href="{{ route('fnworks',1) }}" class="hover:text-main px-6 py-1 max-md:px-3 {{ $class==1 ? 'text-main' : '' }}">修繕案例</a>
    <span class="w-[1px] h-6 bg-neutral-200"></span>
    <a href="{{ route('fnworks',2) }}" class="hover:text-main px-6 py-1 max-md:px-3 {{ $class==2 ? 'text-main' : '' }}">重建案例</a>
  </div>
</div>
<div class="grid grid-cols-2 gap-8 mx-auto max-w-7xl mb-12 max-md:px-4 max-md:grid-cols-1">
  @foreach ( $datas as $data)
  <a href="{{ route('fnworkmore',['id' => $data->id]) }}" class="gsapTop flex flex-col items-center gpa-4 group">
    <div class="overflow-hidden w-full">
      <!-- group-hover:rotate-2 -->
      <img class="w-full duration-600 ease-in-out group-hover:scale-110" src="{{ URL::asset('images/'.$data->cover.'?'.rand()) }}" alt="">
    </div>
    <p class="text-neutral-500 mt-2 text-xl group-hover:text-main">{{$data->title}}</p>
  </a>
  @endforeach
</div>
@include('layouts.fncontact')
@endsection