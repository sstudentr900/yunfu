@extends('layouts.fn')
@section('content')
<!-- carousel -->
@include('layouts.fncarousel', [
  'text_tw' => '專屬客製',
  'text_en' => 'Customization',
  'url' => url('/images/customization01.png'),
])
<!-- customization -->
@include('layouts.fncustomization', [
  'step' => 'Step 01',
  'title' => '外觀',
  'text' => '以深厚工藝底蘊，雕琢建築的獨特外觀。我們融合創新美學與實用機能，打造令人驚艷的立面風采。從流暢線條到精緻紋理，突破傳統束縛，為你量身塑造專屬的城市地標。',
  'url' => url('/images/customizationwork01.png'),
])
@include('layouts.fncustomization', [
  'step' => 'Step 02',
  'title' => '結構',
  'text' => '我們擁有甲級營造資質與30年結構實作經驗，不僅了解每一吋鋼筋與混凝土，更懂如何將你的需求融入結構之中。不被格局限制，從地基到樑柱，全為你量身打造。',
  'url' => url('/images/customizationwork02.png'),
])
@include('layouts.fncustomization', [
  'step' => 'Step 03',
  'title' => '格局',
  'text' => ' 我們相信，理想居所從「格局」開始被實現。不套用制式設計，而是根據生活動線、採光、需求規劃，量身打造屬於你的專屬格局配置，讓每一步都合乎你心。',
  'url' => url('/images/customizationwork04.png'),
])
@include('layouts.fncustomization', [
  'step' => 'Step 04',
  'title' => '裝潢',
  'text' => ' 我們提供全方位客製化裝潢與家電配置服務，從櫃體設計到家電收納、動線規劃到使用習慣，每一處細節都為你的生活方式量身打造，讓空間美學與實用機能完美融合。',
  'url' => url('/images/customizationwork03.png'),
])
@include('layouts.fncontact')
@endsection