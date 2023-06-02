<?php
namespace Home\Controller;
use Frame\Libs\BaseController;
use Home\Model\BuyThingsModel;

class BuyThingsController extends BaseController{
    // 구매페이지
    public function index(){
        if(!empty($_GET['phone_num'])){
            $prices = empty($_GET['prices'])? "" : $_GET['prices']; 
            $purchasing = empty($_GET['purchasing'])? "" : $_GET['purchasing'];
            $totalPrice = empty($_GET['totalPrice'])? "" : $_GET['totalPrice']; 
            $phoneModel = empty($_GET['phoneModel'])? "" : $_GET['phoneModel'];
            $phone_title = empty($_GET['phone_title'])? "" : $_GET['phone_title'];
            $this->smarty->assign(array(
                'phone_num' => $_GET['phone_num'],
                'prices' => $prices,
                'purchasing' => $purchasing,
                'totalPrice' => $totalPrice,
                "phoneModel" => $phoneModel,
                "phone_title" => $phone_title
            ));
            $this->smarty->display('index.html');
        }else{
            $this->jump("구매과정에서 에러발생",'/');
        }
    }
    //구매데이터입력
    public function BuyData(){
        try {
            if(empty($_SESSION['userKey']) && empty($_SESSION['userId'])){
                 echo 3;
                 die();
            }
            $data['phone_num'] = empty($_POST['phone_num']) ? "":$_POST['phone_num'];
            $data['phone_title'] = empty($_POST['phone_title']) ? "":$_POST['phone_title'];
            $data['phoneModel'] = empty($_POST['phoneModel']) ? "":$_POST['phoneModel'];
            $data['buyUser'] = empty($_POST['buyUser']) ? "" :$_POST['buyUser'];
            $data['buyType'] = empty($_POST['buyType'])?"":$_POST['buyType'];
            $data['postNum'] = empty($_POST['postNum'])?"":$_POST['postNum'];
            $data['adress'] = empty($_POST['adress'])?"":$_POST['adress'];
            $data['userId'] = $_SESSION['userId'];
            $data['userNum'] = $_SESSION['userKey'];
            $data['prices'] = empty($_POST['prices'])?"":$_POST['prices'];
            $data['purchasing'] = empty($_POST['purchasing'])?"":$_POST['purchasing'];
            $data['totalPrice'] = empty($_POST['totalPrice'])?"":$_POST['totalPrice'];
            $data['weixin'] = empty($_POST['weixin'])?"":$_POST['weixin'];
            $data['phoneNumber'] = empty($_POST['phoneNumber'])?"":$_POST['phoneNumber'];
            $alpha = range('a', 'z'); // a부터 z까지 알파벳 배열 생성
            $rand_keys = array_rand($alpha, 2); // 랜덤으로 2개의 인덱스 선택
            $rand_alpha = strtoupper($alpha[$rand_keys[0]] . $alpha[$rand_keys[1]]); // 선택된 인덱스에 해당하는 알파벳을 대문자로 변경
            $data['productNumber'] = $rand_alpha.date("Hi_s_md");
            $result = BuyThingsModel::getInstance()->insert(0,$data);
            echo $result;
        } catch (\PDOException $e) {
            echo 5;
            $this->showMesege($e);
        }
    }
    //구매내역페이지
    public function buythingList(){

    }
}
?>