<!DOCTYPE html>
<html lang="zh-tw" data-page="{{ Route::currentRouteName() }}">

<head>
  @include('layouts.public_head')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- <script src="{{ url('/resources/js/app.js') }}"></script> -->
  <!-- <link src="{{ url('/resources/js/app.js') }}"></script> -->
</head>

<body class="{{ Route::currentRouteName() }}">
  <div class="bg-white w-full h-auto flex 2xl:justify-center">
    <div class="relative flex 2xl:w-[1920px] max-lg:flex-col">
      <!-- style1 -->
      <div class="flex-none z-999 w-[255px] max-xl:w-[222px] max-lg:h-[70px]">
        <div class="fixed h-full px-8 bg-white flex flex-col items-center max-xl:pl-0 max-lg:left-0 max-lg:p-0 max-lg:flex-row max-lg:h-auto max-lg:w-full max-lg:shadow-md max-sm:justify-between">
          <div class="overflow-hidden lg:h-[180px] max-lg:bg-main max-lg:p-6"> 
            <a href="{{ route('fnhome') }}" class="gsapBottom w-[190px] lg:h-[180px] bg-main flex justify-center items-center max-lg:w-[40px]">
              <img class="hidden lg:block" src="{{url('/images/logo.svg')}}" alt="">
              <img class="block lg:hidden" src="{{url('/images/logo2.svg')}}" alt="">
            </a>
          </div>
          <div class="gsapNavTextBottom mt-20 flex flex-col justify-center gap-4 text-xl tracking-tight text-neutral-500 max-lg:justify-end max-lg:flex-1 max-lg:mt-0 max-lg:flex-row max-lg:flex-wrap max-lg:text-base max-lg:gap-x-5 max-lg:gap-y-2 max-md:gap-x-4 max-lg:pr-6 max-sm:max-w-[245px] max-sm:pr-4">
            <a href="{{ route('fnhome') }}" class="gsapText hover:text-main {{ request()->routeIs('fnhome') ? 'text-main' : '' }}">耘馥首頁</a>
            <a href="{{ route('fnabout') }}" class="gsapText hover:text-main {{ request()->routeIs('fnabout') ? 'text-main' : '' }}">關於我們</a>
            <a href="{{ route('fncustomization') }}" class="gsapText hover:text-main {{ request()->routeIs('fncustomization') ? 'text-main' : '' }}">專屬客製</a>
            <a href="{{ route('fnworks') }}" class="gsapText hover:text-main {{ request()->routeIs('fnworks') || request()->routeIs('fnworkmore') ? 'text-main' : '' }}">作品案例</a>
            <a href="{{ route('fnservice') }}" class="gsapText hover:text-main {{ request()->routeIs('fnservice') ? 'text-main' : '' }}">服務內容</a>
            <a href="{{ route('fncontact') }}" class="gsapText hover:text-main {{ request()->routeIs('fncontact') ? 'text-main' : '' }}">聯絡我們</a>
          </div>
        </div>
      </div>
      <!-- style2 -->
      <!-- <div class="flex-none z-999 w-[255px] max-xl:w-[222px] max-lg:h-[70px]">
        <div class="fixed h-full px-8 bg-white flex flex-col items-center max-xl:pl-0 max-lg:left-0 max-lg:p-0 max-lg:flex-row max-lg:h-auto max-lg:w-full max-lg:shadow-md max-sm:justify-between">
          <div class="overflow-hidden lg:h-[180px] max-lg:bg-main max-lg:p-6 max-sm:z-50"> 
            <a href="{{ route('fnhome') }}" class="gsapBottom w-[190px] lg:h-[180px] bg-main flex justify-center items-center max-lg:w-[40px]">
              <img class="hidden lg:block" src="{{url('/images/logo.svg')}}" alt="">
              <img class="block lg:hidden" src="{{url('/images/logo2.svg')}}" alt="">
            </a>
          </div>
          <div id="menuToggle" class="flex sm:hidden">
            <span></span>
            <span></span>
            <span></span>
          </div> 
          <div class="gsapNavTextBottom mt-20 flex flex-col justify-center gap-4 text-xl tracking-tight text-neutral-500 max-lg:justify-end max-lg:flex-1 max-lg:mt-0 max-lg:flex-row max-lg:flex-wrap max-lg:text-base max-lg:pr-6 max-sm:p-0 max-sm:absolute max-sm:top-0 max-sm:-left-full max-sm:w-screen max-sm:h-screen max-sm:bg-white max-sm:flex-col max-sm:items-center max-sm:justify-center max-sm:z-10 max-sm:text-xl">
            <a href="{{ route('fnhome') }}" class="gsapText hover:text-main {{ request()->routeIs('fnhome') ? 'text-main' : '' }}">耘馥首頁</a>
            <a href="{{ route('fnabout') }}" class="gsapText hover:text-main {{ request()->routeIs('fnabout') ? 'text-main' : '' }}">關於我們</a>
            <a href="{{ route('fncustomization') }}" class="gsapText hover:text-main {{ request()->routeIs('fncustomization') ? 'text-main' : '' }}">專屬客製</a>
            <a href="{{ route('fnworks') }}" class="gsapText hover:text-main {{ request()->routeIs('fnworks') || request()->routeIs('fnworkmore') ? 'text-main' : '' }}">作品案例</a>
            <a href="{{ route('fnservice') }}" class="gsapText hover:text-main {{ request()->routeIs('fnservice') ? 'text-main' : '' }}">服務內容</a>
            <a href="{{ route('fncontact') }}" class="gsapText hover:text-main {{ request()->routeIs('fncontact') ? 'text-main' : '' }}">聯絡我們</a>
          </div>
        </div>
      </div> -->
      <div class="flex-1 w-[calc(1920px-15px-255px)] max-[1920px]:w-[calc(100vw-15px-255px)] max-2xl:w-[calc(100vw-15px-255px)] max-xl:w-[calc(100vw-15px-222px)] max-lg:w-[calc(100vw-15px)]">
        @yield('content')
        <!-- footer  -->
        <footer class="w-full px-14 pt-12 bg-stone-800 max-xl:px-6 max-xl:pt-4">
          <div class="self-stretch py-3 flex flex-col justify-start items-start">
            <div class="self-stretch pb-6 inline-flex justify-between items-start gap-6 flex-wrap max-xl:gap-4 max-xl:justify-start max-xl:gap-8">
              <div class="w-40 max-xl:w-full">
                <div class="w-40 h-32 inline-flex justify-center items-center max-xl:justify-start max-xl:w-[82px] max-xl:h-[94px]">
                  <!-- <img src="./img/logo.svg" alt=""> -->
                  <img src="{{url('/images/logo.svg')}}" alt="">
                </div>
              </div>
              <div class="inline-flex flex-col justify-start items-start gap-6 max-xl:gap-4 ">
                <div class="text-white text-lg font-bold">網站地圖</div>
                <div class="w-48 inline-flex justify-between items-start flex-wrap content-start gap-1">
                  <a href="{{ route('fnhome') }}" class="w-20 flex justify-start items-center duration-600 ease-in-out">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">回到首頁</div>
                  </a>
                  <a href="{{ route('fnworks') }}" class="w-20 flex justify-start items-center duration-600 ease-in-out">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">作品案例</div>
                  </a>
                  <a href="{{ route('fncustomization') }}" class="w-20 flex justify-start items-center duration-600 ease-in-out">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">專屬客製</div>
                  </a>
                  <a href="{{ route('fnabout') }}" class="w-20 flex justify-start items-center duration-600 ease-in-out">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">關於我們</div>
                  </a>
                  <a href="{{ route('fnservice') }}" class="w-20 flex justify-start items-center duration-600 ease-in-out">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">服務內容</div>
                  </a>
                  <a href="{{ route('fncontact') }}" class="w-20 flex justify-start items-center duration-600 ease-in-out">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">聯絡我們</div>
                  </a>
                </div>
              </div>
              <div class="inline-flex flex-col justify-start items-start gap-6 max-xl:gap-4">
                <div class="text-white text-lg font-bold">聯絡資訊</div>
                <div class="opacity-60 inline-flex justify-start items-start gap-12 max-md:flex-col max-md:gap-0">
                  <div class="inline-flex flex-col justify-start items-start gap-1">
                    <div class="text-white text-base max-md:text-sm">電話 : (09) 0555-3367</div>
                    <!-- <div class="text-white text-base max-md:text-sm">傳真 : (02)5968-665</div> -->
                    <div class="text-white text-base max-md:text-sm">信箱 : yunfu16888@gmail.com</div>
                  </div>
                  <div class="inline-flex flex-col justify-start items-start gap-1 max-md:mt-1">
                    <div class="text-white text-base max-md:text-sm">地址 : 台南市安平區健康三街173號</div>
                    <div class="text-white text-base max-md:text-sm">營業時間 : 周一至周五 09:00-18:00</div>
                    <!-- <div class="text-white text-base max-md:text-sm">統一編號 : 29468625</div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="self-stretch py-6 border-t border-white/20 inline-flex justify-between items-center gap-4 max-xl:py-4 max-md:flex-col max-md:items-start">
              <div class="opacity-70 justify-start text-white/60 text-xs font-normal capitalize leading-none tracking-tight">© 2025 耘馥股份有限公司</div>
              <div class="flex justify-end items-center gap-6">
                <!-- fb -->
                <a href="https://www.facebook.com/profile.php?id=61578737664871" class="w-[18px] fill-white/80 hover:fill-white" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                </a>
                <!-- ig -->
                <a href="" class="w-[18px] fill-white/80 hover:fill-white" target="_blank" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M 16.5 5 C 10.159 5 5 10.159 5 16.5 L 5 31.5 C 5 37.841 10.159 43 16.5 43 L 31.5 43 C 37.841 43 43 37.841 43 31.5 L 43 16.5 C 43 10.159 37.841 5 31.5 5 L 16.5 5 z M 34 12 C 35.105 12 36 12.895 36 14 C 36 15.104 35.105 16 34 16 C 32.895 16 32 15.104 32 14 C 32 12.895 32.895 12 34 12 z M 24 14 C 29.514 14 34 18.486 34 24 C 34 29.514 29.514 34 24 34 C 18.486 34 14 29.514 14 24 C 14 18.486 18.486 14 24 14 z M 24 17 A 7 7 0 1 0 24 31 A 7 7 0 1 0 24 17 z"></path>
                  </svg>
                </a>
                <!-- line -->
                <a href="" class="w-[18px] fill-white/80 hover:fill-white" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 10.304c0-5.369-5.383-9.738-12-9.738-6.616 0-12 4.369-12 9.738 0 4.814 4.269 8.846 10.036 9.608.391.084.922.258 1.057.592.121.303.079.778.039 1.085l-.171 1.027c-.053.303-.242 1.186 1.039.647 1.281-.54 6.911-4.069 9.428-6.967 1.739-1.907 2.572-3.843 2.572-5.992zm-18.988-2.595c.129 0 .234.105.234.234v4.153h2.287c.129 0 .233.104.233.233v.842c0 .129-.104.234-.233.234h-3.363c-.063 0-.119-.025-.161-.065l-.001-.001-.002-.002-.001-.001-.003-.003c-.04-.042-.065-.099-.065-.161v-5.229c0-.129.104-.234.233-.234h.842zm14.992 0c.129 0 .233.105.233.234v.842c0 .129-.104.234-.233.234h-2.287v.883h2.287c.129 0 .233.105.233.234v.842c0 .129-.104.234-.233.234h-2.287v.884h2.287c.129 0 .233.105.233.233v.842c0 .129-.104.234-.233.234h-3.363c-.063 0-.12-.025-.162-.065l-.003-.004-.003-.003c-.04-.042-.066-.099-.066-.161v-5.229c0-.062.025-.119.065-.161l.004-.004.003-.003c.042-.04.099-.066.162-.066h3.363zm-10.442.001c.129 0 .234.104.234.233v5.229c0 .128-.105.233-.234.233h-.842c-.129 0-.234-.105-.234-.233v-5.229c0-.129.105-.233.234-.233h.842zm2.127 0h.008l.012.001.013.001.01.001.013.003.008.003.014.004.008.003.013.006.007.003.013.007.007.004.012.009.006.004.013.011.004.004.014.014.002.002.018.023 2.396 3.236v-3.106c0-.129.105-.233.234-.233h.841c.13 0 .234.104.234.233v5.229c0 .128-.104.233-.234.233h-.841l-.06-.008-.004-.001-.015-.005-.007-.003-.012-.004-.011-.006-.007-.003-.014-.009-.002-.002-.06-.058-2.399-3.24v3.106c0 .128-.104.233-.234.233h-.841c-.129 0-.234-.105-.234-.233v-5.229c0-.129.105-.233.234-.233h.841z"/></svg>
                </a>
                <!-- twiter -->
                <!-- <a href="">
                  <svg
                    width="15"
                    height="15"
                    viewBox="0 0 15 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.71885 15C10.3778 15 13.4739 9.22845 13.4739 4.22491C13.4739 4.06266 13.471 3.8968 13.4651 3.73455C14.0674 3.19849 14.5872 2.53451 15 1.7738C14.4391 2.08095 13.8435 2.28154 13.2337 2.36873C13.8758 1.89504 14.3566 1.15088 14.5869 0.274221C13.9829 0.714813 13.3223 1.02561 12.6334 1.19329C12.1692 0.586356 11.5556 0.184494 10.8873 0.0498297C10.219 -0.0848268 9.53325 0.0552141 8.93606 0.448315C8.33894 0.841408 7.86362 1.46567 7.58362 2.22456C7.30369 2.98347 7.23462 3.83474 7.38719 4.64677C6.16406 4.57123 4.96746 4.18017 3.87499 3.49897C2.78252 2.81776 1.81856 1.8616 1.04561 0.692475C0.65275 1.52607 0.532536 2.51251 0.709394 3.45127C0.88625 4.39004 1.34691 5.21071 1.99776 5.7465C1.50914 5.72742 1.03124 5.56549 0.603516 5.27415V5.32102C0.603078 6.19579 0.848813 7.04384 1.29894 7.72089C1.74908 8.39794 2.37583 8.86223 3.07266 9.03484C2.62004 9.18722 2.14499 9.20945 1.68427 9.09976C1.88091 9.85204 2.26348 10.5101 2.77861 10.9819C3.29373 11.4538 3.9157 11.716 4.55771 11.7318C3.46776 12.7855 2.12136 13.3571 0.73535 13.3544C0.489554 13.3539 0.243999 13.3354 0 13.2988C1.40804 14.4106 3.04596 15.0011 4.71885 15Z" fill="white" fill-opacity="0.8" />
                  </svg>
                </a> -->
                <!-- in -->
                <!-- <a href="">
                  <svg
                    width="14"
                    height="15"
                    viewBox="0 0 14 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M1.67665 3.60155C2.60263 3.60155 3.35329 2.79532 3.35329 1.80078C3.35329 0.806235 2.60263 0 1.67665 0C0.75066 0 0 0.806235 0 1.80078C0 2.79532 0.75066 3.60155 1.67665 3.60155ZM14 14.9994V9.31903C14 7.67614 13.768 6.36076 12.9974 5.6079C12.41 5.03239 11.5972 4.64242 10.0593 4.7243C8.71005 4.79734 7.90439 6.06152 7.75574 6.31835L7.71464 4.93754H4.9438V14.9988H7.85559V9.72669L7.85064 9.56938C7.87421 9.14234 7.93784 8.55676 8.20991 8.11145C8.53893 7.57303 9.17957 7.3869 9.85199 7.46345C10.8545 7.57483 11.0707 8.70697 11.0707 9.236V15L14 14.9994ZM0.207872 4.9382H3.11143V14.9994H0.207872V4.9382Z"
                      fill="white"
                      fill-opacity="0.8" />
                  </svg>
                </a> -->
                <!-- 抖音 -->
                <!-- <a href="">
                  <svg
                    width="15"
                    height="15"
                    viewBox="0 0 15 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0287 0H8.06912V10.2174C8.06912 11.4348 6.93088 12.4348 5.51434 12.4348C4.09781 12.4348 2.95953 11.4348 2.95953 10.2174C2.95953 9.02175 4.07252 8.04344 5.43847 8V5.43479C2.42833 5.47825 0 7.58694 0 10.2174C0 12.8696 2.47892 15 5.53965 15C8.60034 15 11.0792 12.8478 11.0792 10.2174V4.97825C12.1922 5.67392 13.5582 6.08694 15 6.10869V3.54348C12.7741 3.47826 11.0287 1.91304 11.0287 0Z" fill="white" fill-opacity="0.8" />
                  </svg>
                </a>-->
                <!-- yt -->
                <a href="" class="w-[18px] fill-white/80 hover:fill-white" target="_blank"> 
                  <svg viewBox="0 0 15 11" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8506 2.37352C14.8506 2.37352 14.7041 1.2952 14.2529 0.82172C13.6816 0.198558 13.043 0.195502 12.75 0.158845C10.6524 5.82641e-08 7.50294 0 7.50294 0H7.49706C7.49706 0 4.34766 5.82641e-08 2.25 0.158845C1.95703 0.195502 1.31836 0.198558 0.747069 0.82172C0.295899 1.2952 0.152344 2.37352 0.152344 2.37352C0.152344 2.37352 0 3.64122 0 4.90588V6.09108C0 7.35578 0.149414 8.62348 0.149414 8.62348C0.149414 8.62348 0.295898 9.7018 0.744137 10.1752C1.31543 10.7984 2.06543 10.7771 2.39941 10.8443C3.60059 10.9634 7.5 11 7.5 11C7.5 11 10.6524 10.9939 12.75 10.8381C13.043 10.8015 13.6816 10.7984 14.2529 10.1752C14.7041 9.7018 14.8506 8.62348 14.8506 8.62348C14.8506 8.62348 15 7.35878 15 6.09108V4.90588C15 3.64122 14.8506 2.37352 14.8506 2.37352ZM5.95019 7.52984V3.13414L10.0019 5.33964L5.95019 7.52984Z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</body>

</html>