@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="md:mb-18 max-md:mb-8 relative">
  <img class="w-full object-center object-cover max-md:min-h-[200px] max-h-[400px]" src="{{url('/images/contact01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white customFont3 text-7xl uppercase max-md:text-5xl">CONTACT</div>
    <div class="text-white text-2xl max-md:text-base">聯絡我們</div>
  </div>
</div>
<div class="m-auto mb-24 px-8 relative max-w-7xl max-md:px-4">
  <div class="flex flex-col mb-18 max-md:mb-8">
    <div class="text-main text-2xl max-md:text-lg">立即填寫預約表單・專人一對一諮詢</div>
    <div class="justify-center text-neutral-800 text-7xl customFont3 uppercase max-sm:text-5xl">Online Form</div>
  </div>
  <form id="myForm" action="{{ route('fncontact_post') }}" method="POST" class="flex flex-col justify-start items-start gap-8 text-lg text-neutral-500 max-md:text-sm">
    @csrf
    <div class="self-stretch flex justify-start items-start gap-16 max-xl:gap-8 max-md:flex-col">
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="name" class="self-stretch justify-center">您的姓名</label>
        <div class="relative self-stretch md:h-11">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="name" name="name" value="{{ old('name') }}" required />
          @error('name')
          <div class="absolute px-2 py-1 rounded-lg bg-red-600 text-sm -bottom-[28px] text-white">{!! $message !!}</div>
          @enderror
        </div>
      </div>
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="phone" class="self-stretch justify-center">聯絡電話</label>
        <div class="relative self-stretch md:h-11">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="phone" name="phone" value="{{ old('phone') }}" required />
          @error('phone')
          <div class="absolute px-2 py-1 rounded-lg bg-red-600 text-sm -bottom-[28px] text-white">{!! $message !!}</div>
          @enderror
        </div>
      </div>
    </div>
    <div class="self-stretch flex justify-start items-start gap-16 max-xl:gap-8 max-md:flex-col">
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="email" class="self-stretch justify-center">電子信箱</label>
        <div class="self-stretch md:h-11">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="email" id="email" name="email" value="{{ old('email') }}" required />
          @error('email')
          <div class="absolute px-2 py-1 rounded-lg bg-red-600 text-sm -bottom-[28px] text-white">{!! $message !!}</div>
          @enderror
        </div>
      </div>
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="inputphone" class="self-stretch justify-center">從哪知道我們?</label>
        <div class="flex items-end w-full">
          <div class="grid grid-cols-5 gap-2 text-neutral-500 text-sm w-full">
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="fb" name="source" @if(old('source', 'fb' )=='fb' ) checked @endif>
              <span>FB</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="IG" name="source" @if(old('source', 'fb' )=='IG' ) checked @endif>
              <span>IG</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="YT" name="source" @if(old('source', 'fb' )=='YT' ) checked @endif>
              <span>YT</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="朋友" name="source" @if(old('source', 'fb' )=='朋友' ) checked @endif>
              <span class="text-center leading-4 max-w-[40px]">朋友</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="其他" name="source" @if(old('source', 'fb' )=='其他' ) checked @endif>
              <span>其他</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col justify-start items-start gap-2 max-md:gap-1">
      <label for="tinymce" class="self-stretch justify-center">需求敘述</label>
      <div class="relative self-stretch md:min-h-11">
        <textarea class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="tinymce" name="tinymce" required>{{ old('tinymce') }}</textarea>
        @error('tinymce')
        <div class="absolute px-2 py-1 rounded-lg bg-red-600 text-sm -bottom-[28px] text-white">{!! $message !!}</div>
        @enderror
      </div>
    </div>
    <div class="self-stretch flex justify-start items-start gap-16 max-xl:gap-8 max-md:flex-col">
      <div class="flex flex-1 flex-col justify-start items-start gap-2 max-md:w-full">
        <label for="captcha" class="self-stretch justify-center">驗證碼</label>
        <div class="self-stretch md:h-11 flex gap-3">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="captcha" name="captcha" required />
          {{--{!! captcha_img() !!}--}}
          <img src="{{captcha_src()}}" onclick="this.src='{{captcha_src()}}'+Math.random()" id="radsrc">
        </div>
        @error('captcha')
        <div class="absolute px-2 py-1 rounded-lg bg-red-600 text-sm -bottom-[28px] text-white">{!! $message !!}</div>
        @enderror
      </div>
      <div class="self-stretch flex flex-2 justify-end items-end gap-4 max-md:justify-start">
        <button class="cursor-pointer bg-white px-8 py-2 rounded-[999px] text-neutral-500 text-xl hover:bg-neutral-800 hover:text-white hover:border-neutral-800 max-md:text-base max-md:px-8 max-md:py-2 border border-neutral-300" type="button">重設</button>
        <button id="submitBtn" class="cursor-pointer bg-main px-8 py-2 rounded-[999px] text-white text-xl hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2" type="submit">送出</button>
      </div>
    </div>
  </form>
</div>
<!-- JavaScript 動態生成 Toast 表單送出成功-->
@if (session('success'))
<script>
  window.sessionSuccess = "{{ session('success') }}";
</script>
@endif
<div class="relative">
  <img class="w-full object-center object-cover h-[480px] max-lg:h-[320px]" src="{{url('/images/indexcontact01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center gap-4 p-4 max-md:gap-2">
    <div class="customFont3 text-center text-white text-6xl uppercase max-md:text-4xl">WORKS</div>
    <div class="text-center text-white text-lg mb-4 max-md:text-sm">
      歡迎欣賞我們的真實作品
      <br>
      讓實力為我們說話
    </div>
    <a href="{{ route('fnworks') }}" class="bg-main w-fit px-10 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
      了解更多
    </a>
  </div>
</div>
@endsection