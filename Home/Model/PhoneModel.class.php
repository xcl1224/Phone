<?php
namespace Home\Model;
use Frame\Libs\BaseModel;
use \PDO;
use \PDOException;

class PhoneModel extends BaseModel{
        protected $table="admin_phone";
        //삼성리스트부분
        public function SamsungData($where,$startPage,$pageSize=10){
            try {
                if(empty($where)){
                    $where = "phone_type='Samsung'";
                }else{
                    $where .=" AND phone_type='Samsung'";
                }
                $rowCount = $this->rowCount(0,"phone_type='Samsung'");
                $pdo = $this->getPdo();
                $sql = "SELECT phone_title,phone_price,phone_img,phone_hit,phone_num FROM {$this->table} WHERE {$where} ORDER BY phone_num DESC LIMIT $startPage,$pageSize";
                $stmt = $pdo->query($sql);
                $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $sql = "SELECT phone_model,count(*) AS total FROM (SELECT phone_model FROM {$this->table} "; 
                $sql .="WHERE phone_type='Samsung') AS a GROUP BY phone_model";
                $stmt = $pdo->query($sql);
                $phoneModelCount = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return array(
                    "rowCount"=>$rowCount,
                    "phoneData"=>$phoneData,
                    "phoneModelCount"=>$phoneModelCount
                );
            } catch (\PDOException $e) {
                $this->showMesege($e);
            }         
        }
        //삼성싱글 부분
        public function samsungSingle($phone_num){
            try {
                $pdo = $this->getPdo();
                $sql = "SELECT A.phone_num,A.purchasing,A.product_number,A.phone_title,A.phone_modelName,A.phone_price,A.totalPrice,A.phone_hit,A.phone_content,A.phone_datetime,phone_spec.* FROM admin_phone";
                $sql .= " AS A LEFT JOIN phone_spec ON A.phone_modelName=phone_spec.phone_modelName WHERE phone_num={$phone_num}";
                $stmt = $pdo->query($sql);
                $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $sql = "SELECT photo_path1,photo_path2,photo_path3,photo_path4,photo_path5,photo_path6,photo_path7,photo_path8,";
                $sql .= "photo_path9,photo_path10,photo_path11,photo_path12 FROM photo WHERE admin_phone_id=$phone_num";
                $stmt = $pdo->query($sql);
                $imgData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return array(
                    "imgData"=>$imgData[0],
                    'phoneData'=>$phoneData
                );
            } catch (\PDOException $e) {
                $this->showMesege($e);
            }
        }

        //아이폰리스트 부분
        public function AppleData($where,$startPage,$pageSize=10){
            try {
                if(empty($where)){
                    $where = "phone_type='Apple'";
                }else{
                    $where .=" AND phone_type='Apple'";
                }
                $rowCount = $this->rowCount(0,"phone_type='Apple'");
                $pdo = $this->getPdo();
                $sql = "SELECT phone_title,phone_price,phone_img,phone_hit,phone_num FROM {$this->table} WHERE {$where} ORDER BY phone_num DESC LIMIT $startPage,$pageSize";
                $stmt = $pdo->query($sql);
                $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $sql = "SELECT phone_model,count(*) AS total FROM (SELECT phone_model FROM {$this->table} "; 
                $sql .="WHERE phone_type='Apple') AS a GROUP BY phone_model";
                $stmt = $pdo->query($sql);
                $phoneModelCount = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return array(
                    "rowCount"=>$rowCount,
                    "phoneData"=>$phoneData,
                    "phoneModelCount"=>$phoneModelCount
                );
            } catch (\PDOException $e) {
                $this->showMesege($e);
            }
        }
        //아이폰싱글 부분
        public function appleSingle($phone_num){
            try {
                $pdo = $this->getPdo();
                $sql = "SELECT A.phone_num,A.purchasing,A.product_number,A.phone_title,A.phone_modelName,A.phone_price,A.totalPrice,A.phone_hit,A.phone_content,A.phone_datetime,phone_spec.* FROM admin_phone";
                $sql .= " AS A LEFT JOIN phone_spec ON A.phone_modelName=phone_spec.phone_modelName WHERE phone_num={$phone_num}";
                $stmt = $pdo->query($sql);
                $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $sql = "SELECT photo_path1,photo_path2,photo_path3,photo_path4,photo_path5,photo_path6,photo_path7,photo_path8,";
                $sql .= "photo_path9,photo_path10,photo_path11,photo_path12 FROM photo WHERE admin_phone_id=$phone_num";
                $stmt = $pdo->query($sql);
                $imgData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return array(
                    "imgData"=>$imgData[0],
                    'phoneData'=>$phoneData
                );
            } catch (\PDOException $e) {
                $this->showMesege($e);
            }
        }

        //중국폰리스트 부분
        public function ChinaData($where,$startPage,$pageSize=10){
            try {
                if(empty($where)){
                    $where = "phone_type='China'";
                }else{
                    $where .=" AND phone_type='China'";
                }
                $rowCount = $this->rowCount(0,"phone_type='China'");
                $pdo = $this->getPdo();
                $sql = "SELECT phone_title,phone_price,phone_img,phone_hit,phone_num FROM {$this->table} WHERE {$where} ORDER BY phone_num DESC LIMIT $startPage,$pageSize";
                $stmt = $pdo->query($sql);
                $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $sql = "SELECT phone_model,count(*) AS total FROM (SELECT phone_model FROM {$this->table} "; 
                $sql .="WHERE phone_type='China') AS a GROUP BY phone_model";
                $stmt = $pdo->query($sql);
                $phoneModelCount = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return array(
                    "rowCount"=>$rowCount,
                    "phoneData"=>$phoneData,
                    "phoneModelCount"=>$phoneModelCount
                );
            } catch (\PDOException $e) {
                $this->showMesege($e);
            }
        }
        //중국폰싱글 부분
        public function chinaSingle($phone_num){
            try {
                $pdo = $this->getPdo();
                $sql = "SELECT A.phone_num,A.purchasing,A.product_number,A.phone_title,A.phone_modelName,A.phone_price,A.totalPrice,A.phone_hit,A.phone_content,A.phone_datetime,phone_spec.* FROM admin_phone";
                $sql .= " AS A LEFT JOIN phone_spec ON A.phone_modelName=phone_spec.phone_modelName WHERE phone_num={$phone_num}";
                $stmt = $pdo->query($sql);
                $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $sql = "SELECT photo_path1,photo_path2,photo_path3,photo_path4,photo_path5,photo_path6,photo_path7,photo_path8,";
                $sql .= "photo_path9,photo_path10,photo_path11,photo_path12 FROM photo WHERE admin_phone_id=$phone_num";
                $stmt = $pdo->query($sql);
                $imgData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return array(
                    "imgData"=>$imgData[0],
                    'phoneData'=>$phoneData
                );
            } catch (\PDOException $e) {
                $this->showMesege($e);
            }
        }
}
?>