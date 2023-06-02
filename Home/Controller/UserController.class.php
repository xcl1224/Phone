<?php
namespace Home\Controller;
use Frame\Libs\BaseController;
use Frame\Vendor\Captcha;
use Home\Model\UserModel;
use \PDOException;

class UserController extends BaseController{
    //마이페이지
    public function index(){
        $this->certification();
        $userNum = $_SESSION['userKey'];
        $user = UserModel :: getInstance()->fetchOne(0,"userNum=$userNum");
        if(empty($user) == 1){
            $this->jump("请先登录一下会员","/index.php/Home/User/loginPage.html");
        }
        $this->smarty->assign(array(
            "user"=>$user         
        ));
        $this->smarty->display('myPage.html');
    }

	//회원가입获取验证码方法
	public function joinCaptcha()
	{
		//创建验证码类的对象
		$captcha = new Captcha();
		//将验证码字符串，保存到SESSION中
		$_SESSION['joinCaptcha'] = $captcha->getCode();
	}
    //로그인获取验证码方法
	public function loginCaptcha()
	{
		//创建验证码类的对象
		$captcha = new Captcha();
		//将验证码字符串，保存到SESSION中
		$_SESSION['loginCaptcha'] = $captcha->getCode();
	}
    // 로그인 페이지 
    public function loginPage(){

        $this->smarty->display('loginPage.html');
    }

    //회원등록
    public function userLogin(){
        try {
            //인증코드 부분
            if(!empty($_POST['loginCode'])){
                $loginCode = $_POST['loginCode'];
            }
            if($loginCode != $_SESSION['loginCaptcha']){
                echo 4;
                die();
            }
            //유저아이디 부분
            if(!empty($_POST['userId'])){
                $userId = $_POST['userId'];
            }
            $user = UserModel :: getInstance()->fetchOne(0,"userId='$userId'");
            if(empty($user) == 1){
                echo 2;
                die();
            }
            if(!empty($_POST['userPass'])){
                if (password_verify($_POST['userPass'], $user['userPass'])) {
                    // 비밀번호 일치
                    $_SESSION['userKey'] =  $user['userNum'];
                    $_SESSION['userId'] = $userId;
                    echo 1;                
                } else {
                    echo 3;
                    die();
                }
            }else{
                echo 5;
                die();
            }
        } catch (PDOException $e) {
            $this->showMesege($e);
        }
    }
    //회원 아이디 체크
    public function userIdCheck(){
        if(!empty($_POST['userId'])){
            $userId = $_POST['userId'];
            if(UserModel :: getInstance()->rowCount(0,"userId='$userId'")){
                echo 2;
            }else{
                echo 1;
            }
        }else{
            echo 3;
        }
    }
    //회원가입 페이지
    public function joinPage(){
        $this->smarty->display('joinPage.html');
    }

    //회원가입
    public function userJoin(){
        try {
            if(!empty($_POST['userId'])){
                $data['userId'] = $_POST['userId'];
            }
            if(UserModel :: getInstance()->rowCount(0,"userId='".$data['userId']."'")){
                echo 4;
                die();
            }
            if(!empty($_POST['userName'])){
                $data['userName'] = $_POST['userName'];
            }
            if(!empty($_POST['userPass'])){
                $userPass = $_POST['userPass'];
                $data['userPass'] = password_hash($userPass,PASSWORD_BCRYPT);
            }
            if(!empty($_POST['joinCode'])){
                if($_SESSION['joinCaptcha'] !== $_POST['joinCode']){
                    echo 3;
                    die();
                }
            }
            if(UserModel :: getInstance()->insert(0,$data)){
                echo 1;
                unset($_SESSION['joinCaptcha']);
            }else{
                echo 2;
            }

        } catch (PDOException $e) {
            $this->showMesege($e);
        }
        
    }

    //구매 페이지
    public function myCart(){

    }
    //로그아웃페이지
    public function logOut(){
        unset($_SESSION['userKey']);
        unset($_SESSION['loginCheck']);
        $_SESSION = array();
        session_destroy();
        $this->jump("会员已退出登录 谢谢","/");
    }
}
?>