<?php
namespace Admin\Model;
use Frame\Libs\BaseModel;
use \PDOException;
use PDO;

class PhoneModel extends BaseModel{
        protected $table = "admin_phone";

        //스펙리스트 부분
        public function specData($where,$startPage,$pageSize=10){
                try {
                        if(empty($where)){
                                $where = "2>1";
                        }
                        $rowCount = $this->rowCount("phone_spec",$where);
                        $sql = "SELECT * FROM phone_spec WHERE $where ORDER BY spec_number DESC LIMIT $startPage,$pageSize";
                        $pdo = PhoneModel::getInstance()->getPdo();
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        return array(
                                "rowCount"=>$rowCount,
                                "phoneData"=>$phoneData
                        );
                } catch (PDOException $e) {
                        $this->showMesege($e);
                }
        }
        //리스트 부분
        public function phoneData($where,$startPage,$pageSize=10){
                try {   
                        if(empty($where)){
                                $where = "2>1";
                        }
                        $rowCount = $this->rowCount(0,$where);
                        $sql="SELECT *FROM admin_phone WHERE $where ORDER BY phone_num DESC LIMIT $startPage,$pageSize";
                        $pdo = PhoneModel::getInstance()->getPdo();
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $phoneData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        return array(
                                "rowCount"=>$rowCount,
                                "phoneData"=>$phoneData
                        );
                } catch (\PDOException $e) {
                        $this->showMesege($e);
                }     
        }


        //삭제부분
        public function phoneDeletedata($phone_num){
                $pdo = PhoneModel::getInstance()->getPdo();
                $pdo->beginTransaction();
                try {
                    //admin_phone 삭제부분
                    $sql = "DELETE FROM {$this->table} WHERE phone_num=:phone_num";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":phone_num",$phone_num,PDO::PARAM_INT);
                    $stmt->execute();
                    $rowCount = $stmt->rowCount();
                    if($rowCount){
                        //파일 삭제부분
                        $sql = "SELECT * FROM photo WHERE admin_phone_id=:admin_phone_id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(":admin_phone_id",$phone_num);
                        $stmt->execute();
                        $data = $stmt->fetchAll(PDO::FETCH_NUM);
                        for($i=2;$i<count($data[0]);$i++){
                                if(file_exists($data[0][$i])){
                                    unlink($data[0][$i]); 
                                }
                        }
                        //photo 테이블 삭제부분
                        $sql = "DELETE FROM photo WHERE admin_phone_id=:admin_phone_id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(":admin_phone_id",$phone_num);
                        $stmt->execute();
                        $pdo->commit();
                        return true;
                    }else{
                        return false;
                    }          
                } catch (\PDOException $e) {
                        $pdo->rollback();
                        $this->showMesege($e);
                }
        }

        //status 업데이트 부분

}
?>