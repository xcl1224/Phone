<?php
    namespace Admin\Controller;
    use Frame\Libs\BaseController;
    use Admin\Model\PhoneModel;
    use Frame\Vendor\PhotoCheck;
    use Frame\Vendor\Upload;
    use Frame\Vendor\Page;
    use \PDO;
    use \PDOException;

    class PhoneController extends BaseController{
        private $phoneImg="";
        //폰 메인화면
        public function index(){
            $this->smarty->display('index.html');
        }

        //휴대폰스펙 추가페이지
        public function addSpec(){
            $this->smarty->display("addSpec.html");
        }
        //휴대폰스펙 추가
        public function insertSpec(){
            try {
                $phone_type = $_POST['phone_type'];
                $phone_model = $_POST['phone_model'];
                $phone_modelName = $_POST['phone_modelName'];
                $cpu = $_POST['cpu'];
                $memory = $_POST['memory'];
                $storage_memory = $_POST['storage_memory'];
                $display_size = $_POST['display_size'];
                $camera = $_POST['camera'];
                $battery = $_POST['battery'];
                $phone_coler = $_POST['phone_coler'];
                $recognition = $_POST['recognition'];
                $Waterproof = $_POST['Waterproof'];
                $makeDay = $_POST['makeDay'];
                $phone_manual = $_POST['phone_manual'];
                $data = array(
                    'phone_type'=>$phone_type,
                    'phone_model'=>$phone_model,
                    'phone_modelName'=>$phone_modelName,
                    'phone_cpu'=>$cpu,
                    'phone_memory'=>$memory,
                    'storage_memory'=>$storage_memory,
                    'display_size'=>$display_size,
                    'camera'=>$camera,
                    'battery'=>$battery,
                    'phone_coler'=>$phone_coler,
                    'recognition'=>$recognition,
                    'Waterproof'=>$Waterproof, 
                    'makeDay'=>$makeDay,
                    'phone_manual'=>$phone_manual,
                );
                if(PhoneModel::getInstance()->insert('phone_spec',$data)){
                    $this->jump('스펙입력 성공하였습니다.','/index.php/admin/Phone/specList.html');
                }else{
                    $this->jump('스펙입력 실패하였습니다 관리자한테 문의부탁드립니다.','/index.php/admin/Phone/insertSpec.html');
                }
            } catch (PDOException $e) {
                $this->showMesege($e);
            }
        }
        //휴대폰스펙 삭제
        public function deleteSpec(){
            $spec_number = empty($_GET['spec_number']) ? "" : $_GET['spec_number'];
            if(!empty($spec_number)){
                if(PhoneModel::getInstance()->delete('phone_spec',"spec_number={$spec_number}")){
                    $this->jump('삭제에 성공하였습니다','http://test1.com/index.php/admin/Phone/specList.html');
                }else{
                    $this->jump('삭제실패하였습니다. 관리자한테 연락부탁드립니다','http://test1.com/index.php/admin/Phone/specList.html'); 
                }
            }else{
                $this->jump('스펙아이디를찾을수 없습니다. 관리자한테 연락부탁드립니다','http://test1.com/index.php/admin/Phone/specList.html');
            }
        }
        //휴대폰스펙 리스트
        public function specList(){
            try {
                $where = "";
                $params=array();
                $phone_type = empty($_GET['phone_type']) ? "" : "phone_type='{$_GET['phone_type']}' AND ";
                $phone_model = empty($_GET['phone_model']) ? "" : "phone_model='{$_GET['phone_model']}' AND ";
                $phone_modelName = empty($_GET['phone_modelName']) ? "" : "phone_modelName='{$_GET['phone_modelName']}' AND ";
                if(!empty($phone_type)){
                    $where .= $phone_type;
                    $params['phone_type']= $_GET['phone_type'];
                }
                if(!empty($phone_model)){
                    $where .= $phone_model;
                    $params['phone_model']=$_GET['phone_model'];
                }
                if(!empty($phone_modelName)){
                    $where .= $phone_modelName;
                    $params['phone_modelName']=$_GET['phone_modelName'];
                }
                $where = rtrim($where," AND");
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $pageSize = 9;
                $startrow	= ($page-1)*$pageSize;
                $specData = PhoneModel::getInstance()->specData($where,$startrow,$pageSize);
                $total = $specData['rowCount'];
                $page = new Page($total,$pageSize,$page,$params);
                $strPage = $page->showPage();
                $this->smarty->assign(
                    array(
                        'specData'=> $specData['phoneData'],
                        'strPage' => $strPage
                    )
                );
                $this->smarty->display("specList.html");
            } catch (PDOException $e) {
                $this->showMesege($e);
            }
        }
        //휴대폰정보 수정페이지
        public function phoneUpdate(){
            if(isset($_GET['phone_num'])){
                $phone_num = $_GET['phone_num'];
                $phoneData = PhoneModel::getInstance()->fetchOne("phone_num='{$phone_num}'");
                $this->smarty->assign(
                    array(
                        "phoneData" =>$phoneData
                    )
                    );
                $this->smarty->display("");
            }else{
                $this->jump("관리자 문의부탁드립니다","/index.php/admin");
            }
        }
        //휴대폰 정보수정후 업데이트
        public function phoneUpdateData(){
         
        }
        //휴대폰정보삭제
        public function phoneDelete(){
            if(isset($_GET['phone_num'])){
                if(PhoneModel::getInstance()->phoneDeletedata($_GET['phone_num'])){
                    $this->jump("상품을 삭제하였습니다","/index.php/admin/Phone/samsumg.html",0); 
                }else{
                    $this->jump("상품번호를 못받았습니다.관리인연락부탁드립니다1","/index.php",0);
                }
            }else{
                $this->jump("상품번호를 못받았습니다.관리인연락부탁드립니다","/index.php");
            }
        }
        //휴대폰 status상태수정
        public function phoneStatus(){
            if(isset($_GET['phone_num'],$_GET['status'])){
                $phone_num = $_GET['phone_num'];
                $phone_status = $_GET['status'];
                $data['phone_status'] = $phone_status;
                $where = "phone_num=".$phone_num;
                if(PhoneModel::getInstance()->update($data,$where)){
                    $this->jump("상품상태 수정완료하였습니다","/index.php/admin/Phone/samsumg.html");
                }else{
                    $this->jump("상품상태 수정을 실패하였습니다, 관리자한테문의해주세요","/index.php/admin/Phone/samsumg.html");
                }
            }else{
                $this->jump("관리자한테문의부탁드립니다","/index.php",0);
            }
        }

        //휴대폰리스트
        public function samsumg(){
            $where = "";
            $params=array();
            $page = isset($_GET['page'])? $_GET['page'] : 1;
            $phone_type = empty($_GET['phone_type']) ? "" : "phone_type='{$_GET['phone_type']}' AND ";
            $phone_model = empty($_GET['phone_model']) ? "" : "phone_type='{$_GET['phone_model']}' AND ";
            $phone_modelName = empty($_GET['phone_modelName']) ? "" : "phone_type='{$_GET['phone_modelName']}' AND ";
            $phone_status = empty($_GET['phone_status']) ? "" : "phone_status={$_GET['phone_status']} AND ";
            $phone_shop = empty($_GET['phone_shop']) ? "" : "phone_shop={$_GET['phone_shop']} AND ";
            if(!empty($phone_type)){
                $where .= $phone_type;
                $params['phone_type']= $_GET['phone_type'];
            }
            if(!empty($phone_status)){
                $where .= $phone_status;
                $params['phone_status']=$_GET['phone_status'];
            }
            if(!empty($phone_shop)){
                $where .= $phone_shop;
                $params['phone_shop']=$_GET['phone_shop'];
            }
            if(!empty($phone_model)){
                $where .=$phone_model;
                $params['phone_model']=$_GET['phone_model'];
            }
            if(!empty($phone_modelName)){
                $where .=$phone_modelName;
                $params['phone_modelName']=$_GET['phone_modelName'];
            }
            $where = rtrim($where," AND");
            $pageSize = 5;
            $startrow	= ($page-1)*$pageSize;
            $phoneData = PhoneModel::getInstance()->phoneData($where,$startrow,$pageSize);
            $total = $phoneData['rowCount'];
            $page = new Page($total,$pageSize,$page,$params);
            $strPage = $page->showPage();
            $this->smarty->assign(
                array(
                    'phoneData'=> $phoneData['phoneData'],
                    'strPage' => $strPage
                )
            );
            $this->smarty->display('index.html');
        }

        //폰데이터 페이지
        public function addPhone(){
            $this->smarty->display('addPhone.html');
        }

        //폰데이터입력
        public function insertPhoneData(){
            $files = $_FILES['img'];
            $check =new PhotoCheck();
            if($check->photoErroCheck($files)){
                $pdo = PhoneModel::getInstance()->getPdo();
                $pdo->beginTransaction();
                try {                
                    $phone_shop = $_POST['phone_shop'];
                    $phone_type = $_POST['phone_type'];
                    $phone_model = $_POST['phone_model'];
                    $phone_modelName = $_POST['phone_modelName'];
                    $phone_name = $_POST['phone_name'];
                    $phone_title = $_POST['phone_title'];
                    $phone_price = $_POST['phone_price'];
                    $purchasing = $_POST['purchasing'];
                    $totalPrice = (int)preg_replace('/[,]/', '', $phone_price)+(int)preg_replace('/[,]/', '', $purchasing);
                    $totalPrice = number_format($totalPrice);
                    $phone_content = $_POST['phone_content'];
                    $alpha = range('a', 'z'); // a부터 z까지 알파벳 배열 생성
                    $rand_keys = array_rand($alpha, 2); // 랜덤으로 2개의 인덱스 선택
                    $rand_alpha = strtoupper($alpha[$rand_keys[0]] . $alpha[$rand_keys[1]]); // 선택된 인덱스에 해당하는 알파벳을 대문자로 변경
                    $product_number = $rand_alpha.date("Hi_s_Ymd");
                    $inSql = "INSERT INTO admin_phone (phone_title,phone_type,phone_content,phone_price,purchasing,totalPrice,";
                    $inSql .= "phone_shop,phone_model,phone_modelName,phone_name,product_number) VALUES ";
                    $inSql .= "(:phone_title,:phone_type,:phone_content,:phone_price,:purchasing,:totalPrice,:phone_shop,:phone_model,:phone_modelName,:phone_name,:product_number)";
                    $stmt = $pdo->prepare($inSql);
                    $stmt->bindParam(':phone_title',$phone_title,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_type',$phone_type,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_content',$phone_content,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_price',$phone_price,PDO::PARAM_STR);
                    $stmt->bindParam(':purchasing',$purchasing,PDO::PARAM_STR);
                    $stmt->bindParam(':totalPrice',$totalPrice,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_shop',$phone_shop,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_model',$phone_model,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_modelName',$phone_modelName,PDO::PARAM_STR);
                    $stmt->bindParam(':phone_name',$phone_name,PDO::PARAM_STR);
                    $stmt->bindParam(':product_number',$product_number,PDO::PARAM_STR);
                    $stmt->execute();
                    // 새로운 레코드의 PRIMARY KEY 값을 가져오기 위해 LAST_INSERT_ID() 함수 실행
                    $last_id = $pdo->lastInsertId();
                    //사진을 입력하는 부분
                    $upload = new Upload();
                    $uploadUrls = $upload->uploadPhoto($files,$phone_type);
                    $query = "INSERT INTO photo (admin_phone_id,";
                    $query_params = array();
                    for($i=1; $i <= count($uploadUrls);$i++){
                        $query .= "photo_path$i,";
                        $query_params[] = ":photo_path$i";
                    }
                    $query = rtrim($query,',').")VALUES(";
                    $query .= ":admin_phone_id,".implode(", ", $query_params).")";
                    $stmt = $pdo->prepare($query);
                    $parrams=array();
                    foreach($uploadUrls as $key=>$vlaue){
                        if($key==0){
                            $this->phoneImg = $vlaue;
                        }
                        $file_key = $key+1;
                        $parrams[$key]=$vlaue;
                        $stmt->bindParam(":photo_path".$file_key,$parrams[$key]);
                    }
                    $stmt->bindParam(":admin_phone_id",$last_id);
                    $stmt->execute();
                    //phone테이블에 이미지 업데이트하는 부분
                    $sql = "UPDATE admin_phone SET phone_img=:phone_img WHERE phone_num=:phone_num";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":phone_img",$this->phoneImg);
                    $stmt->bindParam(":phone_num",$last_id);
                    $stmt->execute();
                    $pdo->commit();
                    $this->jump("상품추가완료하였습니다","/index.php/admin/Phone/samsumg.html",1);
                } catch (PDOException $e) {
                    //throw $th;
                    $pdo->rollback();
                    echo "<h2>执行SQL语句失败！SQL语句有问题！</h2>";
                    echo "错误编号：".$e->getCode();
                    echo "<br>错误行号：".$e->getLine();
                    echo "<br>错误文件：".$e->getFile();
                    echo "<br>错误信息：".$e->getMessage();
                    die();
                }
            }else{
                echo "에러 터졌습니다";
            }
            
            // 새로운 레코드의 PRIMARY KEY 값을 가져오기 위해 LAST_INSERT_ID() 함수 실행
            //$last_id = $conn->lastInsertId();
        }
    }
?>