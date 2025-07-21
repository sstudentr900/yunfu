<div class="p-6 flex flex-col gap-4 text-sm">
  <div class="customTable flex border-b border-neutral-300 text-neutral-800 font-bold">
    @foreach($forms as $form)
    <div class="{{ $form['name'].'Div' }}">
      <p>{{ $form['text'] }}</p>
    </div>
    @endforeach
    {{--<div class='idDiv'>
      <p>#</p>
    </div>
    <div class='updatedDiv'>
      <p>修改時間</p>
    </div>
    <div class='coverDiv'>
      <p>圖片</p>
    </div>
    <div class='accountDiv'>
      <p>帳號</p>
    </div>
    <div class='nameDiv'>
      <p>姓名</p>
    </div>
    <div class='phoneDiv'>
      <p>電話</p>
    </div>
    <div class='releaseDiv'>
      <p>狀態</p>
    </div>
    <div class='modify'>
      <p>動作</p>
    </div>--}}
  </div>
  @foreach($datas as $data)
  <div class="customTable flex border-b border-neutral-300 text-neutral-500">
    @foreach($forms as $form)
    <div class="{{ $form['name'].'Div' }}">
      {{--@php
          print_r($data);
        @endphp--}}
      @if ($form['type']=='img')
      <img src="{{ URL::asset('images').'/'.$data[$form['name']].'?'.rand() }}">
      @elseif ($form['type']=='release')
      <p>{{ $data[$form['name']]==$form['v_text']?$form['y_text']:$form['n_text'] }}</p>
      @elseif ($form['type']=='text')
      <p>{{ $data[$form['name']] }}</p>
      @elseif ($form['type']=='modify')
      @include('layouts.bamodify')
      @endif
    </div>
    @endforeach
    {{-- <div class='idDiv'>
      <p>{{ $data->id }}</p>
  </div>
  <div class='updatedDiv'>
    <p>{{ $data->updated_at }}</p>
  </div>
  <div class='coverDiv'>
    <img src="{{ URL::asset(config('app.imgName')).'/'.$data->cover.'?'.rand() }}">
  </div>
  <div class='accountDiv'>
    <p>{{ $data->account }}</p>
  </div>
  <div class='nameDiv'>
    <p>{{ $data->name }}</p>
  </div>
  <div class='phoneDiv'>
    <p>{{ $data->phone }}</p>
  </div>
  <div class='releaseDiv'>
    <p>{{ $data->release=='y'?'使用':'停用' }}</p>
  </div>
  @include('layouts.bamodify') --}}
</div>
@endforeach
</div>