<?php
namespace Frame\Libs;
use Frame\Vendor\Smarty;

abstract class BaseController{
    protected $smarty;

    public function __construct()
    {
        //创建Smarty类的对象
		$smarty = new \Frame\Vendor\Smarty();
		//配置Smarty的左右定界符
		$smarty->left_delimiter = "<{";
		$smarty->right_delimiter = "}>";
		//指定新的编译目录：c:\windows\temp\view\
		$smarty->setCompileDir(APP_PATH."View_c".DS);
		//指定视图目录：./Home/View/Student/
		$smarty->setTemplateDir(VIEW_PATH);
		//给$this->smarty属性赋值
		$this->smarty = $smarty;
		$this->initSession();
    }
	//세션스타트
	public function initSession()
    {
        session_start();
    }

	//회원유저 인증부분
	protected function certification(){
		if(empty($_SESSION['userKey'])){
			$this->jump('先登录会员',"/index.php/User/loginPage.html");
		}
	}
	//跳转方法
	protected function jump($message,$url='?',$time=0)
	{
		echo "<script>alert('{$message}')</script>";
		header("refresh:{$time};url={$url}");
		die();
	}

	protected function showMesege($e){
		echo "<h2>执行SQL语句失败！SQL语句有问题！</h2>";
		echo "错误编号：".$e->getCode();
		echo "<br>错误行号：".$e->getLine();
		echo "<br>错误文件：".$e->getFile();
		echo "<br>错误信息：".$e->getMessage();
		die();
	}
}
?>