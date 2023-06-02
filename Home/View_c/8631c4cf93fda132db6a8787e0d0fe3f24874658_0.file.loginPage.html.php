<?php
/* Smarty version 3.1.30, created on 2023-05-16 10:49:35
  from "E:\PHP\Test\Home\View\User\loginPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64635fbf7c4493_89262743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8631c4cf93fda132db6a8787e0d0fe3f24874658' => 
    array (
      0 => 'E:\\PHP\\Test\\Home\\View\\User\\loginPage.html',
      1 => 1684233991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_64635fbf7c4493_89262743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209317914064635fbf7c2ea6_90856260', "addCss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125126249164635fbf7c40c0_05664231', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addCss"} */
class Block_209317914064635fbf7c2ea6_90856260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<?php
}
}
/* {/block "addCss"} */
/* {block "content"} */
class Block_125126249164635fbf7c40c0_05664231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Login</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- login area start -->
        <div class="login-register-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4>登录</h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4>注册会员</h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="会员账号" />
                                                <input type="password" name="user-password" placeholder="会员密码" />
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        
                                                        <a href="#">找回密码?</a>
                                                    </div>
                                                    <button type="submit"><span>登录</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <p><input class="col-md-8 col-12" type="text" name="user-name" placeholder="会员账号" /><button class="btn btn-primary blog-btn col-md-3 col-12" style="margin-left: 5%; font-size: 15px;">重复确认</button></p>
                                                <input type="password" name="user-password" placeholder="会员密码" />
                                                <input type="password" name="user-password" placeholder="会员密码确认" />
                                                <input name="user-email" placeholder="Email" type="会员姓名" />
                                                <div class="button-box">
                                                    <button type="submit"><span>注册会员</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login area end -->
<?php
}
}
/* {/block "content"} */
}
