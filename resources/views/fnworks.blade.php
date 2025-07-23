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
<div class="flex justify-center items-center text-xl mb-6 text-neutral-500 max-md:text-base max-md:mb-2">
  <a href="{{ route('fnworks') }}" class="hover:text-main px-6 py-1 max-md:px-3 {{ $class==0 ? 'text-main' : '' }}">全部案例</a>
  <span class="w-[1px] h-6 bg-neutral-200"></span>  
  <a href="{{ route('fnworks',1) }}" class="hover:text-main px-6 py-1 max-md:px-3 {{ $class==1 ? 'text-main' : '' }}">修繕案例</a>
  <span class="w-[1px] h-6 bg-neutral-200"></span>  
  <a href="{{ route('fnworks',2) }}" class="hover:text-main px-6 py-1 max-md:px-3 {{ $class==2 ? 'text-main' : '' }}">重建案例</a>
</div> 
<div class="grid grid-cols-2 gap-8 mx-auto max-w-7xl mb-12 max-md:px-4 max-md:grid-cols-1">
  @foreach ( $datas as $data)
  <a href="{{ route('fnworkmore',['id' => $data->id]) }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{ URL::asset('images/'.$data->cover.'?'.rand()) }}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">{{$data->title}}</p>
  </a>
  @endforeach
  {{-- <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto02.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a>
  <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto03.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a>
  <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto04.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a>
  <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto05.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a>
  <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto06.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a>
  <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto07.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a>
  <a href="{{ route('fnworkmore') }}" class="flex flex-col items-center gpa-4">
    <img class="w-full" src="{{url('/images/worksphoto08.png')}}" alt="">
    <p class="text-neutral-500 mt-2 text-xl">安南區商60</p>
  </a> --}}
</div>
@include('layouts.fncontact')
@endsection