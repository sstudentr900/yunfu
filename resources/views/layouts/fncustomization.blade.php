<!-- customization -->
<div class="flex justify-center items-center mx-auto max-w-7xl md:px-8 max-lg:px-4">
  <div class="flex justify-center items-center gap-8 pb-8 mb-8 border-b-1 border-neutral-200 max-md:flex-col-reverse max-md:gap-2">
    <div class="gsapTextTop relative md:max-w-[340px] flex flex-1 flex-col bg-white max-md:items-start">
      <div class="overflow-hidden">
        <div class="gsapText text-main text-2xl uppercase mb-2 max-md:text-base max-md:mb-0">{{$step}}</div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText flex items-center text-neutral-800 customFont2 text-7xl font-bold mb-4 gap-4 max-xl:text-5xl max-md:text-5xl max-md:mb-1">
          {{$title}}
          <div class="w-8">
            <svg class="w-full h-auto fill-current" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 49.5L51 4.5M51 4.5H6M51 4.5V49.5" stroke="#1E1E1E" stroke-width="8" stroke-linecap="square"/>
            </svg>
          </div>
        </div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText text-neutral-500 text-lg max-md:text-sm max-md:text-start">{{$text}}</div>
      </div>
    </div>
    <div class="gsapImg flex-2">
      <img class="" src="{{$url}}" alt="">
    </div>
  </div>
</div>