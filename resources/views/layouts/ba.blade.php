<!DOCTYPE html>
<html lang="zh-tw">

<head>
  @include('layouts.public_head')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('customStyle')
  @stack('customScript')
</head>

<body class="{{$active}}">
  <div class="relative bg-stone-800">
    <img class="fixed w-full h-screen object-center object-cover opacity-6 blur-xs grayscale" src="{{url('/images/worksphoto04.png')}}" alt="">
    <div class="relative px-8 flex gap-8 min-h-screen z-10">
      <div class="flex-none w-[190px] relative">
        <div class="fixed">
          <a href="{{ route('bamanager') }}" class="w-[190px] h-[180px] bg-main flex justify-center items-center">
            <img src="{{url('/images/logo.svg')}}" alt="">
          </a>
          <ul class="mt-20 flex flex-col gap-5 text-xl text-white">
            <li class="text-center">
              <a href="{{ URL::asset('bamanager') }}" class="hover:text-main {{ in_array($active, ['bamanager', 'bamanager_add', 'bamanager_update']) ? 'text-main' : '' }}">後台管員</a>
            </li>
            <li class="text-center">
              <a href="{{ URL::asset('baworks')}}" class="hover:text-main {{ in_array($active, ['baworks', 'baworks_add', 'baworks_update']) ? 'text-main' : '' }}">上傳作品</a>
            </li>
            <li class="text-center">
              <a href="{{ URL::asset('bacontact')}}" class="hover:text-main {{ in_array($active, ['bacontact']) ? 'text-main' : '' }}">聯絡我們</a>
            </li>
            <li class="text-center">
              <a href="{{ URL::asset('basignout')}}" class="hover:text-main">後台登出</a>
            </li>
            <li class="text-center">
              <a href="{{ URL::asset('fnhome')}}" class="hover:text-main">回到前台</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex-1 flex py-8">
        <div class="flex flex-col w-full bg-white rounded-lg">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</body>

</html>