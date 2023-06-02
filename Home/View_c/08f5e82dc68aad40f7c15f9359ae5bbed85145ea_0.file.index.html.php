<?php
/* Smarty version 3.1.30, created on 2023-05-08 11:37:15
  from "E:\PHP\Test\Home\View\BuyThings\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6458deebeadc46_92943503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f5e82dc68aad40f7c15f9359ae5bbed85145ea' => 
    array (
      0 => 'E:\\PHP\\Test\\Home\\View\\BuyThings\\index.html',
      1 => 1683538048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6458deebeadc46_92943503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15085717186458deebe6e797_75808191', "addCss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5491373476458deebe70d10_08583188', "addScript");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19197744816458deebead4e2_06628738', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addCss"} */
class Block_15085717186458deebe6e797_75808191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        #adressblock{
            display: none;
        }
    </style>
<?php
}
}
/* {/block "addCss"} */
/* {block "addScript"} */
class Block_5491373476458deebe70d10_08583188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/vendor/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "addScript"} */
/* {block "content"} */
class Block_19197744816458deebead4e2_06628738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Checkout</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- checkout area start -->
        <div class="checkout-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3 style="border-bottom: #878484;margin-bottom: 60px;" id="phone_title"><?php echo $_smarty_tpl->tpl_vars['phone_title']->value;?>
</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>姓名</label>
                                        <input type="text" id="buyUser"/>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="billing-select mb-4">
                                        <label>购买方式</label>
                                        <select id="buyType" name="buyType">
                                            <option value="到店取">店里取手机</option>
                                            <option value="邮寄手机">邮寄手机</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="adressblock">
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">
                                            <label>邮寄手机地址</label>
                                            <button class="btn btn-primary blog-btn" onclick="sample6_execDaumPostcode()">搜索地址</button>           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>邮编号码</label>
                                            <input type="text" id="sample6_postcode"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">                                  
                                            <input class="billing-address" id="sample6_address" placeholder="搜索地址内容" type="text" />
                                            <input type="hidden" id="sample6_extraAddress">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>填写剩下地址</label>
                                            <input type="text" id="sample6_detailAddress" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>微信号</label>
                                        <input type="text" id="weixin" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>手机号</label>
                                        <input type="text" id="phoneNumber"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                        <div class="your-order-area">
                            <h3>购买表</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li></li>
                                            <li>价格</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            
                                            <li><span class="order-middle-left">手机型号</span> <span
                                                class="order-price" id="phoneModel" ><?php echo $_smarty_tpl->tpl_vars['phoneModel']->value;?>
 </span></li>    
                                            <li><span class="order-middle-left">手机价</span> <span
                                                class="order-price" id="prices" ><?php echo $_smarty_tpl->tpl_vars['prices']->value;?>
 </span></li>
                                            <li><span class="order-middle-left">代购价</span> <span
                                                class="order-price" id="purchasing" ><?php echo $_smarty_tpl->tpl_vars['purchasing']->value;?>
 </span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">总价</li>
                                            <li id="totalPrice"><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
元</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div id="faq" class="panel-group">
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1" class="collapsed" aria-expanded="true" style="color:red;">购买前必读！</a>
                                                    </h4>
                                                </div>
                                                <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p style="color:#0a11eb;">每部手机都是个人交易市场帮您买过来。我们没有添加任何价格。购买后与本店无关。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="faq" class="panel-group">
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1" class="collapsed" aria-expanded="true">代购价是什么？</a>
                                                    </h4>
                                                </div>
                                                <div id="my-account-1" class="panel-collapse collapse" data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>我们为客户帮找货源，帮你代买的费用。这个价格 按照距离的 长短会有所改变。</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order mt-25">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['phone_num']->value;?>
" id="phone_num">
                                <a onclick="sendData();" class="btn-hover">购买</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->
        <!----카카오 주소록-->
        <?php echo '<script'; ?>
 src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            //카카오주소자동등록해주는 부분
            function sample6_execDaumPostcode() {
                new daum.Postcode({
                    oncomplete: function(data) {
                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
        
                        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                        var addr = ''; // 주소 변수
                        var extraAddr = ''; // 참고항목 변수
        
                        //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                            addr = data.roadAddress;
                        } else { // 사용자가 지번 주소를 선택했을 경우(J)
                            addr = data.jibunAddress;
                        }
        
                        // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                        if(data.userSelectedType === 'R'){
                            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                            if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                                extraAddr += data.bname;
                            }
                            // 건물명이 있고, 공동주택일 경우 추가한다.
                            if(data.buildingName !== '' && data.apartment === 'Y'){
                                extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                            }
                            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                            if(extraAddr !== ''){
                                extraAddr = ' (' + extraAddr + ')';
                            }
                            // 조합된 참고항목을 해당 필드에 넣는다.
                            document.getElementById("sample6_extraAddress").value = extraAddr;
                        
                        } else {
                            document.getElementById("sample6_extraAddress").value = '';
                        }
        
                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        document.getElementById('sample6_postcode').value = data.zonecode;
                        document.getElementById("sample6_address").value = addr;
                        // 커서를 상세주소 필드로 이동한다.
                        document.getElementById("sample6_detailAddress").focus();
                    }
                }).open();
            }

            //택배배송 선택시 주소블록 나오는부분
            let buyType = document.getElementById('buyType');
                buyType.addEventListener("change",function(){
                    let optionValue = this.options[this.selectedIndex].value;
                    let adressblock = document.getElementById('adressblock');
                    if(optionValue == "邮寄手机"){
                        adressblock.style.display="block";
                    }else{
                        adressblock.style.display="none";
                    }
                });
            
            // 데이터 ajax전송 부분
            let requestRunning = false;
            let sendData = function(){
                if(requestRunning){
                    return;
                }
                requestRunning = true;
                let phone_num = document.getElementById('phone_num').value;
                let phone_title = document.getElementById('phone_title').innerHTML;
                let phoneModel = document.getElementById('phoneModel').innerHTML;
                let buyUser = document.getElementById('buyUser').value;
                let buyType = document.getElementById('buyType').value;
                let postNum = document.getElementById('sample6_postcode').value;
                let adress1 = document.getElementById('sample6_address').value;
                let adress2 = document.getElementById('sample6_detailAddress').value;
                let adress = adress1 + "_" + adress2;
                let weixin = document.getElementById('weixin').value;
                let phoneNumber = document.getElementById('phoneNumber').value;
                let prices = document.getElementById('prices').innerHTML;
                let purchasing = document.getElementById('purchasing').innerHTML;
                let totalPrice = document.getElementById('totalPrice').innerHTML;
                    totalPrice = totalPrice.replace(/元/g, "");       
                //post데이터 전송부분
                $.ajax({
                    type : "POST",
                    url : "/index.php/Home/BuyThings/BuyData.html",
                    data :{phone_num,phone_title,phoneModel,buyUser,buyType,postNum,adress,phoneNumber,weixin,prices,purchasing,totalPrice},
                    success : function(data){
                        if(data == 1){
                            alert('购买成功.联系客服~');
                        }else{
                            console.log(data);
                            alert('购买失败！联系客服');
                        }
                    },
                    error : function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    },
                    complete: function() {
                    // AJAX 요청이 완료되었을 때 실행되는 함수
                    // 로딩 스피너를 숨기거나 사용자 인터페이스를 다시 활성화할 수 있습니다.
                    requestRunning = false;
                    }
                });
            }
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
