<!-- @once
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
    window.tablePassowd = function (url) {
      var html = creatHtml({
        'tage': 'div',
        'cl': 'publicOverlay password',
        'addHtml': creatHtml({
          'tage': 'div',
          'cl': 'publicform',
          'addHtml': [creatHtml({
            'tage': 'div',
            'cl': 'title',
            'addHtml': creatHtml({
              'tage': 'h3',
              'cl': 'title',
              'text': "修改密碼"
            })
          }), creatHtml({
            'tage': 'div',
            'cl': 'content',
            'addHtml': [creatHtml({
              'tage': 'ul',
              'addHtml': creatHtml({
                'tage': 'li',
                'addHtml': creatHtml({
                  'tage': 'input',
                  'attr': {
                    'type': 'password',
                    'name': 'password',
                    'placeholder': '請輸入密碼'
                  }
                })
              })
            }), creatHtml({
              'tage': 'div',
              'cl': 'bottom',
              'addHtml': [creatHtml({
                'tage': 'button',
                'cl': 'publicBtn2',
                'text': '取消',
                'handler': function handler() {
                  document.querySelector('.publicOverlay.password').remove();
                }
              }), creatHtml({
                'tage': 'button',
                'cl': 'publicBtn2',
                'text': '送出',
                'handler': function handler() {
                  var password = document.querySelector('.publicOverlay.password input[type="password"]');
                  var passwordValue = password.value;

                  if (!passwordValue) {
                    var puplicError = password.querySelector('.puplicError');

                    if (puplicError) {
                      puplicError.remove();
                    }

                    password.after(creatHtml({
                      'tage': 'div',
                      'cl': 'puplicError',
                      'text': '密碼不能為空'
                    }));
                  } else {
                    location.href = url + '/' + passwordValue;
                  }
                }
              })]
            })]
          })]
        })
      });
      document.querySelector('body').append(html);
    };
    window.tableDelet = function (url) {
      var html = creatHtml({
        'tage': 'div',
        'cl': 'publicOverlay delet',
        'addHtml': creatHtml({
          'tage': 'div',
          'cl': 'publicform',
          'addHtml': [creatHtml({
            'tage': 'div',
            'cl': 'title',
            'addHtml': creatHtml({
              'tage': 'h3',
              'cl': 'title',
              'text': "訊息通知"
            })
          }), creatHtml({
            'tage': 'div',
            'cl': 'content',
            'addHtml': [creatHtml({
              'tage': 'p',
              'text': '你確定刪除?'
            }), creatHtml({
              'tage': 'div',
              'cl': 'bottom',
              'addHtml': [creatHtml({
                'tage': 'button',
                'cl': 'publicBtn2',
                'text': '取消',
                'handler': function handler() {
                  document.querySelector('.publicOverlay.delet').remove(); // alert('取消',id)
                }
              }), creatHtml({
                'tage': 'button',
                'cl': 'publicBtn2',
                'text': '確認',
                'handler': function handler() {
                  // alert('確認',id)
                  location.href = url;
                }
              })]
            })]
          })]
        })
      });
      document.querySelector('body').append(html);
    };
  </script>
@endpush
@endonce -->
<div class="flex">
    @if(!isset($modify))   
    <a class="w-[30px] p-2 cursor-point text-neutral-500 hover:text-main" href="{{ URL::asset($active.'_update').'/'.$data->id.'/'.$pageStart }}">
      <svg class="fill-current" viewBox="0 0 24 24">
        <path d="M7.127 22.564l-7.126 1.436 1.438-7.125 5.688 5.689zm-4.274-7.104l5.688 5.689 15.46-15.46-5.689-5.689-15.459 15.46z"></path>
      </svg>
    </a>
    @endif
    @if($active=='bamanager' || $active=='bamember')   
    <a class="w-[30px] p-2 cursor-point text-neutral-500 hover:text-main" href="javascript:tablePassowd('{{ URL::asset($active.'_passord').'/'.$data->id.'/'.$pageStart }}')">
      <svg class="fill-current" viewBox="0 0 24 24">
        <path d="M16 2c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6zm0-2c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zm-5.405 16.4l-1.472 1.6h-3.123v2h-2v2h-2v-2.179l5.903-5.976c-.404-.559-.754-1.158-1.038-1.795l-6.865 6.95v5h6v-2h2v-2h2l2.451-2.663c-.655-.249-1.276-.562-1.856-.937zm7.405-11.4c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2z"></path>
      </svg>
    </a>
    @endif
    @if($pageStart!=1 || $pageStart==1 && count($datas)!=1)   
    <a class="w-[30px] p-2 cursor-point text-neutral-500 hover:text-main" href="javascript:tableDelet('{{ URL::asset($active.'_delete').'/'.$data->id.'/'.$pageStart }}')">
      <svg class="fill-current" viewBox="0 0 24 24">
        <path d="M19 24h-14c-1.104 0-2-.896-2-2v-17h-1v-2h6v-1.5c0-.827.673-1.5 1.5-1.5h5c.825 0 1.5.671 1.5 1.5v1.5h6v2h-1v17c0 1.104-.896 2-2 2zm0-19h-14v16.5c0 .276.224.5.5.5h13c.276 0 .5-.224.5-.5v-16.5zm-9 4c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6 0c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm-2-7h-4v1h4v-1z"></path>
      </svg>
    </a>
    @endif
</div>
