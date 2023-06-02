<?php
/* Smarty version 3.1.30, created on 2023-05-31 05:12:40
  from "D:\Coding\PHP\Test\Home\View\User\loginPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6476d7484f2310_60884547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47cc4865e33986b53928d13a86465d5eb20117d1' => 
    array (
      0 => 'D:\\Coding\\PHP\\Test\\Home\\View\\User\\loginPage.html',
      1 => 1685501031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6476d7484f2310_60884547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12460554936476d7484f1634_28821316', "addCss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17678171856476d7484f1fa6_71904404', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addCss"} */
class Block_12460554936476d7484f1634_28821316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "addCss"} */
/* {block "content"} */
class Block_17678171856476d7484f1fa6_71904404 extends Smarty_Internal_Block
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
                                            <form onsubmit="loginSubmit(event)">
                                                <input type="text" id="loginId" placeholder="输入账号" />
                                                <input type="password" id="loginPass" placeholder="输入密码" />
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <img src="http://test1.com/index.php/Home/User/loginCaptcha.html" onclick="this.src='http://test1.com/index.php/Home/User/loginCaptcha/aa/'+Math.random()" alt="">
                                                        <input id="loginCode" type="text" style="width: 35%; margin-left: 15px;">
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
                                            <form  onsubmit="joinSubmit(event)">
                                                <p><input class="col-md-8 col-12" type="text" id="joinId" placeholder="输入账号" /><button onclick="idCheck()" class="btn btn-primary blog-btn col-md-3 col-12" style="margin-left: 5%; font-size: 15px;">确认账号</button></p>
                                                <input id="joinName" placeholder="输入姓名" />
                                                <input type="password" id="joinPass" placeholder="输入密码" />
                                                <input type="password" id="joinPass1" placeholder="重新输入密码" />

                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <img src="http://test1.com/index.php/Home/User/joinCaptcha.html" onclick="this.src='http://test1.com/index.php/Home/User/joinCaptcha/aa/'+Math.random()" alt="">
                                                        <input id="joinCode" type="text" style="width: 38%; margin-left: 15px;">
                                                    </div>
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
        <?php echo '<script'; ?>
>
            //로그인 부분
            let requestRunning = false;
            let loginSubmit = function(event){
                event.preventDefault();
                //아이디 길이 및 영어자모인지 확인법
                let userId = document.getElementById('loginId');
                let checkId =function(id){
                    const idRegex = /^[a-z0-9]{8,18}$/; // 8~18자리 영어와 숫자만 허용하는 정규표현식
                    
                    if (!idRegex.test(id)) { // 정규표현식과 매치되지 않으면 false 반환
                        return false;
                    }   
                    return true; // 정규표현식과 매치되면 true 반환
                }
                let isValidId = checkId(userId.value);
                if (!isValidId) {
                    alert("账号 必须是 8~18字以内 英文小写和数字组成才可以！");
                    userId.focus();
                    return;
                }
                //인증번호 입력되였는지 확인하기
                let loginCode = document.getElementById('loginCode');
                if(loginCode.value.length !== 4){
                  alert("验证码是4位数组成");
                  loginCode.focus();
                  return;
                }
                //비밀번호 입력확인하기
                let userPass = document.getElementById('loginPass');
                if(userPass.value.length < 8){
                    alert("请填写8位数以上密码");
                    userPass.focus();
                    return;
                }
                if(requestRunning){
                    return;
                }
                requestRunning = true;
                $.ajax({
                    url : "/index.php/Home/User/userLogin.html",
                    method : "POST",
                    data : {
                        userId : userId.value,
                        userPass : userPass.value,
                        loginCode : loginCode.value
                    },
                    success : function(data){
                        if(data == 1){
                            alert("会员登录成功");
                            window.location.href = "/index.php/Home/User.html";                            
                        }else if(data == 2){
                            alert("没有同样账号请重新填写");
                            userId.focus();
                        }else if(data == 3){
                            alert("密码错误请重新填写，谢谢");
                            userPass.focus();
                        }else if(data == 4){
                            alert("填写验证码错误请重新填写，谢谢");
                            loginCode.focus();
                        }else if(data == 5){
                            alert("密码是空！请填写密码，谢谢");
                            userPass.focus();
                        }
                    },
                    error : function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                    },
                    complete : function(){
                        requestRunning = false;
                    }
                })
            }
            //회원가입부분
            let joinRequest = false;
            let clickButton = false;
            let joinSubmit = function(event){
                event.preventDefault();
                //아이티 체크부분
                if(!clickButton){
                    alert("请按 《确认账号》按键");
                    return;
                }
                let userId = document.getElementById('joinId').value;
                // 이름을 10자리 이내로 부탁드립니다
                let joinName = document.getElementById('joinName');
                if(!(joinName.value.length >= 2 && joinName.value.length < 9)){
                    alert('姓名_必须 大于等于2字 小于8字以下');
                    joinName.focus();
                    return;
                }
                //비밀번호 체크 부분
                //영어자모8 + 숫자1자리이상
                let checkPass =function(pass) {
                    const idRegex =  /^(?=.*[a-z]{6,})(?=.*\d{2,}).*$/; // 8자리이상 소자모,2자리이상 숫자 이루어져야합니다
                    
                    if (!idRegex.test(pass)) { // 정규표현식과 매치되지 않으면 false 반환
                        return false;
                    }   
                    return true; // 정규표현식과 매치되면 true 반환
                }
                let joinPass = document.getElementById('joinPass');
                if(!checkPass(joinPass.value)){
                    alert('密码_必须是 6字以上英文小字母 和 2字以上数字 组成才可以');
                    joinPass.focus();
                    return;
                }else{
                    let joinPass1 = document.getElementById('joinPass1');
                    if(joinPass.value !== joinPass1.value){
                        alert("2次密码输入不正确重新填写");
                        joinPass1.focus();
                        return;
                    }else if(joinPass.value == userId){
                        alert("密码和账号不能同样");
                        joinPass1.focus();
                        return;
                    }
                }
                //인증번호 입력되였는지 확인하기
                let joinCode = document.getElementById('joinCode');
                if(joinCode.value.length !== 4){
                  alert("验证码是4位数组成");
                  joinCode.focus();
                  return;
                }  
                $.ajax({
                    url : "/index.php/Home/User/userJoin.html",
                    method : "POST",
                    data : {
                        userId,
                        userName : joinName.value,
                        userPass : joinPass.value,
                        joinCode : joinCode.value
                    },
                    success : function(data){
                        if(data ==1){
                            alert('注册成功了');
                            window.location.href = "/index.html/Home/User/loginPage.html"; 
                        }else if(data ==2){
                            alert("注册失败了");
                        }else if(data ==3){
                            alert("验证码错误 重新填写");
                            joinCode.focus();
                        }else if(data ==4){
                            alert("有同样的账号请重新填写");
                            document.getElementById('joinId').focus();
                        }
                    },
                    error : function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                    },
                    complete : function(){
                        joinRequest = false;
                    }
                });
            }

            //가입아이디 체크
            let checkidRequest = false;
            let idCheck = function(){
                event.preventDefault();
                let userId = document.getElementById('joinId');
                let checkId =function(id) {
                    const idRegex = /^[a-z0-9]{8,18}$/; // 8~18자리 영어와 숫자만 허용하는 정규표현식
                    
                    if (!idRegex.test(id)) { // 정규표현식과 매치되지 않으면 false 반환
                        return false;
                    }   
                    return true; // 정규표현식과 매치되면 true 반환
                }
                let isValidId = checkId(userId.value);
                if (!isValidId) {
                    alert("账号 必须是 8~18字以内 英文小写和数字组成才可以！");
                    userId.focus();
                    return;
                }
                if(checkidRequest){
                    return;
                }
                checkidRequest = true;
                $.ajax({
                    url : "/index.php/Home/User/userIdCheck.html",
                    method : "POST",
                    data : {
                        userId : userId.value
                    },
                    success : function(data){
                        if(data ==1){
                            alert("可以使用此账号 谢谢");
                            clickButton = true;
                        }else if(data == 2){
                            alert("同样账号已存在 重新填写！谢谢");
                            clickButton = false;
                        }else{
                            alert("没填写账号 请输入账号 谢谢");
                        }
                    },
                    error : function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                    },
                    complete : function(){
                        checkidRequest = false;
                    }

                })
            }
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
