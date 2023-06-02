<?php
namespace Frame;
use Frame\Vendor\PDOWrapper;

final class Frame{

    public static function run(){
        self :: initPathInfo();
        self :: initConfig();
        self :: initRouter();
        self :: initConst();
        self :: initAutoLoad();
        self :: initDisPatch();
    }

    //url 링크부분을 수정하는 부분
    private static function initPathInfo(){
        if(isset($_SERVER['PATH_INFO'])){
            $path = $_SERVER['PATH_INFO'];
            //.html 값 갖고오기
            $last_fix = strrchr($path,'.');
            //.hltml 없애기
            $path = str_replace($last_fix,'',$path);
            // 가장앞에 / 없애기
            $path = substr($path,1);
            // /기중으로 배열만들기 
            $arr = explode('/', $path);
            $length = count($arr);
            if($length == 1){
                $_GET['p'] = $arr[0];
            }else if($length == 2){
                $_GET['p'] = $arr[0];
                $_GET['c'] = $arr[1];
            }else if($length == 3){
                $_GET['p'] = $arr[0];
                $_GET['c'] = $arr[1];
                $_GET['a'] = $arr[2];
            }else{
                $_GET['p'] = $arr[0];
                $_GET['c'] = $arr[1];
                $_GET['a'] = $arr[2];

                for($i=3;$i<$length;$i+=2){
                    $_GET[$arr[$i]] = $arr[$i+1];
                }
            }

        }

    }

    //글로벌 함수를 설정하기 
    private static function initConfig(){
        if(isset($_GET['p'])){
            if($_GET['p'] == "admin"){
                $GLOBALS['config'] = require_once(ROOT_PATH."Admin".DS."Config".DS."config.php");
            }else{
                $GLOBALS['config'] = require_once(APP_PATH."Config".DS."config.php");
            }
        }else{
            $GLOBALS['config'] = require_once(APP_PATH."Config".DS."config.php");
        }
        
    }

    //라우터를 설정하기
    private static function initRouter(){

        $p = isset($_GET['p']) ? $_GET['p'] : $GLOBALS['config']['default_plat'];
        $c = isset($_GET['c']) ? $_GET['c'] : $GLOBALS['config']['default_controller'];
        $a = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['config']['default_action'];
        define("PLAT",$p);
        define("CONTROLLER",$c);
        define("ACTION",$a);
    }

    //const 상수를 설정 하기 
    private static function initConst(){

        //스마티 view 상수
        define("VIEW_PATH",ROOT_PATH.PLAT.DS."View".DS.CONTROLLER.DS);
        //Home public 상수
        define("CSS_PATH","/Public"."/".PLAT."/"."assets"."/"."css");
        define("FONT_PATH","/Public"."/".PLAT."/"."assets"."/"."fonts");
        define("IMG_PATH","/Public"."/".PLAT."/"."assets"."/"."images");
        define("JS_PATH","/Public"."/".PLAT."/"."assets"."/"."js");
        //admin  public 상수
        define("ADMIN_PICTURE_PATH","/Public"."/".PLAT."/"."static"."/"."picture");
        define("ADMIN_FILES_PATH","/Public"."/".PLAT."/"."files");
        define("ADMIN_CSS_PATH","/Public"."/".PLAT."/"."static"."/"."css");
        define("ADMIN_FONT_PATH","/Public"."/".PLAT."/"."static"."/"."font");
        define("ADMIN_IMG_PATH","/Public"."/".PLAT."/"."static"."/"."image");
        define("ADMIN_JS_PATH","/Public"."/".PLAT."/"."static"."/"."js");

    }

    //클래스 오토다운로딩하기 
    private static function initAutoLoad(){
        spl_autoload_register(function($className){
            $fileName = ROOT_PATH.str_replace('\\',DS,$className).".class.php";
            if(file_exists($fileName))require_once($fileName);
        });
    }

    //디스패치 액션취하는 부분
    private static function initDisPatch(){
        $controllerName = PLAT."\\"."Controller"."\\".CONTROLLER."Controller";
        $controllerObj = new $controllerName();
        $action =ACTION;
        $controllerObj->$action();
    }
}
?>