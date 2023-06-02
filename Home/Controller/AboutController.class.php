<?php
namespace Home\Controller;
use Frame\Libs\BaseController;

class AboutController extends BaseController {
    public function index(){
        $this->smarty->display('index.html');
    }
}
?>