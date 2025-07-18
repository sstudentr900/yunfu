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
<div class="m-auto mb-18 px-8 relative max-w-7xl max-md:px-4">
  <div class="flex flex-col mb-18 max-md:mb-8">
    <div class="text-main text-2xl max-md:text-lg">立即填寫預約表單・專人一對一諮詢</div>
    <div class="justify-center text-neutral-800 text-7xl customFont3 uppercase max-sm:text-5xl">Online Form</div>
  </div>
  <form action="" class="flex flex-col justify-start items-start gap-8 text-lg text-neutral-500 max-md:text-sm">
    <div class="self-stretch flex justify-start items-start gap-16 max-xl:gap-8 max-md:flex-col">
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="inputname" class="self-stretch justify-center">您的姓名</label>
        <div class="self-stretch md:h-11">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="inputname" name="inputname" required />
        </div>
      </div>
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="inputphone" class="self-stretch justify-center">聯絡電話</label>
        <div class="self-stretch md:h-11">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="inputphone" name="inputphone" required />
        </div>
      </div>
    </div>
    <div class="self-stretch flex justify-start items-start gap-16 max-xl:gap-8 max-md:flex-col">
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="inputemail" class="self-stretch justify-center">電子信箱</label>
        <div class="self-stretch md:h-11">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="email" id="inputemail" name="inputemail" required />
        </div>
      </div>
      <div class="w-full flex flex-1 flex-col justify-start items-start gap-2 max-md:gap-1">
        <label for="inputphone" class="self-stretch justify-center">從哪知道我們?</label>
        <div class="flex items-end w-full">
          <div class="grid grid-cols-5 gap-2 text-neutral-500 text-sm w-full">
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="fb" name="inputwhere" checked="">
              <span>FB</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="IG" name="inputwhere">
              <span>IG</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="YT" name="inputwhere">
              <span>YT</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="friend" name="inputwhere">
              <span class="text-center leading-4 max-w-[40px]">朋友介紹</span>
            </label>
            <label class="cursor-pointer flex items-center justify-center rounded-md bg-white p-2 uppercase ring-1 ring-gray-300 not-data-focus:not-has-checked:ring-inset hover:bg-gray-50 has-checked:bg-main has-checked:text-white has-checked:ring-0 has-checked:hover:bg-main/80 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-main data-focus:ring-2 data-focus:ring-main data-focus:ring-offset-2 data-focus:has-checked:ring-2 max-md:p-1">
              <input class="sr-only" type="radio" value="other" name="inputwhere">
              <span>其他</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col justify-start items-start gap-2 max-md:gap-1">
      <label for="inputneed" class="self-stretch justify-center">需求敘述</label>
      <div class="self-stretch md:min-h-11">
        <textarea class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="inputneed" name="inputneed" required></textarea>
      </div>
    </div>
    <div class="self-stretch flex justify-start items-start gap-16 max-xl:gap-8 max-md:flex-col">
      <div class="flex flex-1 flex-col justify-start items-start gap-2 max-md:w-full">
        <label for="inputname" class="self-stretch justify-center">驗證碼</label>
        <div class="self-stretch md:h-11 flex gap-3">
          <input class="border-b border-neutral-300 p-2 w-full max-md:p-1" type="text" id="inputname" name="inputname" required />
          <img class="" src="{{url('/images/contact02.png')}}" alt="">
        </div>
      </div>
      <div class="self-stretch flex flex-2 justify-end items-end gap-4 max-md:justify-start">
        <input class="cursor-pointer bg-white px-8 py-2 rounded-[999px] text-neutral-500 text-xl hover:bg-neutral-800 hover:text-white hover:border-neutral-800 max-md:text-base max-md:px-8 max-md:py-2 border border-neutral-300" type="button" value="重設">
        <input class="cursor-pointer bg-main px-8 py-2 rounded-[999px] text-white text-xl hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2" type="submit" value="送出">
      </div>
    </div>
  </form>
</div>
@include('layouts.fncontact')
@endsection