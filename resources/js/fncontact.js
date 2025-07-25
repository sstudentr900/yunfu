export function init(){
  // console.log('init');
  document.getElementById('myForm').addEventListener('submit', function() {
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.disabled = true;
    submitBtn.innerText = '處理中...';
  });
}