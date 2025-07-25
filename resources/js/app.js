import './bootstrap';
// 表單送出成功 Toast 
// 在blade使用
// @if (session('success'))
// <script>
//   window.sessionSuccess = "{{ session('success') }}";
// </script>
// @endif
if (window.sessionSuccess) {
  document.addEventListener('DOMContentLoaded', function() {
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
  });
}

// 根據頁面屬性動態載入
document.addEventListener('DOMContentLoaded', () => {
  const pageModules = {
    fnhome: () => import('./fnhome.js'),
    fncontact: () => import('./fncontact.js')
  };
  const page = document.documentElement.dataset.page; // 從 HTML 取得頁面標識
  if (pageModules[page]) {
    pageModules[page]().then(module => module.init()).catch(err => {
      console.error(`Failed to load module for page ${page}:`, err);
    });
  }
})
