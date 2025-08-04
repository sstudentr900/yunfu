import './bootstrap';
const pageModules = {
  fn: () => import('./fn.js'),
  fnhome: () => import('./fnhome.js'),
  fncontact: () => import('./fncontact.js')
};
document.addEventListener('DOMContentLoaded', async() => {
  const page = document.documentElement.dataset.page; // 從 HTML 取得頁面標識
  try {
    //根據頁面動態載入
    if (pageModules[page]) {
      const pageModule = await pageModules[page]();
      pageModule.init(); // 調用頁面特定模組的 init
      // pageModules[page]().then(module => module.init()).catch(err => {
      //   console.error(`Failed to load module for page ${page}:`, err);
      // });
    }
    //共用模組 fn.js
    const fnModule = await pageModules['fn']();
    fnModule.init(); // 調用 fn.js 的 init
  } catch (err) {
    console.error(`Failed to load module:`, err);
  }
})
