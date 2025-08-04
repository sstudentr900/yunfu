//共用 gsap
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";
export function init(){

  //前台選單
  const menuToggle = document.querySelector("#menuToggle");
  // console.log('menuToggle',menuToggle)
  if(menuToggle){
    const body = document.querySelector("body");
    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      if (body.style.overflow === "hidden") {
        body.style.overflow = "";
      } else {
        body.style.overflow = "hidden";
      }
    });
  }


  // 表單送出成功 Toast 
  // 在blade使用
  // @if (session('success'))
  // <script>
  //   window.sessionSuccess = "{{ session('success') }}";
  // </script>
  // @endif
  if (window.sessionSuccess) {
    // 創建 Toast 元素
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = window.sessionSuccess;
    document.body.appendChild(toast);

    // 顯示 Toast
    setTimeout(function() {
      toast.classList.add('show');
    }, 100); // 短暫延遲確保元素渲染

    // 3秒後移除 Toast
    setTimeout(function() {
      toast.classList.remove('show');
      setTimeout(function() {
        toast.remove(); // 從 DOM 中完全移除
      }, 500); // 等待淡出動畫完成
    }, 3000);
  }

  
  //前台特效-掃光  
  const cards = document.querySelectorAll('.effects_holo');
  // 檢查卡片是否存在
  if (cards.length > 0) {
      cards.forEach(card => {
          card.addEventListener('mousemove', (e) => {
              const rect = card.getBoundingClientRect();
              const x = ((e.clientX - rect.left) / rect.width) * 100;
              const y = ((e.clientY - rect.top) / rect.height) * 100;
              // 更新光澤位置
              card.style.setProperty('--mouse-x', `${x}%`);
              card.style.setProperty('--mouse-y', `${y}%`);
              // 添加 3D 傾斜效果
              // const rotateY = (x - 50) / 3; // X 軸旋轉，範圍約 -10 到 10 度
              // const rotateX = (50 - y) / 3; // Y 軸旋轉，範圍約 -10 到 10 度
              // card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
              card.classList.add('hovered');
          });
          card.addEventListener('mouseleave', () => {
              // 移除光澤
              card.classList.remove('hovered');
              // 恢復卡片到原始位置
              // card.style.transform = 'rotateY(0deg) rotateX(0deg)';
          });
      });
  }

  // gsap
  gsap.registerPlugin(ScrollTrigger);
  ScrollTrigger.config({ passive: true }); // 解決 touchmove 警告
  // 全局配置 ScrollTrigger 使用 passive 事件監聽器
  // ScrollTrigger.config({
  //   autoRefreshEvents: "scroll,resize,visibilitychange,DOMContentLoaded,load",
  //   passive: true // 啟用 passive 事件監聽器
  // });
  gsap.utils.toArray(".gsapTextTop").forEach((text, index) => {
    const elements = text.querySelectorAll(".gsapText");
    // 設置 GSAP 動畫
    gsap.from(elements, {
      scrollTrigger: {
        trigger: text,
        // start: 'top center',
        // toggleActions: 'play none none reverse',
        // toggleActions: 'restart none none reverse', //reverse 結束觸發 
        // invalidateOnRefresh: true,   // 確保在寬螢幕下重新計算觸發點
        // markers: true,//檢查觸發點
      },
      duration: 1,// 動畫持續時間（秒）
      ease: "power2.out",// 緩動效果
      autoAlpha: 0,
      y: (index, element) => element.offsetHeight, // 動態設置 y 為元素自身高度
      stagger: 0.1, // 每個子元素間隔 0.2 秒
      // delay: index * 0.1 // 每個元素延遲 0.3 秒
    });
  })
  gsap.utils.toArray(".gsapTextBottom").forEach((text, index) => {
    const elements = text.querySelectorAll(".gsapText");
    // 設置 GSAP 動畫
    gsap.from(elements, {
      scrollTrigger: {
        trigger: text,
        // start: 'top center',
        // toggleActions: 'play none none reverse',
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,// 動畫持續時間（秒）
      ease: "power2.out",// 緩動效果
      y: (index, element) => -element.offsetHeight, // 動態設置 y 為元素自身高度
      autoAlpha: 0,
      stagger: 0.1, // 每個子元素間隔 0.2 秒
      // delay: index * 0.1 // 每個元素延遲 0.3 秒
    });
  })
  gsap.utils.toArray(".gsapImg").forEach((img, index) => {
    gsap.to(img, {
      scrollTrigger: {
        trigger: img,
        // start: 'top center',
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,
      ease: "power2.out",
      clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
    });
  })
  gsap.utils.toArray(".gsapLeft").forEach((left, index) => {
    gsap.from(left, {
      scrollTrigger: {
        trigger: left,
        // start: 'top center',
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,
      ease: "power2.out",
      x: -100,
      autoAlpha: 0,
      stagger: 0.1,
    });
  })
  gsap.utils.toArray(".gsapRight").forEach((right, index) => {
    gsap.from(right, {
      scrollTrigger: {
        trigger: right,
        // start: 'top center',
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,
      ease: "power2.out",
      x: 100,
      autoAlpha: 0,
      stagger: 0.1,
    });
  });
  gsap.utils.toArray(".gsapTop").forEach((top, index) => {
    gsap.from(top, {
      scrollTrigger: {
        trigger: top,
        // start: 'top center',
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,
      ease: "power2.out",
      y: 100,
      autoAlpha: 0,
      stagger: 0.1,
    });
  });
  gsap.utils.toArray(".gsapBottom").forEach((top, index) => {
    gsap.from(top, {
      scrollTrigger: {
        trigger: top,
        // start: 'top center',
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,
      ease: "power2.out",
      y: -100,
      autoAlpha: 0,
      stagger: 0.1,
    });
  });
  gsap.utils.toArray(".gsapNavTextBottom").forEach((text, index) => {
    const elements = text.querySelectorAll(".gsapText");
    // 設置 GSAP 動畫
    gsap.from(elements, {
      scrollTrigger: {
        trigger: text,
        // toggleActions: 'restart none none reverse',
      },
      duration: 1,// 動畫持續時間（秒）
      y: (index, element) => -element.offsetHeight, // 動態設置 y 為元素自身高度
      autoAlpha: 0,
      ease: "power2.out",// 緩動效果
      stagger: 0.1, // 每個子元素間隔 0.2 秒
      delay: 0.5, // 為整個動畫添加 0.5 秒延遲
    });
  })
  gsap.utils.toArray(".gsapScale").forEach((scale, index) => {
    gsap.fromTo(scale, {
      scale: 0.5, // 起始縮放比例（50%）
      opacity: 0 // 起始透明度
    },
    {
      scale: 1, // 結束縮放比例（100%）
      opacity: 1,
      duration: 1,// 動畫持續時間（秒）
      ease: "power2.out",// 緩動效果
      scrollTrigger: {
        trigger: scale,
        scrub: true, // 動畫隨滾動進度平滑變化
        // toggleActions: 'restart none none reverse',
      },
    });
  })
  // 設定左邊 div 的固定效果
  gsap.to(".gsapFixedLeft", {
    scrollTrigger: {
      trigger: ".gsapFixed", // 觸發滾動的元素
      start: "top top", // 當容器頂部到達視窗頂部時開始
      end: () => {
        const rightDiv = document.querySelector(".gsapFixedRight");
        return `bottom ${window.innerHeight}px`; // 當右邊 div 底部接近視窗底部時結束
      },
      pin: true, // 固定左邊 div
      pinSpacing: false, // 不保留固定時的空間
      scrub: true, // 動畫與滾動同步
    },
  });
}