<?php
namespace Admin\Controller;
use \Frame\Libs\BaseController;
use Admin\Model\AdminModel;

class AdminController extends BaseController{
    public function register(){
        $this->smarty->display('register.html');
    }

    //회원가입
    public function join(){
        $data['admin_id'] = $_POST['admin_id'];
        //아이디 중복여부 확인
        if(!$this->checkId($data['admin_id'])){
            echo "id";
            return;
        }
        $data['admin_name'] = $_POST['admin_name'];
        $data['admin_pass'] = $_POST['admin_pass'];
        $data['admin_phone'] = $_POST['admin_phone'];
        $data['admin_email'] = $_POST['admin_email'];
        //아래입력되는 부분
        $susess = AdminModel::getInstance()->insert($data);
        //ajax 반환되는 값
        if($susess){
            echo "ok";
        }else{
            echo 'no';
        }
    }

    //아이디 중복체크
    public function checkId($id){
        $where = "admin_id='{$id}'";
        return AdminModel::getInstance()->rowCount($where);
    }
    //로그인 페이지 
    public function login(){
        $this->smarty->display('login.html');
    }

    //로그인 체크등록
    public function loginCheck(){
        $adminId = $_POST['admin_id'];
        $adminPass = $_POST['admin_pass'];
        //아이디체크
        if(!$this->checkId($adminId)){
            echo "id";
            return;
        }
        $where = "admin_id='{$adminId}'";
        $user_pass = AdminModel::getInstance()->fetchOne($where,"admin_id ASC");
        if($adminPass != $user_pass['admin_pass']){
            echo "pass";
            return;
        }
        echo "ok";
    }
}
?>