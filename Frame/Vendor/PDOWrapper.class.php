<?php
    namespace Frame\Vendor;
    use \PDO;
    use \PDOException;

    final class PDOWrapper{

        private $db_type;
        private $db_host;
        private $db_port;
        private $db_user;
        private $db_pass;
        private $db_name;
        private $charSet;
        private $pdo = null;

        public function __construct()
        {
            $this->db_type = $GLOBALS['config']['db_type'];
            $this->db_host = $GLOBALS['config']['db_host'];
            $this->db_port = $GLOBALS['config']['db_port'];
            $this->db_user = $GLOBALS['config']['db_user'];
            $this->db_pass = $GLOBALS['config']['db_pass'];
            $this->db_name = $GLOBALS['config']['db_name'];
            $this->charSet = $GLOBALS['config']['charset'];
            $this->createPdo();
            $this->setPdoErroMode();

        }

        private function createPdo(){
            try {
                $dsn = "{$this->db_type}:host={$this->db_host};port={$this->db_port};";
                $dsn .= "dbname={$this->db_name};charset={$this->charSet};";
    
                $this->pdo = new PDO($dsn,$this->db_user,$this->db_pass);
            } catch (PDOException $e) {
                $this->showMsg($e);
            }
        }

        private function setPdoErroMode(){
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

        //pdo 객체 필요할때 get방법
        public function getPdo(){
            return $this->pdo;
        }

        //exct insert, update ,delete
        public function exec($sql){
            try {
                return $this->pdo->exec($sql);
            } catch (\PDOException $e) {
                 $this->showMsg($e);
            }
        }

        //select fetchOne 
        public function fetchOne($sql){
            try {
                $PDOStatement = $this->pdo->query($sql);
                return $PDOStatement->fetch(PDO::FETCH_ASSOC);

            } catch (\PDOException $e) {
                $this->showMsg($e);
            }
        }

        //fetchAll
        public function fetchAll($sql){
            try {
                $PDOStatement = $this->pdo->fetchAll($sql);
                return $PDOStatement->fetchAll(PDO::FETCH_ASSOC); 

            } catch (\PDOException $e) {
                $this->showMsg($e);
            }
        }

        //rowCount
        public function rowCount($sql){
            try {
                $PDOStatement = $this->pdo->query($sql);
                return $PDOStatement->rowCount();
            } catch (\PDOException $e) {
                $this->showMsg($e);
            }
        }
        private function showMsg($e){
            echo "<h2>执行SQL语句失败！SQL语句有问题！</h2>";
            echo "错误编号：".$e->getCode();
            echo "<br>错误行号：".$e->getLine();
            echo "<br>错误文件：".$e->getFile();
            echo "<br>错误信息：".$e->getMessage();
            die();
        }
        
    }
?>