<!DOCTYPE html>
<html lang="zh-tw">
<head>
  @include('layouts.public_head')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="relative bg-stone-800">
    <img class="w-full h-screen object-center object-cover opacity-6 blur-xs grayscale" src="{{url('/images/worksphoto04.png')}}" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-xl p-8">
      <div class="bg-white p-14 rounded-md max-sm:p-8">
        <div class="flex flex-col items-center gap-2 mb-10">
          <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-auto max-w-[50px] fill-white" viewBox="0 0 24 24">
              <path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
            </svg>
          </div>
          <h3 class="text-4xl font-bold text-neutral-700">後台登入</h3>
        </div>
        <form method="post">
          {!! csrf_field() !!}
          <ul class="flex flex-col gap-6 mb-8 text-lg text-neutral-500">
            <li>
              {{--@include('layouts.input',['type'=>'text','id'=>'account','label'=>'帳號'])--}}
              <!-- <label for="account" class="label">帳號</label> -->
              <div class="">
                <input class="w-full p-3 border border-neutral-300" type="text" id="account" name="account" placeholder="" value="1@1.1" required="required">
                @error('account')
                <div class="puplicError">{!! $message !!}</div>
                @enderror
              </div>
            </li>
            <li>
              {{--@include('layouts.input',['type'=>'password','id'=>'password','label'=>'密碼'])--}}
              <!-- <label for="password" class="label">密碼</label> -->
              <div class="">
                <input class="w-full p-3 border border-neutral-300" type="text" id="password" name="password" placeholder="" value="1" required="required">
                @error('password')
                <div class="puplicError">{!! $message !!}</div>
                @enderror
            </li>
            <li class="flex justify-between items-center">
              <div class="gohome">
                <a href="./">回首頁?</a>
              </div>
              <!-- <button type='submit' class="cursor-pointer bg-main px-12 py-3 rounded-[999px] text-white text-xl hover:bg-main-hover">登入</button> -->
              <a href="{{ route('bamanager') }}" class="cursor-pointer bg-main px-12 py-3 rounded-[999px] text-white text-xl hover:bg-main-hover">登入</a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</body>
</html>