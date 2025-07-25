<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//db
use App\Models\Contact;
//自訂函數
use App\Http\Controllers\CustomFn;

class BacontactController extends Controller
{
  //共用
  public $result = [
    'end' => 7, //顯示數量
    // 'release' => 'y',
  ];
  public function search()
  {
    $result = CustomFn::search($this->result['main_db']::count(), $this->result['end'], $this->result['pageNow']);
    $datas = $this->result['main_db']::offset($result['startValue'])->limit($result['endValue'])->orderBy('id', 'desc')->get();
    $this->result['datas'] =  $datas;
    $this->result['pageStart'] =  $result['pageStart'];
    $this->result['pageTotle'] =  $result['pageTotle'];
    // dd('$this->result',$this->result);
    return view($this->result['viewName'], $this->result);
  }
  public function bacontact_search($pageNow = 1)
  {
    $this->result['active'] = 'bacontact';
    $this->result['modify'] = false; //不編輯
    $this->result['mainTitle'] = '後台管員';
    $this->result['pageNow'] = $pageNow; //第一頁
    $this->result['main_db'] = new Contact;
    $this->result['viewName'] = 'bacontact';
    $this->result['forms'] = json_decode('[
      {"name":"id","text":"#","type":"text"},
      {"name":"name","text":"姓名","type":"text"},
      {"name":"email","text":"信箱","type":"text"},
      {"name":"source","text":"來源","type":"text"},
      {"name":"tinymce","text":"敘述","type":"text"},
      {"name":"modify","text":"動作","type":"modify"}
    ]', true);
    return $this->search();
  }
}
