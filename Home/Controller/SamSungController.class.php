<?php

namespace Home\Controller;
use Frame\Libs\BaseController;
use Home\Model\PhoneModel;
use Frame\Vendor\PageUser;

class SamsungController extends BaseController{

     public function index(){
      
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $where = "";
        $params = array();
        $phone_model = empty($_GET['phone_model']) ? "" : $_GET['phone_model'];
        if(!empty($phone_model)){
         $where = "phone_model='{$phone_model}'";
         $params['phone_model'] = $phone_model;
        }
        $pageSize=9;
        $startrow = ($page-1)*$pageSize;
        $phoneData = PhoneModel::getInstance()->SamsungData($where,$startrow,$pageSize);
        $page = new PageUser($phoneData['rowCount'],$pageSize,$page,$params);
        $pageStr = $page->showPage();
        $phoneModelCount = array();
        for($i=0;$i<count($phoneData['phoneModelCount']);$i++){
            $phoneModelCount[$phoneData['phoneModelCount'][$i]['phone_model']] = $phoneData['phoneModelCount'][$i]['total'];
        }
        $this->smarty->assign(array(
         "phoneData" => $phoneData['phoneData'],
         "phoneModelCount" => $phoneModelCount,
         "phone_total" => $phoneData['rowCount'],
         "pageStr" => $pageStr
        ));        
        $this->smarty->display('index.html');
     }

     public function single(){
         if(!empty($_GET['phone_num'])){
            $singleData = PhoneModel::getInstance()->samsungSingle($_GET['phone_num']);
            PhoneModel::getInstance()->update('admin_phone',array('phone_hit'=>$singleData['phoneData'][0]['phone_hit']+1),"phone_num=".$_GET['phone_num']);
            $this->smarty->assign(
               array(
                  'imgData'=>$singleData['imgData'],
                  'phoneData'=>$singleData['phoneData'][0]
               )
            );
            $this->smarty->display('single.html');
         }else{
            $this->jump("싱글상품_관리자한테 연락부탁드립니다","/index.php");
         }
         
     }
}

?>