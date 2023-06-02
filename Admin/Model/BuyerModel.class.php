<?php
namespace Admin\Model;
use Frame\Libs\BaseModel;
use \PDO;
use \PDOException;

class BuyerModel extends BaseModel{
     protected $table="buy_tb";
     //구매자데이터 리스트
     public function buyerData($where,$startPage,$pageSize=10){
          try {
            if(empty($where)){
                    $where = "2>1";
            }
            $rowCount = $this->rowCount(0,$where);
            $sql = "SELECT * FROM {$this->table} WHERE $where ORDER BY buyNum DESC LIMIT $startPage,$pageSize";
                        $pdo = PhoneModel::getInstance()->getPdo();
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $BuyerData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array(
               "rowCount"=>$rowCount,
               "BuyerData"=>$BuyerData
               );
          } catch (\PDOException $e) {
            $this->showMesege($e);
          }

     }
     //구매 휴대폰디테일 페이지
     public function phoneDetail($phone_num){
          try {
               
               $sql = "SELECT * FROM admin_phone WHERE phone_num = $phone_num";
               $pdo = PhoneModel::getInstance()->getPdo();
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               $phoneData = $stmt->fetch(PDO :: FETCH_ASSOC);
               $sql = "SELECT photo_path1,photo_path2,photo_path3,photo_path4,photo_path5,photo_path6,photo_path7,photo_path8,";
               $sql .= "photo_path9,photo_path10,photo_path11,photo_path12 FROM photo WHERE admin_phone_id = $phone_num";
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               $imgData = $stmt->fetch(PDO :: FETCH_ASSOC);
               return array(
                    "phoneData"=> $phoneData,
                    "imgData" => $imgData
               );
          } catch (\PDOException $e) {
               $this->showMesege($e);
          }
     }
}
?>