<!DOCTYPE html>
<html lang="zh-tw"  data-page="{{ Route::currentRouteName() }}">
<head>
  @include('layouts.public_head')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="bg-white w-full h-auto flex 2xl:justify-center">
    <div class="relative flex 2xl:w-[1920px] max-lg:flex-col">
      <div class="flex-none z-999 w-[255px] max-xl:w-[222px] max-lg:h-[129px] ">
        <div class="fixed h-full px-8 bg-white flex flex-col items-center max-xl:pl-0 max-lg:left-0 max-lg:p-0 max-lg:flex-row max-lg:h-auto max-lg:bg-main max-lg:justify-between max-lg:w-full max-lg:px-8 max-lg:p-2 border-b-1 border-white/60">
          <a href="{{ route('fnhome') }}" class="w-[190px] h-[180px] bg-main flex justify-center items-center max-lg:max-w-[82px] max-lg:h-[120px] ">
            <img src="{{url('/images/logo.svg')}}" alt="">
          </a>
          <div class="mt-20 flex flex-col justify-center gap-4 text-xl tracking-tight text-neutral-500 max-lg:mt-0 max-lg:w-[150px] max-lg:flex-row max-lg:flex-wrap max-lg:text-white/70 max-lg:text-base max-lg:mr-4 max-lg:gap-x-6 max-lg:gap-y-3">
            <a href="{{ route('fnhome') }}" class="hover:text-main max-lg:hover:text-white {{ request()->routeIs('fnhome') ? 'text-main max-lg:text-white' : '' }}">耘馥首頁</a>
            <a href="{{ route('fnabout') }}" class="hover:text-main max-lg:hover:text-white {{ request()->routeIs('fnabout') ? 'text-main max-lg:text-white' : '' }}">關於我們</a>
            <a href="{{ route('fncustomization') }}" class="hover:text-main max-lg:hover:text-white {{ request()->routeIs('fncustomization') ? 'text-main max-lg:text-white' : '' }}">專屬客製</a>
            <a href="{{ route('fnworks') }}" class="hover:text-main max-lg:hover:text-white {{ request()->routeIs('fnworks') ? 'text-main max-lg:text-white' : '' }}">作品案例</a>
            <a href="{{ route('fnservice') }}" class="hover:text-main max-lg:hover:text-white {{ request()->routeIs('fnservice') ? 'text-main max-lg:text-white' : '' }}">服務內容</a>
            <a href="{{ route('fncontact') }}" class="hover:text-main max-lg:hover:text-white {{ request()->routeIs('fncontact') ? 'text-main max-lg:text-white' : '' }}">聯絡我們</a>
          </div>
        </div>
      </div>
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
                <div class="customFont2 justify-start text-white text-lg font-bold capitalize leading-none tracking-tight">網站地圖</div>
                <div class="w-48 inline-flex justify-between items-start flex-wrap content-start gap-1">
                  <a href="{{ route('fnhome') }}" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">回到首頁</div>
                  </a>
                  <a href="{{ route('fnworks') }}" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">作品案例</div>
                  </a>
                  <a href="{{ route('fncustomization') }}" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">專屬客製</div>
                  </a>
                  <a href="{{ route('fnabout') }}" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">關於我們</div>
                  </a>
                  <a href="{{ route('fnservice') }}" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">服務內容</div>
                  </a>
                  <a href="{{ route('fncontact') }}" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">聯絡我們</div>
                  </a>
                </div>
              </div>
              <div class="inline-flex flex-col justify-start items-start gap-6 max-xl:gap-4">
                <div class="customFont2 text-white text-lg leading-none tracking-tight">聯絡資訊</div>
                <div class="opacity-60 inline-flex justify-start items-start gap-12 max-md:flex-col max-md:gap-0">
                  <div class="inline-flex flex-col justify-start items-start gap-1">
                    <div class="text-white text-base tracking-wide max-md:text-sm">電話 : (02)5968-665</div>
                    <div class="text-white text-base tracking-wide max-md:text-sm">傳真 : (02)5968-665</div>
                    <div class="text-white text-base tracking-wide max-md:text-sm">信箱 : hello@email.Com</div>
                  </div>
                  <div class="inline-flex flex-col justify-start items-start gap-1">
                    <div class="text-white text-base tracking-wide max-md:text-sm">地址 : 台中市中正南路2段5號之8</div>
                    <div class="text-white text-base tracking-wide max-md:text-sm">營業時間 : 周一至周五09:00-18:00</div>
                    <div class="text-white text-base tracking-wide max-md:text-sm">統一編號 : 29468625</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="self-stretch py-6 border-t border-white/20 inline-flex justify-between items-center gap-4 max-xl:py-4 max-md:flex-col max-md:items-start">
              <div class="opacity-70 justify-start text-white/60 text-xs font-normal capitalize leading-none tracking-tight">© 2025 耘馥股份有限公司・統一編號 82816072</div>
              <div class="flex justify-end items-center gap-6">
                <div data-svg-wrapper>
                  <svg
                    width="15"
                    height="15"
                    viewBox="0 0 15 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.71885 15C10.3778 15 13.4739 9.22845 13.4739 4.22491C13.4739 4.06266 13.471 3.8968 13.4651 3.73455C14.0674 3.19849 14.5872 2.53451 15 1.7738C14.4391 2.08095 13.8435 2.28154 13.2337 2.36873C13.8758 1.89504 14.3566 1.15088 14.5869 0.274221C13.9829 0.714813 13.3223 1.02561 12.6334 1.19329C12.1692 0.586356 11.5556 0.184494 10.8873 0.0498297C10.219 -0.0848268 9.53325 0.0552141 8.93606 0.448315C8.33894 0.841408 7.86362 1.46567 7.58362 2.22456C7.30369 2.98347 7.23462 3.83474 7.38719 4.64677C6.16406 4.57123 4.96746 4.18017 3.87499 3.49897C2.78252 2.81776 1.81856 1.8616 1.04561 0.692475C0.65275 1.52607 0.532536 2.51251 0.709394 3.45127C0.88625 4.39004 1.34691 5.21071 1.99776 5.7465C1.50914 5.72742 1.03124 5.56549 0.603516 5.27415V5.32102C0.603078 6.19579 0.848813 7.04384 1.29894 7.72089C1.74908 8.39794 2.37583 8.86223 3.07266 9.03484C2.62004 9.18722 2.14499 9.20945 1.68427 9.09976C1.88091 9.85204 2.26348 10.5101 2.77861 10.9819C3.29373 11.4538 3.9157 11.716 4.55771 11.7318C3.46776 12.7855 2.12136 13.3571 0.73535 13.3544C0.489554 13.3539 0.243999 13.3354 0 13.2988C1.40804 14.4106 3.04596 15.0011 4.71885 15Z" fill="white" fill-opacity="0.8" />
                  </svg>
                </div>
                <div data-svg-wrapper>
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
                </div>
                <div data-svg-wrapper>
                  <svg
                    width="15"
                    height="15"
                    viewBox="0 0 15 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0287 0H8.06912V10.2174C8.06912 11.4348 6.93088 12.4348 5.51434 12.4348C4.09781 12.4348 2.95953 11.4348 2.95953 10.2174C2.95953 9.02175 4.07252 8.04344 5.43847 8V5.43479C2.42833 5.47825 0 7.58694 0 10.2174C0 12.8696 2.47892 15 5.53965 15C8.60034 15 11.0792 12.8478 11.0792 10.2174V4.97825C12.1922 5.67392 13.5582 6.08694 15 6.10869V3.54348C12.7741 3.47826 11.0287 1.91304 11.0287 0Z" fill="white" fill-opacity="0.8" />
                  </svg>
                </div>
                <div data-svg-wrapper>
                  <svg
                    width="15"
                    height="11"
                    viewBox="0 0 15 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8506 2.37352C14.8506 2.37352 14.7041 1.2952 14.2529 0.82172C13.6816 0.198558 13.043 0.195502 12.75 0.158845C10.6524 5.82641e-08 7.50294 0 7.50294 0H7.49706C7.49706 0 4.34766 5.82641e-08 2.25 0.158845C1.95703 0.195502 1.31836 0.198558 0.747069 0.82172C0.295899 1.2952 0.152344 2.37352 0.152344 2.37352C0.152344 2.37352 0 3.64122 0 4.90588V6.09108C0 7.35578 0.149414 8.62348 0.149414 8.62348C0.149414 8.62348 0.295898 9.7018 0.744137 10.1752C1.31543 10.7984 2.06543 10.7771 2.39941 10.8443C3.60059 10.9634 7.5 11 7.5 11C7.5 11 10.6524 10.9939 12.75 10.8381C13.043 10.8015 13.6816 10.7984 14.2529 10.1752C14.7041 9.7018 14.8506 8.62348 14.8506 8.62348C14.8506 8.62348 15 7.35878 15 6.09108V4.90588C15 3.64122 14.8506 2.37352 14.8506 2.37352ZM5.95019 7.52984V3.13414L10.0019 5.33964L5.95019 7.52984Z" fill="white" fill-opacity="0.8" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</body>
</html>