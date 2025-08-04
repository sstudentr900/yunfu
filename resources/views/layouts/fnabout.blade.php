<!-- about -->

@if($direction=='l')
  <div class="flex justify-center items-center mx-auto mb-18 max-w-7xl md:px-8 max-lg:px-4 max-md:flex-col-reverse max-md:max-w-[580px] max-md:mb-10">
    <div class="gsapTextTop relative z-10 md:max-w-[480px] md:min-w-[390px] flex flex-1 flex-col items-end p-8 bg-white -mr-10 max-lg:py-4 max-md:mr-0 max-md:p-0 max-md:mt-4 max-md:items-start">
      <div class="overflow-hidden">
        <div class="gsapText text-main text-2xl max-md:text-base">{{$title}}</div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText text-end uppercase text-neutral-800 customFont3 text-5xl mb-4 max-xl:text-5xl break-all max-md:text-3xl max-md:mb-1 max-md:text-start">{{$text_en1}}<br class="max-md:hidden">{{$text_en2}}</div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText text-end text-neutral-500 text-lg max-md:text-sm max-md:text-start">{{$text}}</div>
      </div>
    </div>
    <div class="gsapImg flex-2">
      <img class="" src="{{$url}}" alt="">
    </div>
  </div>
@elseif ($direction=='r')
  <div class="flex justify-center items-center mx-auto mb-18 max-w-7xl md:px-8 max-lg:px-4 max-md:flex-col max-md:max-w-[580px] max-md:mb-10">
    <div class="gsapImg flex-2 flex justify-end">
      <img class="max-w-[710px] w-full" src="{{$url}}" alt="">
    </div>
    <div class="gsapTextTop relative z-10 md:max-w-[480px] md:min-w-[390px] flex flex-1 flex-col items-start p-8 bg-white -ml-10 max-lg:py-4 max-md:ml-0 max-md:p-0 max-md:mt-4">
      <div class="overflow-hidden">
        <div class="gsapText text-main text-2xl max-md:text-base">{{$title}}</div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText uppercase text-neutral-800 customFont3 text-5xl mb-4 max-xl:text-5xl break-all max-md:text-3xl max-md:mb-1 max-md:text-start">{{$text_en1}}<br class="max-md:hidden">{{$text_en2}}</div>
      </div>
      <div class="overflow-hidden">
        <div class="gsapText text-neutral-500 text-lg max-md:text-sm max-md:text-start">{{$text}}</div>
      </div>
    </div>
  </div>
@endif
