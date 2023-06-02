<?php
    namespace Admin\Controller;
    use Frame\Libs\BaseController;
    class IndexController extends BaseController{
        public function index(){
            $this->smarty->display('index.html');
        }
    }
?>