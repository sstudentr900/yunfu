<!DOCTYPE html>
<html lang="zh-tw">

<head>
  @include('layouts.public_head')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="relative bg-stone-800">
    <img class="w-full h-screen object-center object-cover opacity-6 blur-xs grayscale" src="{{url('/images/worksphoto04.png')}}" alt="">
    <div class="absolute inset-0 p-8 pt-0 flex gap-8">
      <div class="flex-none w-[190px]">
        <a href="{{ route('bamanager') }}" class="w-[190px] h-[180px] bg-main flex justify-center items-center">
          <img src="{{url('/images/logo.svg')}}" alt="">
        </a>
        <ul class="mt-18 flex flex-col gap-4 text-2xl text-white">
          <li class="text-center">
            <a href="{{ URL::asset('bamanager') }}" class="hover:text-main {{ request()->routeIs('bamanager') ? 'text-main' : '' }}">後台管員</a>
          </li>
          <li class="text-center">
            <a href="{{ URL::asset('baworks')}}" class="hover:text-main {{ request()->routeIs('baworks') ? 'text-main' : '' }}">上傳作品</a>
          </li>
          <li class="text-center">
            <a href="{{ URL::asset('basignout')}}" class="hover:text-main">後台登出</a>
          </li>
          <li class="text-center">
            <a href="{{ URL::asset('fnhome')}}" class="hover:text-main">回到前台</a>
          </li>
        </ul>
      </div>
      <div class="flex-1 flex flex-col mt-8 bg-white rounded-lg">
        @yield('content')
      </div>
    </div>
  </div>
</body>

</html>