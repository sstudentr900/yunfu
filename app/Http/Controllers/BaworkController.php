<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//加密
use Illuminate\Support\Facades\Hash;
//自訂函數
use App\Http\Controllers\CustomFn;
//db
use App\Models\Work;

class BaworkController extends Controller
{
  //共用
  public $result = [
    'end' => 8, //顯示數量
    'release' => 'y',
  ];
  public $forms = array(
    ['type' => 'file', 'id' => 'cover', 'label' => '作品封面'],
    ['type' => 'text', 'id' => 'title', 'label' => '作品標題'],
    ['type' => 'text', 'id' => 'name', 'label' => '作品副標'],
    ['type' => 'select', 'id' => 'class', 'label' => '作品類型','options'=>array('1'=>'修繕案例','2'=>'重建案例')],
    ['type' => 'release', 'id' => 'release', 'label' => '作品狀態'],
    ['type' => 'file10', 'id' => 'file', 'label' => '內頁作品'],
  );
  //要驗證的值
  public $validate = [
    'cover' => 'required',
    'title' => 'required|max:20',
    'name' => 'required|max:10',
    'class' => 'required',
    'release' => 'required|in:y,n',
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
  public function addpost($request)
  {
    //接收驗證資料
    $input = $request->validate($this->validate);

    // save
    $this->result['main_db']::create([
      'cover' => CustomFn::imgAdd($input['cover'], 'baworks'),
      'title' => $input['title'],
      'name' => $input['name'],
      'class' => $input['class'],
      'release' => $input['release'],
    ]);

    return redirect($this->result['viewName']);
  }
  public function updatepost(Request $request)
  {
    //接收驗證資料 需濾掉password
    // unset($this->validate["password"]);
    // dd($this->validate);
    $input = $request->validate($this->validate);

    //save
    $data = $this->result['main_db']::find($this->result['main_id']);
    $imgUpdata = CustomFn::imgUpdata($input['cover'],$data,'baworks');
    if($imgUpdata){
        $data->cover = $imgUpdata;
    }
    $data->title = $input['title'];
    $data->name = $input['name'];
    $data->class = $input['class'];
    $data->release = $input['release'];
    $data->save();

    //回到更新頁
    return redirect($this->result['viewName']);
  }

  //上傳作品 Manager  ----------------------------------------------------------------
  public function baworks_search($pageNow = 1)
  {
    $this->result['active'] = 'baworks';
    $this->result['mainTitle'] = '上傳作品';
    $this->result['pageNow'] = $pageNow; //第一頁
    $this->result['main_db'] = new Work;
    $this->result['viewName'] = 'baworks';
    // {"name":"name","text":"副標","type":"text"},
    // {"name":"class","text":"類型","type":"text"},
    $this->result['forms'] = json_decode('[
      {"name":"id","text":"#","type":"text"},
      {"name":"updated_at","text":"修改時間","type":"text"},
      {"name":"cover","text":"封面","type":"img"},
      {"name":"title","text":"標題","type":"text"},
      {"name":"release","text":"狀態","type":"release","v_text":"y","y_text":"使用","n_text":"停用"},
      {"name":"modify","text":"動作","type":"modify"}
    ]', true);
    return $this->search();
  }
  public function baworks_add()
  {
    $this->result['active'] = 'baworks_add';
    $this->result['mainTitle'] = '上傳作品_新增';
    $this->result['forms'] = $this->forms;
    // dd('12',$this->result);
    return view('baworks_update', $this->result);
  }
  public function baworks_addpost(Request $request)
  {
    $this->result['main_db'] = new Work;
    $this->result['viewName'] = 'baworks';
    $this->result['viewNameError'] = 'baworks_add';
    return $this->addpost($request);
  }
  public function baworks_update($id)
  {
    $this->result['active'] = 'baworks_update';
    $this->result['mainTitle'] = '上傳作品_修改';
    $this->result['datas'] = Work::find($id);
    $this->result['forms'] = $this->forms;
    return view('baworks_update', $this->result);
  }
  public function baworks_updatepost(Request $request, $id, $pageId)
  {
    $this->result['main_db'] = new Work;
    $this->result['main_id'] = $id;
    $this->result['pageId'] = $pageId;
    $this->result['viewName'] = 'baworks/' . $pageId;
    $this->result['viewNameError'] = 'baworks_update/' . $id . '/' . $pageId;
    return $this->updatepost($request);
  }
  public function baworks_delete($id, $pageId)
  {
    //delete
    $data = Work::find($id);
    CustomFn::imgDelet($data);
    $data->delete();

    return redirect('baworks/' . $pageId);
  }
}
