<?php
namespace Admin\Controller;
use Frame\Libs\BaseController;
use Admin\Model\BuyerModel;
use Frame\Vendor\Page;

class BuyerController extends BaseController{

    //구매 리스트
    public function buyList(){
        $where = "";
        $params=array();
        $buyType = empty($_GET['buyType']) ? "" : "buyType='{$_GET['buyType']}' AND ";
        $isDeposit = empty($_GET['isDeposit']) ? "" : "isDeposit='{$_GET['isDeposit']}' AND ";
        $phoneNumber = empty($_GET['phoneNumber']) ? "" : "phoneNumber='{$_GET['phoneNumber']}' AND ";
        $productNumber = empty($_GET['productNumber']) ? "" : "productNumber LIKE '{$_GET['productNumber']}%' AND ";
        $startDate = empty($_GET['startDate']) ? "" : $_GET['startDate'];
        $endDate = empty($_GET['endDate']) ? "" : $_GET['endDate'];
        if(!empty($buyType)){
            $where .= $buyType;
            $params['buyType']= $_GET['buyType'];
        }
        if(!empty($isDeposit)){
            $where .= $isDeposit;
            $params['isDeposit']=$_GET['isDeposit'];
        }
        if(!empty($productNumber)){
            $where .= $productNumber;
            $params['productNumber']=$_GET['productNumber'];
        }
        if(!empty($phoneNumber)){
            $where .= $phoneNumber;
            $params['phoneNumber']=$_GET['phoneNumber'];
        }
        if(!empty($startDate)&!empty($endDate)){
            $where .= " buyDate BETWEEN '{$startDate} 00:00:00' AND '{$endDate} 23:59:59' AND ";
            $params['startDate']=$_GET['startDate'];
            $params['endDate']=$_GET['endDate'];
        }
        $where = rtrim($where," AND");
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $pageSize = 10;
        $startrow = ($page-1)*$pageSize;
        $buyerData = BuyerModel::getInstance()->buyerData($where,$startrow,$pageSize);
        $total = $buyerData['rowCount'];
        $page = new Page($total,$pageSize,$page,$params);
        $strPage = $page->showPage();
        $this->smarty->assign(
            array(
                'strPage'=>$strPage,
                'buyerData'=>$buyerData['BuyerData']
            )
        );
        $this->smarty->display("buyerList.html");
    }

    //구매상태 수정
    public function updateIsDeposit(){
        $buyNum = isset($_POST['buyNum']) ?  $_POST['buyNum'] : "";
        $data['isDeposit'] = isset($_POST['IsDeposit']) ? "'".$_POST['IsDeposit']."'" : "";
         $depositDate = date('Y-m-d H:i:s');
         $data['depositDate'] = "'{$depositDate}'";
        if($buyNum != "" && $data['isDeposit'] != ""){
           $request = BuyerModel :: getInstance()-> update(0,$data,"buyNum={$buyNum}");
           echo $request;
        }    
    }
    //구매상품을 삭제하기
    public function buyerDelete(){
        $buyNum = empty($_GET['buyNum']) ? "" : $_GET['buyNum'];
        if($buyNum != ""){
            if(BuyerModel ::getInstance()->delete(0,"buyNum={$buyNum}")){
                $this->jump("삭제성공 하였습니다","/index.php/admin/Buyer/buyList.html");
            }else{
                $this->jump("삭제성공 하였습니다","/index.php/admin/Buyer/buyList.html");
            }
        }
    }

    //프린터 하기
    public function printBuyer(){
        if(!empty($_GET['buyNum'])){
            $buyNum = empty($_GET['buyNum']) ? "":$_GET['buyNum'];
            if($buyNum != ""){
                $buyer = BuyerModel :: getInstance()->fetchOne(0,"buyNum={$buyNum}");
                $this->smarty->assign(
                    array(
                        'buyer'=>$buyer
                    )
                );
                $this->smarty->display("printBuyer.html");
            }       
        }else{
            echo "<script>alter('관리자 연락 부탁드립니다')</script>";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        }
        
    }
    //휴대폰 상품디테일 보기
    public function phoneDetail(){
        if(!empty($_GET['phone_num'])){
            $phone_num = $_GET['phone_num'];
        }else{
            $this->jump("관리자한테 휴대폰상세페이지서 에러발생 알려주세요",'/index.php/admin.html');
        }
        $data = BuyerModel :: getInstance()->phoneDetail($phone_num);
        $this->smarty->assign(array(
            "phoneData" => $data['phoneData'],
            "imgData" => $data['imgData']
        ));
        $this->smarty->display('singleThing.html');
    }
}
?>