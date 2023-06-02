<?php
    namespace Frame\Libs;
    use \PDOException;

    abstract class BaseModel{
        protected $pdo=null;

        public function __construct()
        {
            $this->pdo = new \Frame\Vendor\PDOWrapper();
        }
        
        public static function getInstance(){
            //获取静态化方式调用的类名
            $modelClassName = get_called_class();
            //创建指定模型类对象，并返回
            return new $modelClassName();
        }

        //pdo 객체를 갖고오기
        public function getPdo(){
            return $this->pdo->getPdo();
        }
        //하나만 검색
        public function fetchOne($tableName=0,$where="2>1"){
            if($tableName == 0){
                $tableName = $this->table;
            }
            $sql = "SELECT * FROM {$tableName} WHERE  {$where}";
            return $this->pdo->fetchOne($sql);
        }
        //전체 검색
        public function fetchAll($tableName=0,$where="2>1"){
            if($tableName == 0){
                $tableName = $this->table;
            }
            $sql = "SELECT * FROM {$tableName} WHERE  {$where}";
            return $this->pdo->fetchAll($sql);
        }
        //개수를 검색
        public function rowCount($tableName=0,$where="2>1"){
            if($tableName == 0){
                $tableName = $this->table;
            }
            $sql = "SELECT * FROM {$tableName} WHERE {$where}";
            return $this->pdo->rowCount($sql);
        }

        //삭제
        public function delete($tableName=0,$where="2>1"){
            if($tableName == 0){
                $tableName = $this->table;
            }
            $sql = "DELETE FROM {$tableName} WHERE {$where}";
            return $this->pdo->exec($sql);
        }
        //업데이트 부분
        public function update($tableName=0,$data,$where="2>1"){
            if($tableName == 0){
                $tableName = $this->table;
            }
            $str ="";
            foreach($data as $key=>$value){
                $str .= "{$key}={$value},";          
            }
            $str = rtrim($str,",");
            $sql = "UPDATE {$tableName} SET {$str} WHERE {$where}";
            return $this->pdo->exec($sql);
        }
        //입력부분
        public function insert($tableName=0,$data){
            if($tableName == 0){
                $tableName = $this->table;
            }
            //构建"字段列表"和"值列表"字符串
            $fields = '';
            $values = '';
            foreach($data as $key=>$value)
            {
                $fields .= "$key,";
                $values .= "'$value',";
            }
            //去除结尾的逗号
            $fields = rtrim($fields,',');
            $values = rtrim($values,',');
            //构建插入的SQL语句：INSERT INTO news(title,content,hits) VALUES('标题','内容','30')
            $sql = "INSERT INTO {$tableName}($fields) VALUES($values)";
            //执行SQL语句，并返回布尔值
            return $this->pdo->exec($sql);
        }
        //메세지
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