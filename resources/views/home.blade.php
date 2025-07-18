<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>耘馥設計</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chiron+Hei+HK:ital,wght@0,200..900;1,200..900&family=Chiron+Sung+HK:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- slick -->
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" /> -->
</head>

<body>
  <div class="bg-white w-full h-auto flex 2xl:justify-center">
    <div class="relative flex 2xl:w-[1920px] max-lg:flex-col">
      <div class="flex-none z-999 w-[255px] max-xl:w-[222px] max-lg:h-[129px] ">
        <div class="fixed h-full px-8 bg-white flex flex-col items-center max-xl:pl-0 max-lg:left-0 max-lg:p-0 max-lg:flex-row max-lg:h-auto max-lg:bg-main max-lg:justify-between max-lg:w-full max-lg:px-8 max-lg:p-2 border-b-1 border-white/60">
          <div class="w-[190px] h-[180px] bg-main flex justify-center items-center max-lg:max-w-[82px] max-lg:h-[120px] ">
            <img src="{{url('/images/logo.svg')}}" alt="">
          </div>
          <div class="w-[95px] mt-12 flex flex-col justify-center gap-x-6 gap-y-3 text-2xl tracking-tight text-neutral-500 max-lg:mt-0 max-lg:w-[150px] max-lg:flex-row max-lg:flex-wrap max-lg:text-white/70 max-lg:text-base max-lg:mr-4">
            <a href="#" class="active:text-main  hover:text-main max-lg:hover:text-white">耘馥首頁</a>
            <a href="#" class="hover:text-main max-lg:hover:text-white">關於我們</a>
            <a href="#" class="hover:text-main max-lg:hover:text-white">專屬客製</a>
            <a href="#" class="hover:text-main max-lg:hover:text-white">作品案例</a>
            <a href="#" class="hover:text-main max-lg:hover:text-white">服務內容</a>
            <a href="#" class="hover:text-main max-lg:hover:text-white">聯絡我們</a>
          </div>
        </div>
      </div>
      <div class="flex-1 w-[calc(1920px-15px-255px)] max-[1920px]:w-[calc(100vw-15px-255px)] max-2xl:w-[calc(100vw-15px-255px)] max-xl:w-[calc(100vw-15px-222px)] max-lg:w-[calc(100vw-15px)]">
        <!-- Carousel -->
        <div class="homeSlick1 md:mb-18 max-md:mb-8">
          <div><img class="w-full object-center" src="{{url('/images/indexcarousel01.png')}}" alt=""></div>
          <div><img class="w-full object-center" src="{{url('/images/indexcarousel02.png')}}" alt=""></div>
          <div><img class="w-full object-center" src="{{url('/images/indexcarousel03.png')}}" alt=""></div>
        </div>
        <!-- company -->
        <div class="flex m-auto jusify-center gap-8 -mb-18 max-w-7xl md:px-8 max-lg:px-4 max-md:flex-col max-md:max-w-[580px] max-md:mb-8 max-sm:gap-4">
          <div class="flex-1 flex md:justify-center gap-4">
            <div class="max-w-[380px] flex flex-col mt-8">
              <div class="text-main text-2xl max-md:text-base">公司介紹</div>
              <div class="text-neutral-800 customFont2 text-7xl font-bold mb-4 max-sm:text-5xl">
                家的溫度
                <br>
                由您定義
              </div>
              <div class="text-justify text-neutral-500 text-lg mb-4 max-md:text-sm">
                我們是一家專注於新建 重建 翻新的 建築設計、工程與室內設計、工程的團隊 ，結合甲級營造實力，擁有超過30年在地經驗，完成無數屋主與商業空間的夢想藍圖。我們相信，設計不只是裝飾，而是生活方式的延伸。
              </div>
              <a href="#" class="bg-main w-fit px-16 py-3 rounded-[999px] gap-2 text-white text-2xl hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">了解更多</a>
            </div>
          </div>
          <div class="max-lg:flex max-lg:justify-end card">
            <img class="max-w-[390px] w-full" src="{{url('/images/indexcompany01.png')}}" alt="">
          </div>
        </div>
        <!-- ad -->
        <div class="mb-18 flex justify-center p-12 pt-0 bg-linear-to-b from-white from-50% to-[#736156] to-50% max-md:px-0 max-md:from-20% max-md:to-20%">
          <div class="flex justify-center items-end relative max-w-[980px] max-md:flex-col max-md:items-start">
            <div class="flex-1 max-md:pl-20">
              <img src="{{url('/images/indexbathroom01.png')}}" alt="">
            </div>
            <div class="md:absolute md:-bottom-4 md:-left-4 flex justify-center items-end bg-white py-2 px-4 max-md:mb-4 max-md:-mt-40 max-md:mx-8 max-sm:mx-4">
              <span class="text-main text-7xl font-bold max-md:text-6xl">8.8</span>
              <span class="text-main text-6xl font-bold customFont2 max-md:text-6xl">萬</span>
              <span class="flex items-center justify-center text-white text-xs font-bold rounded-[999px] bg-neutral-800 p-2 w-6 h-6 -ml-3 max-md:-ml-2">起</span>
            </div>
            <div class="flex-1 max-w-[480px] flex flex-col p-8 bg-white md:-ml-8 max-md:mx-8 max-sm:max-w-[340px] max-sm:mx-4 max-sm:p-4">
              <div class="text-main text-2xl max-md:text-base">名額有限X限時優惠X錯過不再</div>
              <div class="text-neutral-800 customFont2 text-7xl font-bold mb-4 max-sm:text-5xl">
                浴室翻新
                <br>
                整修專案
              </div>
              <div class="text-justify text-neutral-500 text-lg mb-4 max-md:text-sm">
                專案內容有防護工程 / 丈量配置設計 / 配電 / 改管 / 拆除 / 清運 / 打底 / 天花板 / 崁燈 / 壁磚 / 地磚 / 防水(滿頂) / 衛浴設備安裝(毛巾架 / 馬桶 / 洗手台)，此價格為1坪浴廁翻新價格，不含衛浴設備，限定台南市區，最終價格依現場評估為主。
              </div>
              <a href="#" class="bg-main w-fit px-16 py-3 rounded-[999px] gap-2 text-white text-2xl hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">了解更多</a>
            </div>
          </div>
        </div>
        <!-- services -->
        <div class="m-auto mb-18 pr-8 relative max-w-7xl max-md:px-4 max-md:mb-8 max-sm:pl-0">
          <div class="inline-flex flex-col justify-start items-start mb-4 max-lg:items-end max-lg:absolute max-lg:bg-white max-lg:right-8 max-lg:top-8">
            <div class="text-main text-2xl max-md:text-lg">服務項目</div>
            <div class="justify-center text-neutral-800 text-7xl font-bold customFont2 uppercase max-sm:text-4xl">Services</div>
          </div>
          <div class="flex justify-start items-start gap-12 max-lg:gap-0 max-lg:flex-col">
            <div class="flex-1 max-lg:flex-none max-lg:w-[220px]">
              <img src="{{url('/images/indexservices01.png')}}" alt="">
            </div>
            <div class="flex-2 grid grid-cols-2 gap-10 max-lg:bg-white/70 max-lg:p-4 max-lg:-mt-24 max-lg:ml-8 max-md:-mt-40 max-md:ml-4 max-md:grid-cols-1 max-md:gap-8">
              <div class="">
                <div class="flex items-end mb-4 gap-1 max-md:mb-1">
                  <div class="text-main text-5xl font-bold max-md:text-4xl">01</div>
                  <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">室內(空間)規劃</div>
                </div>
                <div class="text-justify text-neutral-500 text-lg max-md:text-sm">居家設計講求健康、幸福、風格、自我特色，我們替客戶把關，選擇安心材料、符合業主的使用，讓空間意象認知與傳達，更趨近於需求，設計一個屬於自己或家庭的生活空間。</div>
              </div>
              <div class="">
                <div class="flex items-end mb-4 gap-1 max-md:mb-1">
                  <div class="text-main text-5xl font-bold max-md:text-4xl">02</div>
                  <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">商辦設計</div>
                </div>
                <div class="text-justify text-neutral-500 text-lg max-md:text-sm">一個好的辦公空間，不只體現企業形象，更能展現專業與信賴感。我們提供全方位的商辦設計，從接待區、辦公區到會議室、主管室，依據企業量身打造，塑造高效與具識別度的空間風貌。</div>
              </div>
              <div class="">
                <div class="flex items-end mb-4 gap-1 max-md:mb-1">
                  <div class="text-main text-5xl font-bold max-md:text-4xl">03</div>
                  <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">專屬客製化</div>
                </div>
                <div class="text-justify text-neutral-500 text-lg max-md:text-sm">每個人對家的想像都不同，我們用心傾聽，依照你的生活習慣、喜好風格與預算，打造專屬的空間提案。從設計到施工，全程客製化調整，只為呈現屬於你的理想生活樣貌。</div>
              </div>
              <div class="">
                <div class="flex items-end mb-4 gap-1 max-md:mb-1">
                  <div class="text-main text-5xl font-bold max-md:text-4xl">04</div>
                  <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">老屋重建</div>
                </div>
                <div class="text-justify text-neutral-500 text-lg max-md:text-sm">老屋，是時間留下的痕跡，也是情感的承載。我們致力於老屋重建，透過專業設計與施工，讓空間重新煥發新生命。從格局調整、水電更新，到耐震安全，每一步都為您的生活品質把關。</div>
              </div>
              <div class="">
                <div class="flex items-end mb-4 gap-1 max-md:mb-1">
                  <div class="text-main text-5xl font-bold max-md:text-4xl">05</div>
                  <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">老屋翻修</div>
                </div>
                <div class="text-justify text-neutral-500 text-lg max-md:text-sm">老屋不舊，只是等待一次重新出發的機會。從改善採光、更新水電、優化動線到風格設計，重新為生活注入溫度與質感。讓每一段回憶延續下去，同時擁有全新的空間體驗。</div>
              </div>
              <div class="">
                <div class="flex items-end mb-4 gap-1 max-md:mb-1">
                  <div class="text-main text-5xl font-bold max-md:text-4xl">06</div>
                  <div class="text-neutral-800 text-2xl font-bold max-md:text-xl">老屋修繕</div>
                </div>
                <div class="text-justify text-neutral-500 text-lg max-md:text-sm">屋子住久了，總有需要補修的地方。我們提供從屋頂到地板的老屋修繕服務，包括防水抓漏、電線汰換、牆壁重作、磁磚更換等，依照現場狀況提供最適合的修繕方案。</div>
              </div>
            </div>
          </div>
        </div>
        <!-- work -->
        <div class="flex flex-col pr-8 max-lg:px-8 max-md:px-4">
          <div class="flex justify-between items-center mb-4">
            <div class="inline-flex flex-col justify-start items-start">
              <div class="text-main justify-center text-2xl max-md:text-lg">精選作品</div>
              <div class="justify-center text-neutral-800 text-7xl font-bold customFont2 uppercase max-sm:text-4xl">work</div>
            </div>
            <a href="#" class="bg-main w-fit px-16 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
              了解更多
            </a>
          </div>
          <div class="homeSlick2 mb-8">
            <div class="p-2">
              <a class="relative">
                <img class="w-full object-center" src="{{url('/images/indexwork01.png')}}" alt="">
                <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90%">
                  <div class="text-white text-2xl font-bold">東區小東路</div>
                  <div class="text-white text-lg">衛浴翻修</div>
                </div>
              </a>
            </div>
            <div class="p-2">
              <a class="relative">
                <img class="w-full object-center" src="{{url('/images/indexwork02.png')}}" alt="">
                <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90%">
                  <div class="text-white text-2xl font-bold">東區大同段</div>
                  <div class="text-white text-lg">電梯雙車</div>
                </div>
              </a>
            </div>
            <div class="p-2">
              <a class="relative">
                <img class="w-full object-center" src="{{url('/images/indexwork05.png')}}" alt="">
                <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90%">
                  <div class="text-white text-2xl font-bold">同安路</div>
                  <div class="text-white text-lg">重建案例</div>
                </div>
              </a>
            </div>
            <div class="p-2">
              <a class="relative">
                <img class="w-full object-center" src="{{url('/images/indexwork03.png')}}" alt="">
                <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90%">
                  <div class="text-white text-2xl font-bold">安南區商60</div>
                  <div class="text-white text-lg">七米電梯雙車</div>
                </div>
              </a>
            </div>
            <div class="p-2">
              <a class="relative">
                <img class="w-full object-center" src="{{url('/images/indexwork04.png')}}" alt="">
                <div class="w-full px-4 py-2 left-0 bottom-0 absolute flex flex-col justify-start items-start bg-linear-to-b from-white/0 from-0% to-stone-800 to-90%">
                  <div class="text-white text-2xl font-bold">府安路5段</div>
                  <div class="text-white text-lg">電梯雙車</div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- contact -->
        <div class="w-full h-[480px] flex items-center justify-center max-lg:h-[320px] relative bg-cover bg-center" style="background-image: url('{{ asset('/images/indexcontact01.png')}}')">
          <div class="flex flex-col items-center gap-4 p-4">
            <div class="customFont2 text-center text-white text-7xl font-normal uppercase max-md:text-4xl">Contact Us</div>
            <div class="text-center text-white text-lg mb-4 max-md:text-sm">
              體驗最精緻的室內設計
              <br>
              訂製專屬你的宅邸
            </div>
            <a href="#" class="bg-main w-fit px-16 py-3 rounded-[999px] gap-2 text-white text-2xl font-normal hover:bg-main-hover max-md:text-base max-md:px-8 max-md:py-2">
              立即諮詢
            </a>
          </div>
        </div>
        <!-- footer  -->
        <div class="w-full px-14 pt-12 bg-stone-800 max-xl:px-6 max-xl:pt-4">
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
                  <a href="#" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">回到首頁</div>
                  </a>
                  <a href="#" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">作品案例</div>
                  </a>
                  <a href="#" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">專屬客製</div>
                  </a>
                  <a href="#" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">關於我們</div>
                  </a>
                  <a href="#" class="w-20 flex justify-start items-center">
                    <div class="text-white/60 text-base tracking-wide hover:text-white max-md:text-sm">服務內容</div>
                  </a>
                  <a href="#" class="w-20 flex justify-start items-center">
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
        </div>
      </div>
    </div>
  </div>
  <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
  <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
  <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script> -->
  <!-- <script type="text/javascript">
    $(document).ready(function() {
      $('.homeSlick1').slick({
        arrows: false,
        autoplay: true,
        infinite: true,

      });
      $('.homeSlick2').slick({
        centerPadding: '60px',
        arrows: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
          breakpoint: 1280,
          settings: {
            slidesToShow: 3
          },
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, ]
      });
      // var rellax = new Rellax('.rellax');
    });
    document.addEventListener("DOMContentLoaded", (event) => {
      gsap.registerPlugin(ScrollTrigger)
      ScrollTrigger.batch(".card", {
        onEnter: (elements, triggers) => {
          gsap.to(elements, {
            opacity: 1,
            stagger: 0.15
          });
        },
      });
    });
  </script> -->
</body>

</html>