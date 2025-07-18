@extends('layouts.fn')
@section('content')
<!-- Carousel -->
<div class="md:mb-18 max-md:mb-8 relative">
  <img class="w-full object-center object-cover max-md:min-h-[200px] max-h-[400px]" src="{{url('/images/service01.png')}}" alt="">
  <div class="absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white customFont3 text-7xl uppercase max-md:text-5xl">SERVICE</div>
    <div class="text-white text-2xl max-md:text-base">服務內容</div>
  </div>
</div>
<!-- services -->
@include('layouts.fnservices')
<!-- ad -->
<div class="mb-14">
  <img class="w-full object-center object-cover max-md:min-h-[300px] max-h-[500px]" src="{{url('/images/service02.png')}}" alt="">
</div>
<!-- PROCESS -->
<div class="m-auto mb-18 pr-8 relative max-w-7xl max-md:px-4 max-md:mb-8 max-sm:pl-0">
  <div class="inline-flex flex-col justify-start items-start mb-4 max-lg:items-end max-lg:absolute max-lg:bg-white max-lg:right-8 max-lg:top-5 max-lg:p-2">
    <div class="text-main text-2xl max-md:text-lg">服務流程</div>
    <div class="justify-center text-neutral-800 text-7xl customFont3 uppercase max-sm:text-5xl">PROCESS</div>
  </div>
  <div class="flex justify-start items-start gap-12 max-lg:gap-0 max-lg:flex-col">
    <div class="flex-1 max-lg:flex-none max-lg:w-[220px]">
      <img src="{{url('/images/servicephoto01.png')}}" alt="">
    </div>
    <div class="flex-2 grid grid-cols-1 gap-10 max-lg:bg-white/70 max-lg:p-4 max-lg:-mt-24 max-lg:ml-8 max-md:-mt-40 max-md:ml-4 max-md:grid-cols-1 max-md:gap-8">
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[50px] fill-current" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M35 32.5C33.2639 32.5 31.7882 31.8924 30.5729 30.6771C29.3576 29.4618 28.75 27.9861 28.75 26.25C28.75 24.5139 29.3576 23.0382 30.5729 21.8229C31.7882 20.6076 33.2639 20 35 20C36.7361 20 38.2118 20.6076 39.4271 21.8229C40.6424 23.0382 41.25 24.5139 41.25 26.25C41.25 27.9861 40.6424 29.4618 39.4271 30.6771C38.2118 31.8924 36.7361 32.5 35 32.5ZM35 28.75C35.7083 28.75 36.3021 28.5104 36.7812 28.0313C37.2604 27.5521 37.5 26.9583 37.5 26.25C37.5 25.5417 37.2604 24.9479 36.7812 24.4688C36.3021 23.9896 35.7083 23.75 35 23.75C34.2917 23.75 33.6979 23.9896 33.2187 24.4688C32.7396 24.9479 32.5 25.5417 32.5 26.25C32.5 26.9583 32.7396 27.5521 33.2187 28.0313C33.6979 28.5104 34.2917 28.75 35 28.75ZM22.5 47.4479V41.3766C22.5 40.6439 22.6736 39.9549 23.0208 39.3094C23.3681 38.6639 23.8542 38.1491 24.4792 37.7651C25.5903 37.1023 26.745 36.5608 27.9432 36.1406C29.1418 35.7208 30.3656 35.4101 31.6146 35.2083L35 39.2708L38.3854 35.2083C39.6462 35.4101 40.8727 35.7208 42.0651 36.1406C43.2578 36.5608 44.4097 37.1007 45.5208 37.7604C46.1458 38.1424 46.6319 38.6564 46.9792 39.3026C47.3264 39.9484 47.5 40.638 47.5 41.3714V47.4479H22.5ZM26.25 43.6979H33.8021L30.2083 39.375C29.4993 39.5569 28.8099 39.7934 28.1401 40.0844C27.4703 40.3753 26.8403 40.7118 26.25 41.0938V43.6979ZM36.1979 43.6979H43.75V41.0938C43.1597 40.7118 42.526 40.3733 41.849 40.0781C41.1719 39.783 40.4861 39.5486 39.7917 39.375L36.1979 43.6979ZM11.237 42.5C10.204 42.5 9.32292 42.1328 8.59375 41.3984C7.86458 40.6641 7.5 39.7812 7.5 38.75V11.25C7.5 10.2188 7.86719 9.33594 8.60156 8.60156C9.33594 7.86719 10.2188 7.5 11.25 7.5H38.75C39.7812 7.5 40.6641 7.86719 41.3984 8.60156C42.1328 9.33594 42.5 10.2188 42.5 11.25V19.6354C41.9792 19.0451 41.4062 18.5243 40.7812 18.0729C40.1562 17.6215 39.4792 17.2569 38.75 16.9792V11.25H11.25V38.75H19.2188C19.0451 39.1667 18.9236 39.595 18.8542 40.0349C18.7847 40.4745 18.75 40.9142 18.75 41.3542V42.5H11.237ZM15 18.75H28.3854C29.2882 17.9514 30.3125 17.3351 31.4583 16.901C32.6042 16.467 33.7847 16.25 35 16.25V15H15V18.75ZM15 26.875H25C24.9306 26.25 24.9479 25.6163 25.0521 24.974C25.1562 24.3316 25.3125 23.7153 25.5208 23.125H15V26.875ZM15 35H21.875C22.3611 34.6181 22.8898 34.2934 23.4609 34.026C24.0318 33.7587 24.6142 33.5104 25.2083 33.2813V31.25H15V35ZM11.25 38.75V11.25V16.9792V16.25V38.75Z" fill="white"/>
            </svg>
        </div> 
        <div class="flex-1">
          <div class="flex">
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">01.初步諮詢</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">您的一通電話或訊息，是我們合作的起點。我們會詳細了解您的空間需求、使用習慣、風格喜好以及預算考量，提供初步的建議與方向。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[30px] fill-current" viewBox="0 0 27 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.52127 40L9.78168 13.125C9.9553 12.2222 10.372 11.4931 11.0317 10.9375C11.6914 10.3819 12.49 10.1042 13.4275 10.1042C14.122 10.1042 14.8338 10.2951 15.5629 10.6771C16.2921 11.059 16.8477 11.5451 17.2296 12.1354L18.0629 13.4896C19.174 15.2257 20.1549 16.4583 21.0056 17.1875C21.8563 17.9167 22.8546 18.3681 24.0004 18.5417V15H26.5004V40H24.0004V22.2396C22.5074 21.9271 21.1272 21.3628 19.8598 20.5469C18.5924 19.7309 17.49 18.7153 16.5525 17.5L15.3546 23.75L19.0004 27.3958V40H15.2504V28.9062L11.2921 25L8.32335 40H4.52127ZM5.3546 22.6562L1.24002 21.875C0.892795 21.8056 0.623698 21.6233 0.432726 21.3281C0.241753 21.033 0.18099 20.7118 0.250434 20.3646L1.70877 13.0208C1.9171 11.9792 2.44661 11.1719 3.29731 10.599C4.148 10.026 5.07682 9.84375 6.08377 10.0521L7.75043 10.4167L5.3546 22.6562ZM16.5004 8.75C15.2852 8.75 14.2522 8.32465 13.4015 7.47396C12.5508 6.62326 12.1254 5.59028 12.1254 4.375C12.1254 3.15972 12.5508 2.12674 13.4015 1.27604C14.2522 0.425347 15.2852 0 16.5004 0C17.7157 0 18.7487 0.425347 19.5994 1.27604C20.4501 2.12674 20.8754 3.15972 20.8754 4.375C20.8754 5.59028 20.4501 6.62326 19.5994 7.47396C18.7487 8.32465 17.7157 8.75 16.5004 8.75Z" fill="white"/>
          </svg>
        </div> 
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">02</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">02.現場勘查</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">安排專人到府丈量並進行屋況勘查，實際了解空間格局、水電動線、採光通風等現場條件，作為設計與報價的基礎。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[50px] fill-current" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.6979 23.3854L23.3854 18.6979L20.5729 15.8333L18.1771 18.1771L15.5729 15.5729L17.9167 13.1771L15 10.3125L10.3125 15L18.6979 23.3854ZM35 39.6875L39.6875 35L36.875 32.1354L34.4792 34.4792L31.875 31.875L34.2188 29.4792L31.3021 26.6146L26.6146 31.3021L35 39.6875ZM15.4688 42.5H7.5V34.5312L16.0417 26.0417L5 15L15 5L26.0417 16.0417L33.4375 8.59375C33.8194 8.21181 34.2361 7.93403 34.6875 7.76042C35.1389 7.58681 35.6076 7.5 36.0938 7.5C36.5799 7.5 37.0486 7.58681 37.5 7.76042C37.9514 7.93403 38.3681 8.21181 38.75 8.59375L41.4062 11.25C41.7882 11.6319 42.066 12.0486 42.2396 12.5C42.4132 12.9514 42.5 13.4201 42.5 13.9062C42.5 14.3924 42.4132 14.8611 42.2396 15.3125C42.066 15.7639 41.7882 16.1806 41.4062 16.5625L33.9583 23.9583L45 35L35 45L23.9583 33.9583L15.4688 42.5ZM11.25 38.75H13.9062L33.4375 19.2188L30.7812 16.5625L11.25 36.0938V38.75ZM32.1354 17.8646L30.7812 16.5625L33.4375 19.2188L32.1354 17.8646Z" fill="white"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">03</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">03.空間規劃與設計</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">您的一通電話或訊息，是我們合作的起點。我們會詳細了解您的空間需求、使用習慣、風格喜好以及預算考量，提供初步的建議與方向。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[50px] fill-current" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.75 18.75V15H36.25V18.75H18.75ZM18.75 25V21.25H36.25V25H18.75ZM26.25 45H12.5C11.1111 45 9.93056 44.5139 8.95833 43.5417C7.98611 42.5694 7.5 41.3889 7.5 40V32.5H12.5V5H42.5V23.8021C41.8056 23.8368 41.1458 23.9583 40.5208 24.1667C39.8958 24.375 39.3056 24.7049 38.75 25.1562V8.75H16.25V32.5H31.3021L27.5521 36.25H11.25V40C11.25 40.3542 11.3698 40.651 11.6094 40.8906C11.849 41.1302 12.1458 41.25 12.5 41.25H26.25V45ZM30 45V39.1146L40.9375 28.2292C41.1896 27.9719 41.4696 27.7859 41.7776 27.6714C42.0856 27.5571 42.3917 27.5 42.6958 27.5C43.0274 27.5 43.3453 27.5608 43.6495 27.6823C43.9536 27.8038 44.2302 27.9861 44.4792 28.2292L46.7708 30.5729C46.9997 30.825 47.1783 31.105 47.3068 31.413C47.4356 31.721 47.5 32.0271 47.5 32.3312C47.5 32.6354 47.4429 32.9465 47.3286 33.2646C47.2141 33.5823 47.0281 33.8656 46.7708 34.1146L35.8854 45H30ZM32.5 42.5H34.8438L40.8333 36.5104L39.6875 35.3125L38.5417 34.1667L32.5 40.1562V42.5ZM39.6875 35.3125L38.5417 34.1667L40.8333 36.5104L39.6875 35.3125Z" fill="white"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">04</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">04.詳細報價</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">提供清楚明細的工程報價表，讓您了解每一分預算的用途。我們秉持誠信原則，不任意追加、不藏費用，讓您安心掌握整體預算。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[40px] fill-current" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.86458 35.7605C6.30208 35.7605 4.83507 35.4046 3.46354 34.6928C2.09201 33.981 0.9375 33.0174 0 31.8022C1.07639 31.7327 1.99653 31.3334 2.76042 30.6042C3.52431 29.8751 3.90625 28.9723 3.90625 27.8959C3.90625 26.2292 4.48177 24.8317 5.63281 23.7032C6.78351 22.5747 8.18108 22.0105 9.82552 22.0105C11.4696 22.0105 12.8559 22.5827 13.9844 23.7272C15.1128 24.8716 15.6771 26.2612 15.6771 27.8959C15.6771 30.0834 14.9219 31.9411 13.4115 33.4688C11.901 34.9966 10.0521 35.7605 7.86458 35.7605ZM7.86458 32.2709C9.06771 32.2709 10.0977 31.8424 10.9547 30.9855C11.8113 30.1289 12.2396 29.099 12.2396 27.8959C12.2396 27.2362 12.0052 26.672 11.5365 26.2032C11.0677 25.7345 10.5035 25.5001 9.84375 25.5001C9.18403 25.5001 8.61979 25.7345 8.15104 26.2032C7.68229 26.672 7.44792 27.2362 7.44792 27.8959C7.44792 28.6598 7.36111 29.3976 7.1875 30.1095C7.01389 30.8213 6.68403 31.4549 6.19792 32.0105C6.47569 32.0799 6.75347 32.1407 7.03125 32.1928C7.30903 32.2449 7.58681 32.2709 7.86458 32.2709ZM20.1562 23.4167L14.8438 18.1042L31.4583 1.48966C31.9444 1.00355 32.5347 0.760498 33.2292 0.760498C33.9236 0.760498 34.5139 1.00355 35 1.48966L36.7708 3.2605C37.2569 3.76223 37.5 4.34782 37.5 5.01727C37.5 5.68637 37.2569 6.26397 36.7708 6.75008L20.1562 23.4167Z" fill="white"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">05</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">05.簽約與施工安排</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">確認設計方案與報價無誤後，即可簽訂合約，明訂施工範圍、工期、付款方式等條款，確保雙方權益。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[40px] fill-current" viewBox="0 0 24 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.21875 35.5L0.75 31.3333L6.375 15.9167C6.86111 16.2986 7.38038 16.6408 7.93281 16.9432C8.48524 17.2457 9.07708 17.4764 9.70833 17.6354L4.29167 32.6354L1.21875 35.5ZM22.7812 35.5L19.7083 32.5833L14.2917 17.6354C14.9229 17.4764 15.5148 17.2457 16.0672 16.9432C16.6196 16.6408 17.1389 16.2812 17.625 15.8646L23.25 31.3333L22.7812 35.5ZM12 15.5C10.2639 15.5 8.78819 14.8924 7.57292 13.6771C6.35764 12.4618 5.75 10.9861 5.75 9.25C5.75 7.82639 6.16667 6.57639 7 5.5C7.83333 4.42361 8.875 3.69444 10.125 3.3125V0.5H13.875V3.3125C15.125 3.69444 16.1667 4.42361 17 5.5C17.8333 6.57639 18.25 7.82639 18.25 9.25C18.25 10.9861 17.6424 12.4618 16.4271 13.6771C15.2118 14.8924 13.7361 15.5 12 15.5ZM12 11.75C12.7083 11.75 13.3021 11.5104 13.7812 11.0312C14.2604 10.5521 14.5 9.95833 14.5 9.25C14.5 8.54167 14.2604 7.94792 13.7812 7.46875C13.3021 6.98958 12.7083 6.75 12 6.75C11.2917 6.75 10.6979 6.98958 10.2187 7.46875C9.73958 7.94792 9.5 8.54167 9.5 9.25C9.5 9.95833 9.73958 10.5521 10.2187 11.0312C10.6979 11.5104 11.2917 11.75 12 11.75Z" fill="white"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">06</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">06.工程施作與監工</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">由專業工班進行施工，並安排專人負責現場監工與進度回報。我們重視施工品質與現場安全，並定期邀請您到場檢視工程進度。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="absolute w-[2px] h-[120px] top-[90px] left-[45px] bg-main"></div>
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[50px] fill-current" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29.0417 34.875L35.8125 27.8438L33.9896 26.125L28.9745 31.2812L26.9583 29.25L25.1875 31.0208L29.0417 34.875ZM8 13H28V9.25H8V13ZM30.488 40.5C27.7182 40.5 25.3611 39.5238 23.4167 37.5714C21.4722 35.6193 20.5 33.2582 20.5 30.488C20.5 27.7182 21.4762 25.3611 23.4286 23.4167C25.3807 21.4722 27.7418 20.5 30.512 20.5C33.2818 20.5 35.6389 21.4762 37.5833 23.4286C39.5278 25.3807 40.5 27.7418 40.5 30.512C40.5 33.2818 39.5238 35.6389 37.5714 37.5833C35.6193 39.5278 33.2582 40.5 30.488 40.5ZM0.5 38V4.25C0.5 3.21875 0.867187 2.33594 1.60156 1.60156C2.33594 0.867189 3.21875 0.5 4.25 0.5H31.75C32.7812 0.5 33.6641 0.867189 34.3984 1.60156C35.1328 2.33594 35.5 3.21875 35.5 4.25V17.7396C34.9097 17.4965 34.3016 17.3056 33.6755 17.1667C33.0491 17.0278 32.4073 16.9236 31.75 16.8542V4.25H4.25V31.75H16.75C16.8542 32.7917 17.0646 33.7986 17.3812 34.7708C17.6979 35.7431 18.1125 36.6632 18.625 37.5312L18 38L15.0833 35.6562L12.1667 38L9.25 35.6562L6.33333 38L3.41667 35.6562L0.5 38ZM8 26.75H17.2188C17.3924 26.0556 17.6267 25.4045 17.9219 24.7969C18.217 24.1892 18.5556 23.5903 18.9375 23H8V26.75ZM8 19.875H21.75C22.6528 19.1458 23.625 18.5382 24.6667 18.0521C25.7083 17.566 26.8194 17.2188 28 17.0104V16.125H8V19.875Z" fill="white"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">06</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">07.完工驗收</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">完工後進行全場驗收，從磁磚收邊、油漆平整、水電測試等細節一一確認，並協助您理解未來的使用方式，讓您入住更安心。</div>
        </div>
      </div>
      <div class="relative flex items-center justify-center gap-8 max-md:gap-4">
        <div class="w-[90px] h-[90px] bg-main rounded-full flex-none flex items-center justify-center">
          <svg class="w-full h-auto max-w-[40px] fill-current" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.875 25H28.125V22.8646C28.125 21.6493 27.3437 20.6163 25.7812 19.7656C24.2187 18.9149 22.2917 18.4896 20 18.4896C17.7083 18.4896 15.7812 18.9149 14.2187 19.7656C12.6562 20.6163 11.875 21.6493 11.875 22.8646V25ZM20.0109 16.25C21.0453 16.25 21.9271 15.8818 22.6562 15.1453C23.3854 14.4089 23.75 13.5234 23.75 12.4891C23.75 11.4547 23.3818 10.5729 22.6453 9.84375C21.9089 9.11458 21.0234 8.75 19.9891 8.75C18.9547 8.75 18.0729 9.11823 17.3437 9.85469C16.6146 10.5911 16.25 11.4766 16.25 12.5109C16.25 13.5453 16.6182 14.4271 17.3547 15.1562C18.0911 15.8854 18.9766 16.25 20.0109 16.25ZM0 40V3.75C0 2.71875 0.367188 1.83594 1.10156 1.10156C1.83594 0.367189 2.71875 0 3.75 0H36.25C37.2812 0 38.1641 0.367189 38.8984 1.10156C39.6328 1.83594 40 2.71875 40 3.75V28.75C40 29.7812 39.6328 30.6641 38.8984 31.3984C38.1641 32.1328 37.2812 32.5 36.25 32.5H7.5L0 40ZM5.9375 28.75H36.25V3.75H3.75V30.9375L5.9375 28.75Z" fill="white"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="flex">
            <!-- <div class="text-main text-5xl font-bold max-md:text-4xl">06</div> -->
            <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">08.售後服務</div>
          </div>
          <div class="text-justify text-neutral-500 text-lg max-md:text-sm">我們提供工程保固與後續維修協助，無論是水電、設備或收納調整，皆可隨時聯繫。您的滿意，是我們持續前進的動力。</div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.fncontact')
@endsection