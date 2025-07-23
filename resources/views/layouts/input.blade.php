@once
@push('customStyle')
<style>
  /*puplicError 錯誤訊息*/
  .puplicError {
    font-size: 12px;
    font-family: 'Noto Sans TC', sans-serif;
    font-weight: 100;
    padding: 2px 6px;
    border-radius: 3px;
    background: red;
    color: #fff;
    position: absolute;
    left: 4px;
    bottom: -16px;
    font-weight: 400;
  }

  /*puplicRequired 必填*/
  .puplicRequired {
    color: red;
  }
</style>
@endpush
@endonce
@if ($type=='sort')
<label for="{{ $id }}">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <input
    type="number"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="請輸入{{ isset($place)?$place:$label }}"
    value="{{ old($id)?old($id):(!$errors->any() && isset($datas)?$datas->$id:($sortValue?$sortValue:'')) }}"
    pattern="^[0-9\s]*"
    required="{{isset($require)?'required':''}}">
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='datetime-local' || $type=='date')
<label for="{{ $id }}">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="請輸入{{ isset($place)?$place:$label }}"
    value="{{ old($id)?old($id):(!$errors->any() && isset($datas)?$datas->$id:'') }}">
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='tinymce')
<label for="{{ $id }}">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <textarea
    rows="5"
    class="tinymce"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    required="{{isset($require)?'required':''}}"
    placeholder="請輸入{{ isset($place)?$place:$label }}">{{ old($id)?old($id):(!$errors->any() && isset($datas)?$datas->$id:'') }}</textarea>
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='file')
{{-- html 單圖上傳預覽 --}}
<label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <div class="publicImg">
    <label for="{{$id}}">
      <span>請選擇檔案</span>
      <input class="cover" id="{{$id}}" type="file" accept=".jpg, .jpeg, .png, .pdf">
    </label>
    <!-- 全部表單沒有值錯誤(!$errors->any()),該值沒有錯誤(count($errors->get($id))),他有沒有值(!empty($datas->$id)),上次有該值(old($id)), -->
    @if(old($id))
    @php
    $imgSaveSrc = isset($imgSaveSrc)&&$imgSaveSrc?$imgSaveSrc:'images';
    $imgSrc = URL::asset($imgSaveSrc).'/'.old($id).'?'.rand();
    if(strpos(old($id),'data') !== false){
    $imgSrc = old($id);
    }
    @endphp
    <div class="img">
      <div class="imgDiv">
        <img src="{{ $imgSrc }}" alt="">
      </div>
      <i>
        <svg viewBox="0 0 24 24">
          <path d="M6 18L18 6M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </i>
      <input type="hidden" name="{{ isset($name)?$name:$id }}" value="{{ old($id) }}">
    </div>
    @elseif(isset($datas)&&!empty($datas->$id)&&!count($errors->get($id)))
    @php
    $imgSaveSrc = isset($imgSaveSrc)&&$imgSaveSrc?$imgSaveSrc:'images';
    $imgSrc = URL::asset($imgSaveSrc).'/'.$datas->$id.'?'.rand();
    @endphp
    <div class="img">
      <div class="imgDiv">
        <img src="{{ $imgSrc }}" alt="">
      </div>
      <i>
        <svg viewBox="0 0 24 24">
          <path d="M6 18L18 6M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </i>
      <input type="hidden" name="{{ isset($name)?$name:$id }}" value="{{ $datas->$id }}">
    </div>
    @endif
  </div>
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
{{-- css --}}
@once
@push('customStyle')
<style>
  /*publicImg 封面圖片*/
  .publicImg {
    width: 120px;
    height: 120px;
    /* border: 1px solid #ced4da; */
    border: 1px dashed #ced4da;
    border-radius: 4px;
    position: relative;
    display: inline-block;
    flex: 0 0 120px;
  }

  .publicImg.active {
    border: none;
  }

  .publicImg label {
    width: 120px;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }

  .publicImg label span {
    font-size: 12px;
    letter-spacing: 1px;
  }

  .publicImg input {
    display: none;
  }

  .publicImg .img {
    width: 100%;
    /* padding: 5px; */
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .publicImg .img img {
    width: 100%;
    height: auto;
    /* max-width: 110px;
    max-height: 110px; */
    /* object-fit: contain; */
    height: 120px;
    object-fit: cover;
    border-radius: 4px;
  }

  .publicImg .img:hover i {
    opacity: 1;
  }

  .publicImg i {
    position: absolute;
    padding: 4px;
    z-index: 1;
    top: 6px;
    right: 6px;
    background-color: #ef4444;
    color: white;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
    cursor: pointer;
    border: none;
  }

  .publicImg i svg {
    fill: #777;
  }
</style>
@endpush
@endonce
{{-- js --}}
@once
@push('customScript')
<script>
  window.creatHtml = function(o) {
    var tage = o.tage || ''
    var text = o.text || ''
    var cl = o.cl || ''
    var attr = o.attr || ''
    var addHtml = o.addHtml || ''
    var method = o.method || 'click'
    var handler = o.handler || ''
    var handler2 = o.handler2 || ''
    var method2 = o.method2 || method
    var html = document.createElement(tage)
    if (text) {
      html.innerHTML = text
    }
    if (cl) {
      html.className = cl
    }
    if (attr) {
      attr = Array.isArray(attr) ? attr : [attr]
      attr.forEach((element) => {
        Object.keys(element).forEach((item, i) => {
          html.setAttribute(item, element[item])
        })
      })
      // for(var i=0;i<attr.length;i++){
      //     html.setAttribute(attr[i]['n'],attr[i]['v'])
      // }
    }
    if (addHtml) {
      addHtml = Array.isArray(addHtml) ? addHtml : [addHtml]
      // console.log(addHtml)
      addHtml.forEach(element => html.append(element))
    }
    if (handler) {
      html.addEventListener(method, handler.bind(html), false)
    }

    if (handler2) {
      window.addEventListener(method2, handler2, false)
    }
    return html;
  }
  window.imgFn = function(w, h) {
    console.log('imgFn')
    var publicImg = document.querySelector('.publicImg');
    var imgRemove = function(img) {
      // publicImg.classList.remove('active')
      img.remove();
    }
    // 檢查並裁切圖片尺寸
    async function resizeImage(file, imgWidth = 560, imgHight = 350) {
      return new Promise((resolve) => {
        const img = new Image();
        img.onload = () => {
          const canvas = document.createElement('canvas');
          canvas.width = imgWidth;
          canvas.height = imgHight;
          const ctx = canvas.getContext('2d');

          let width = img.width;
          let height = img.height;
          let offsetX = 0;
          let offsetY = 0;

          // 按比例放大填滿畫布（短邊至少等於目標尺寸）
          const ratio = Math.max(imgWidth / width, imgHight / height);
          width = width * ratio;
          height = height * ratio;

          // 計算裁切偏移（居中）
          offsetX = (width - imgWidth) / 2;
          offsetY = (height - imgHight) / 2;

          // 繪製圖片，填滿畫布並裁切
          ctx.drawImage(img, -offsetX, -offsetY, width, height);

          // 轉換為 Blob
          canvas.toBlob((blob) =>resolve(blob), 'image/jpeg', 1.0);
        };
        img.onerror = () => resolve(null);
        img.src = URL.createObjectURL(file);
      });
    }

    // 壓縮圖片到 1MB 以下
    async function compressImage(file, imgSize = 1) {
      let quality = 1.0;
      let blob = file;

      while (blob.size > imgSize * 1024 * 1024 && quality > 0.1) {
        quality -= 0.1;
        blob = await new Promise((resolve) => {
          const img = new Image();
          img.onload = () => {
            const canvas = document.createElement('canvas');
            canvas.width = img.width;
            canvas.height = img.height;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0);
            canvas.toBlob((newBlob) => resolve(newBlob), 'image/jpeg', quality);
          };
          img.onerror = () => resolve(null);
          img.src = URL.createObjectURL(file);
        });
        if (!blob) break;
      }
      return blob;
    }
    var preview2 = async function(input, imgWidth, imgHight, imgSize) {
      //固定
      var imgSizeNumber = imgSize * 1048576 //大小
      var file = input.files[0];
      var type = file.type.split('/')[1];
      var idName = input.getAttribute('id');
      var closeImg = function(obj) {
        // obj.querySelector('.img').remove()
        imgRemove(obj.querySelector('.img'))
      }
      var inImage = function(o) {
        var publicImg = o.obj.closest(".publicImg");
        if (publicImg.querySelector('img')) {
          closeImg(publicImg)
          // publicImg.querySelector('img').remove();
        }
        publicImg.classList.add('active');
        publicImg.append(creatHtml({
          'tage': 'div',
          'cl': 'img',
          'addHtml': [
            creatHtml({
              'tage': 'div',
              'cl': 'imgDiv',
              'addHtml': [
                creatHtml({
                  'tage': 'img',
                  'attr': {
                    'src': o.img
                  },
                }),
              ]
            }),
            creatHtml({
              'tage': 'i',
              'text': '<svg viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
              'handler': function() {
                closeImg(publicImg)
                publicImg.classList.remove('active')
                // publicImg.querySelector('.img').remove()
                // o.obj.value='';
              }
            }),
            creatHtml({
              'tage': 'input',
              'attr': {
                'type': 'hidden',
                'name': idName,
                'value': o.img
              },
            }),
          ]
        }))
      }
      var file2Image = function(file, callback) {
        var image = new Image();
        var url = URL.createObjectURL(file);
        image.onload = function() {
          callback(image);
          URL.revokeObjectURL(url);
        };
        image.src = url;
      }

      if (!(type == 'jpeg' || type == 'jpg' || type == 'png')) {
        alert('錯誤 : 圖片類型只能是 jpg , jpeg , png');
        input.value = '';
        publicImg.classList.remove('active')
        return;
      }

      // 檢查尺寸並裁切
      let processedFile = await resizeImage(file, maxWidth = 560, maxHeight = 350);
      // if (!processedFile) {
      //   ignoredFiles.push(file.name);
      //   console.error(`無法處理檔案: ${file.name}`);
      //   continue;
      // }
      console.log('尺寸', processedFile)

      // 檢查大小並壓縮
      // if (processedFile.size > 1024 * 1024) { // 大於 1MB
      // processedFile = await compressImage(processedFile, 1);
      //   if (!processedFile) {
      //     ignoredFiles.push(file.name);
      //     console.error(`無法壓縮檔案: ${file.name}`);
      //     continue;
      //   }
      // }
      console.log('大小', processedFile)

      // console.log('processedFile', processedFile)
      const reader = new FileReader();
      reader.onloadend = function() {
        // callback(reader.result); // result 就是 base64 dataURL
        inImage({
          'obj': input,
          'img': reader.result
        })
      };
      reader.readAsDataURL(processedFile);
    }
    var cover = document.querySelector('#cover')
    if (cover) {
      cover.addEventListener('change', function() {
        console.log('change')
        // publicImg.classList.add('active')
        preview2(this, w, h, 1);
      })
    }
    var img = publicImg.querySelector('.img');
    if (img) {
      var i = publicImg.querySelector('i');
      if (i) {
        i.addEventListener('click', function() {
          console.log('i click')
          publicImg.classList.remove('active')
          imgRemove(img)
        })
      }
    }
  }
</script>
@endpush
@endonce 
@elseif ($type=='filemore')
{{-- 多圖上傳 --}}
<label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="filemore">
  <div id="preview">
    @if(isset($datas2))
    @foreach ($datas2 as $item)
    <div class="preview-item">
      <img src="{{ URL::asset('images').'/'.$item['cover'].'?'.rand() }}">
      <button type="button" class="delete-btn" data-id="{{$item['id']}}">
        <svg viewBox="0 0 24 24">
          <path d="M6 18L18 6M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>
    </div>
    @endforeach
    @endif
  </div>
  <div id="dropZone">
    <p>拖放圖片到此處或點擊選擇檔案</p>
    <!-- accept="image/*" -->
    <!-- name="filemore[]" -->
    <input type="file" id="fileInput" name="{{ isset($name)?$name:$id }}[]" accept=".jpg, .jpeg, .png" multiple>
  </div>
  <!-- <p id="status">已上傳 0 張圖片</p> -->
</div>
{{-- css --}}
@once
@push('customStyle')
<style>
  .filemore {
    flex-direction: column;
  }

  #dropZone {
    border: 1px dashed #ced4da;
    border-radius: 4px;
    padding: 32px;
    text-align: center;
    margin-top: 16px;
    transition: border-color 0.3s;
    cursor: pointer;
  }

  #dropZone:hover,
  #dropZone.dragover {
    border-color: #4b5563;
  }

  #dropZone p {
    color: #a1a1a1;
    margin: 0;
  }

  #fileInput {
    display: none;
  }

  #status {
    color: #777;
  }

  #preview {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 16px;
  }

  .preview-item {
    position: relative;
  }

  .preview-item img {
    width: 100%;
    height: 128px;
    object-fit: cover;
    border-radius: 8px;
  }

  .preview-item .delete-btn {
    position: absolute;
    padding: 4px;
    top: 8px;
    right: 8px;
    background-color: #ef4444;
    color: white;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
    cursor: pointer;
    border: none;
  }

  .preview-item:hover .delete-btn {
    opacity: 1;
  }
</style>
@endpush
@endonce
{{-- js --}}
@once
@push('customScript')
<script>
  window.filemore = function(maxWidth, maxHeight, maxSizeMB) {
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('fileInput');
    const preview = document.getElementById('preview');
    // const status = document.getElementById('status');
    let files = [];

    // 開啟檔案選擇器
    dropZone.addEventListener('click', () => fileInput.click());

    // 拖放事件
    dropZone.addEventListener('dragover', (e) => {
      e.preventDefault();
      dropZone.classList.add('dragover');
    });

    dropZone.addEventListener('dragleave', () => {
      dropZone.classList.remove('dragover');
    });

    dropZone.addEventListener('drop', (e) => {
      e.preventDefault();
      dropZone.classList.remove('dragover');
      handleFiles(e.dataTransfer.files);
    });

    // 檔案輸入事件
    fileInput.addEventListener('change', () => {
      handleFiles(fileInput.files);
      fileInput.value = ''; // 清空輸入以允許重複選擇同一檔案
    });

    // 檢查並裁切圖片尺寸
    async function resizeImage(file, maxWidth = 560, maxHeight = 350) {
      return new Promise((resolve) => {
        const img = new Image();
        img.onload = () => {
          const canvas = document.createElement('canvas');
          canvas.width = maxWidth;
          canvas.height = maxHeight;
          const ctx = canvas.getContext('2d');

          let width = img.width;
          let height = img.height;
          let offsetX = 0;
          let offsetY = 0;

          // 按比例放大填滿畫布（短邊至少等於目標尺寸）
          const ratio = Math.max(maxWidth / width, maxHeight / height);
          width = width * ratio;
          height = height * ratio;

          // 計算裁切偏移（居中）
          offsetX = (width - maxWidth) / 2;
          offsetY = (height - maxHeight) / 2;

          // 繪製圖片，填滿畫布並裁切
          ctx.drawImage(img, -offsetX, -offsetY, width, height);

          // 轉換為 Blob
          canvas.toBlob((blob) => resolve(blob), file.type, 1.0);
        };
        img.onerror = () => resolve(null);
        img.src = URL.createObjectURL(file);
      });
    }

    // 壓縮圖片到 1MB 以下
    async function compressImage(file, maxSizeMB = 1) {
      let quality = 1.0;
      let blob = file;

      while (blob.size > maxSizeMB * 1024 * 1024 && quality > 0.1) {
        quality -= 0.1;
        blob = await new Promise((resolve) => {
          const img = new Image();
          img.onload = () => {
            const canvas = document.createElement('canvas');
            canvas.width = img.width;
            canvas.height = img.height;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0);
            canvas.toBlob((newBlob) => resolve(newBlob), file.type, quality);
          };
          img.onerror = () => resolve(null);
          img.src = URL.createObjectURL(file);
        });
        if (!blob) break;
      }
      return blob;
    }

    // 處理上傳的檔案
    async function handleFiles(selectedFiles) {
      const allowedTypes = ['image/jpeg', 'image/png'];
      const allowedExtensions = ['.jpg', '.jpeg', '.png'];
      const validFiles = [];
      const ignoredFiles = [];
      for (const file of Array.from(selectedFiles)) {
        const extension = file.name.toLowerCase().match(/\.[^\.]+$/);
        const isValidType = allowedTypes.includes(file.type);
        const isValidExtension = extension && allowedExtensions.includes(extension[0]);

        // 檢查 MIME 類型或副檔名
        if (isValidType || isValidExtension) {
          // 檢查尺寸並裁切
          let processedFile = await resizeImage(file, maxWidth = 560, maxHeight = 350);
          if (!processedFile) {
            ignoredFiles.push(file.name);
            console.error(`無法處理檔案: ${file.name}`);
            continue;
          }

          // 檢查大小並壓縮
          if (processedFile.size > 1024 * 1024) { // 大於 1MB
            processedFile = await compressImage(processedFile, 1);
            if (!processedFile) {
              ignoredFiles.push(file.name);
              console.error(`無法壓縮檔案: ${file.name}`);
              continue;
            }
          }

          // 將 Blob 轉回 File 物件並添加到 files 陣列
          const newFile = new File([processedFile], file.name, {
            type: file.type
          });
          validFiles.push(newFile);
        } else {
          ignoredFiles.push(file.name);
        }
      }

      if (ignoredFiles.length > 0) {
        // alert(`已忽略 ${ignoredFiles.length} 個不支援的檔案（僅接受 JPG 和 PNG）：${ignoredFiles.join(', ')}`);
        alert(`僅接受 JPG 和 PNG`);
      }
      files.push(...validFiles);
      // console.log('files',files)
      // 更新 fileInput 的檔案列表
      const dataTransfer = new DataTransfer();
      files.forEach(f => dataTransfer.items.add(f));
      fileInput.files = dataTransfer.files;
      console.log('files', dataTransfer)
      // updateStatus();
      renderPreview();
    }

    // 更新狀態顯示
    // function updateStatus() {
    //   status.textContent = `已上傳 ${files.length} 張圖片`;
    // }

    // 刪除圖片
    window.deleteImage = function(index) {
      files.splice(index, 1);
      const dataTransfer = new DataTransfer();
      files.forEach(f => dataTransfer.items.add(f));
      fileInput.files = dataTransfer.files;
      renderPreview();
    }

    // 渲染預覽
    async function renderPreview() {
      preview.innerHTML = ''; // 清空預覽區域
      const promises = files.map((file, index) => {
        return new Promise((resolve) => {
          const reader = new FileReader();
          reader.onload = (e) => {
            const div = document.createElement('div');
            div.className = 'preview-item';
            const img = document.createElement('img');
            if (file.id) {
              img.src = e.target.result;
            } else {
              img.src = e.target.result;

            }
            const deleteBtn = document.createElement('button');
            deleteBtn.className = 'delete-btn';
            deleteBtn.innerHTML = `<svg viewBox="0 0 24 24">
                  <path d="M6 18L18 6M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>`;
            deleteBtn.addEventListener('click', () => deleteImage(index));
            div.appendChild(img);
            div.appendChild(deleteBtn);
            resolve(div);
          };
          reader.onerror = () => {
            console.error(`無法讀取檔案: ${file.name}`);
            resolve(null); // 跳過錯誤檔案
          };
          reader.readAsDataURL(file);
        });
      });

      const elements = (await Promise.all(promises)).filter(el => el !== null);
      elements.forEach(el => preview.appendChild(el));
      console.log('files2', files)
      // updateStatus();
    }

    //有圖片綁刪除
    @if(isset($datas2))
    var previewItem = preview.querySelectorAll('.preview-item');
    if (previewItem.length) {
      //綁初始值
      const datas2 = @json($datas2);
      Promise.all(
        datas2.map((data, index) => {
          const coverUrl = "{{ URL::asset('images') }}" + '/' + data.cover + '?' + Math.random();
          return fetch(coverUrl)
            .then(res => res.blob())
            .then(blob => {
              const file = new File([blob], data.cover, {
                type: blob.type
              })
              file.id = data.id
              return file;
            })
        })
      ).then(validFiles => {
        //給files 
        files.push(...validFiles);
        //給files input
        // const dataTransfer = new DataTransfer();
        // files.forEach(f => dataTransfer.items.add(f));
        // fileInput.files = dataTransfer.files;
      });

      //綁刪除
      previewItem.forEach((btn, index) => {
        btn.querySelector('.delete-btn').addEventListener('click', function() {
          deleteImage(index)
        })
      })
    }
    @endif
  }
</script>
@endpush
@endonce
@elseif ($type=='release')
{{-- html --}}
<label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <div class="publicRadio">
    <div class="radio">
      <!-- datas來源資料 release 預設 -->
      <input type="radio" id="y" name="{{ isset($name)?$name:$id }}" value="y"
        @if( old('release')=='y' || isset($datas) && !empty($datas) && $datas->release == 'y' || $release && $release== 'y')
      checked
      @endif
      >
      <label for="y">使用</label>
    </div>
    <div class="radio">
      <input type="radio" id="n" name="{{ isset($name)?$name:$id }}" value="n"
        @if( old('release')=='n' || isset($datas) && !empty($datas) && $datas->release == 'n')
      checked
      @endif
      >
      <label for="n">停用</label>
    </div>
  </div>
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
{{-- css --}}
@once
@push('customStyle')
<style>
  .publicRadio {
    display: flex;
  }

  .publicRadio .radio {
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .publicRadio .radio+.radio {
    margin-left: 16px;
  }
</style>
@endpush
@endonce
@elseif ($type=='releases')
<div class="publicFlex">
  <label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
  <div class="input">
    <div class="publicRadio">
      <div class="radio">
        <!-- old 錯誤時; isset 更新時; datas來源資料; $releases 預設-->
        <input type="radio" id="y" name="{{ isset($name)?$name:$id }}" value="y"
          @if( old('releases')=='y' || isset($datas) && !empty($datas) && $datas->releases == 'y' || $releases && $releases== 'y')
        checked
        @endif
        >
        <label for="y">使用</label>
      </div>
      <div class="radio">
        <input type="radio" id="n" name="{{ isset($name)?$name:$id }}" value="n"
          @if( old('releases')=='n' || isset($datas) && !empty($datas) && $datas->releases == 'n')
        checked
        @endif
        >
        <label for="n">停用</label>
      </div>
    </div>
    @error($id)
    <div class="puplicError">{!! $message !!}</div>
    @enderror
  </div>
</div>
@elseif ($type=='gender')
<label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <select name="gender">
    <option
      value="m"
      @if( old($id)=="m" || isset($datas) && $datas->$id == "m")
      selected
      @endif
      >男</option>
    <option
      value="w"
      @if( old($id)=="w" || isset($datas) && $datas->$id == "w")
      selected
      @endif
      >女</option>
    <option
      value="n"
      @if( old($id)=="n" || isset($datas) && $datas->$id == "n")
      selected
      @endif
      >不想說</option>
  </select>
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='select')
{{-- 使用範例 @include('layouts.input',['type'=>'select','id'=>'case_source','label'=>'個案來源','require'=>true,'options'=>array('1'=>'1','2'=>'2')]) --}}
<label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <select name="{{ isset($name)?$name:$id }}">
    @foreach ($options as $value => $name)
    <option
      value="{{$value}}"
      @if( old($id)==$value || isset($datas) && $datas->$id == $value)
      selected
      @endif
      >{{$name}}</option>
    @endforeach
  </select>
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='textarea')
<label>{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <textarea
    id="{{$id}}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="{{ isset($place)?$place:'' }}"
    required="{{isset($require)?'required':''}}">{{ old($id)?old($id):(!$errors->any() && isset($datas)?$datas->$id:'') }}</textarea>
  @error($id)
  <div class="puplicError">{{ $message }}</div>
  @enderror
</div>
@elseif ($type=='captcha')
<label for="{{ $id }}" class="label">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="inputDiv">
  <div class="input">
    <input
      type="{{ $type }}"
      id="{{ $id }}"
      name="{{ isset($name)?$name:$id }}"
      placeholder="請輸入{{ isset($place)?$place:$label }}">
    @error($id)
    <div class="puplicError">{!! $message !!}</div>
    @enderror
  </div>
  <div class="img">
    <img src="{{ captcha_src() }}" onclick="this.src='{{ captcha_src() }}'+Math.random() ">
  </div>
</div>
@elseif ($type=='password')
{{-- html --}}
<label for="{{ $id }}" class="label">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <i class="puplicPasswordEye" onclick="puplicPasswordEye(this)">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path d="M19.604 2.562l-3.346 3.137c-1.27-.428-2.686-.699-4.243-.699-7.569 0-12.015 6.551-12.015 6.551s1.928 2.951 5.146 5.138l-2.911 2.909 1.414 1.414 17.37-17.035-1.415-1.415zm-6.016 5.779c-3.288-1.453-6.681 1.908-5.265 5.206l-1.726 1.707c-1.814-1.16-3.225-2.65-4.06-3.66 1.493-1.648 4.817-4.594 9.478-4.594.927 0 1.796.119 2.61.315l-1.037 1.026zm-2.883 7.431l5.09-4.993c1.017 3.111-2.003 6.067-5.09 4.993zm13.295-4.221s-4.252 7.449-11.985 7.449c-1.379 0-2.662-.291-3.851-.737l1.614-1.583c.715.193 1.458.32 2.237.32 4.791 0 8.104-3.527 9.504-5.364-.729-.822-1.956-1.99-3.587-2.952l1.489-1.46c2.982 1.9 4.579 4.327 4.579 4.327z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 7l-3.36-2.171c-.405.625-.64 1.371-.64 2.171 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-.742 0-1.438.202-2.033.554l2.033 3.446z"></path>
    </svg>
  </i>
  <input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="請輸入{{ isset($place)?$place:$label }}"
    value="{{ old($id)?old($id):(!$errors->any() && isset($datas) && !empty($datas)?$datas->$id:'') }}">
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
{{-- css --}}
@once
@push('customStyle')
<style>
  .puplicPasswordEye {
    position: absolute;
    right: 12px;
    top: 13px;
    cursor: pointer;
  }

  .puplicPasswordEye svg {
    fill: #777;
  }

  .puplicPasswordEye.active svg:nth-child(1),
  .puplicPasswordEye svg:nth-child(2) {
    display: none;
  }

  .puplicPasswordEye.active svg:nth-child(2) {
    display: block;
  }
</style>
@endpush
@endonce
{{-- js --}}
@once
@push('customScript')
<script>
  window.puplicPasswordEye = function(obj) {
    var input = obj.nextSibling.nextSibling;
    if (obj.classList.contains('active')) {
      obj.classList.remove('active');
      input.setAttribute('type', 'password');
    } else {
      obj.classList.add('active');
      input.setAttribute('type', 'text');
    }
  }
</script>
@endpush
@endonce
@elseif ($type=='number')
<label for="{{ $id }}" class="label">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <input
    type="number"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="{{ isset($place)?$place:'' }}"
    value="{{ old($id)?old($id):(!$errors->any() && isset($datas) && !empty($datas)?$datas->$id:'') }}"
    pattern="^[0-9\s]*"
    required="{{isset($require)?'required':''}}">
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='phone' || $type=='tel')
<label for="{{ $id }}" class="label">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <input
    type="tel"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="{{ isset($place)?$place:'' }}"
    value="{{ old($id)?old($id):(!$errors->any() && isset($datas) && !empty($datas)?$datas->$id:'') }}"
    required="{{isset($require)?'required':''}}">
  <!-- pattern="^09[0-9]{8}" -->
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@elseif ($type=='text' || $type=='email')
<label for="{{ $id }}" class="label">{{ $label }}@if(isset($require))<span class="puplicRequired">*</span>@endif</label>
<div class="input">
  <input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ isset($name)?$name:$id }}"
    placeholder="{{ isset($place)?$place:'' }}"
    value="{{ old($id)?old($id):(!$errors->any() && isset($datas) && !empty($datas)?$datas->$id:'') }}"
    required="{{isset($require)?'required':''}}">
  @error($id)
  <div class="puplicError">{!! $message !!}</div>
  @enderror
</div>
@endif