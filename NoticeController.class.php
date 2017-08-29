<?php
namespace Api\Controller;
use Think\Controller;
class NoticeController extends Controller {
	
	public function index(){
		
		$result['status'] = 1;
		$result['msg'] = '获取成功';
		$result['data'] = $data;
		exit(json_encode($result));
	}
}
//林文彪编辑了
 echo $data
 wwww