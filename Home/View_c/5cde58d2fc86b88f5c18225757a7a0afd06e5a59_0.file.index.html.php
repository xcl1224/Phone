<?php
/* Smarty version 3.1.30, created on 2023-05-31 13:14:04
  from "F:\PHP\Phone\admin\View\Phone\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6477481c19f953_60423223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cde58d2fc86b88f5c18225757a7a0afd06e5a59' => 
    array (
      0 => 'F:\\PHP\\Phone\\admin\\View\\Phone\\index.html',
      1 => 1683113334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6477481c19f953_60423223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6803199846477481c19f429_77345355', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_6803199846477481c19f429_77345355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- content -->
    <div class="content ">
        
        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    
        <div class="row">
            <div class="col-md-10">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-md-flex gap-4 align-items-center">
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="mb-5 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <select class="form-select" id="phone_shop" >
                                                <option value="">구매앱</option>
                                                <option value="1">당근마켓</option>
                                                <option value="2">번개장터</option>
                                                <option value="3">중고나라</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="mb-5 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <select class="form-select" id="phone_type">
                                                <option value="">브랜드선택</option>
                                                <option value="Apple">아이폰</option>
                                                <option value="Samsung">삼성</option>
                                                <option value="China">중국폰</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="mb-5 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <select class="form-select" id="phone_model">
                                                <option value="">휴대폰_시리즈선택</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="mb-5 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <select class="form-select" id="phone_modelName">
                                                <option value="">휴대폰_모델선택</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="mb-5 mb-md-0">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <select class="form-select" id="phone_status">
                                                <option value="">판매상태</option>
                                                <option value="0">판매중</option>
                                                <option value="1">예약중</option>
                                                <option value="2">판매완료</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>                   
                            <div class="dropdown ms-auto">
                                <button type="button" onclick="search();" class="btn btn-primary btn-lg">상품검색</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['phoneData']->value, 'phone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-hover">                           
                            <ul class="list-group">
                                <li class="list-group-item disabled" aria-current="true" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_title'];?>
</li>
                                <li class="list-group-item">
                                <table class="table table-hover">
                                    <tbody>
                                      <tr>
                                        <td>상품번호</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['product_number'];?>
</td>
                                      </tr>
                                      <tr>
                                        <td>구매앱</td>
                                        <?php if ($_smarty_tpl->tpl_vars['phone']->value['phone_shop'] == 1) {?>
                                        <td><span class="badge bg-primary">당근마켓</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phone']->value['phone_shop'] == 2) {?>
                                        <td><span class="badge bg-primary">번개장터</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phone']->value['phone_shop'] == 3) {?>
                                        <td><span class="badge bg-primary">중고나라</span></td>
                                        <?php }?>
                                      </tr>
                                      <tr>
                                        <td>판매자이름</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_name'];?>
</td>
                                      </tr>
                                      <tr>
                                        <td>브랜드</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_type'];?>
</td>
                                      </tr>
                                      <tr>
                                        <td>모델명</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_modelName'];?>
</td>
                                      </tr>
                                      <tr>
                                        <td>판매가격</td>
                                        <td><span class="text-success" class="phone_price"><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_price'];?>
</span>원</td>
                                      </tr>
                                      <tr>
                                        <td>구매대행가격</td>
                                        <td><span class="text-success" class="purchasing"><?php echo $_smarty_tpl->tpl_vars['phone']->value['purchasing'];?>
</span>원</td>
                                      </tr>
                                      <tr>
                                        <td>총금액</td>
                                        <td><span class="text-success" class="totalPrice"><?php echo $_smarty_tpl->tpl_vars['phone']->value['totalPrice'];?>
</span>원</td>
                                      </tr>
                                      <tr>
                                        <td>조회수</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_hit'];?>
</td>
                                      </tr>
                                      <tr>
                                        <td>판매상태</td>
                                        <?php if ($_smarty_tpl->tpl_vars['phone']->value['phone_status'] == 0) {?>
                                        <td><span class="badge bg-primary">판매중</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phone']->value['phone_status'] == 1) {?>
                                        <td><span class="badge bg-success">예약중</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phone']->value['phone_status'] == 2) {?>
                                        <td><span class="badge bg-dark">판매완료</span></td>
                                        <?php }?>
                                      </tr>
                                    </tbody>
                                  </table>
                                </li>
                                <li class="list-group-item">
                                    <div class="alert alert-success" role="alert">
                                        <p><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_content'];?>
</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body">
                                <div class="d-flex">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_num'];?>
" class="phone_num">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <?php if ($_smarty_tpl->tpl_vars['phone']->value['phone_status'] != 0) {?>
                                        <button type="button" class="btn btn-outline-primary" onclick="phonStatus(this,0)">판매</button>
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-outline-primary" onclick="statusAlter()">판매</button>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['phone']->value['phone_status'] != 1) {?>
                                        <button type="button" class="btn btn-outline-primary" onclick="phonStatus(this,1)">예약</button>
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-outline-primary" onclick="statusAlter()">예약</button>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['phone']->value['phone_status'] != 2) {?>
                                        <button type="button" class="btn btn-outline-primary" onclick="phonStatus(this,2)">판매완료</button>
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-outline-primary" onclick="statusAlter()">판매완료</button>
                                        <?php }?>
                                    </div>
                                    <span class="btn ms-auto">
                                        <button class="btn btn-outline-danger flex-shrink-0" onclick="phoneDelete(this);">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <nav class="mt-5" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

                    </ul>
                </nav>
            </div>
        </div>
    
    </div>
    <!-- ./ content -->

    <?php echo '<script'; ?>
>   
        //휴대폰시리즈선택부분
        let handelChangePhoneType = function(event){
            const selectedValue = event.target.value;
            if(selectedValue != ""){
                if(selectedValue == "Apple"){

                    let html = "<option value=''>휴대폰시리즈선택</option>";
                        html += "<option value='Apple_xs'>아이폰xs</option>";
                        html += "<option value='Apple11'>아이폰11시리즈</option>";
                        html += "<option value='Apple12'>아이폰12시리즈</option>";
                        html += "<option value='Apple13'>아이폰13시리즈</option>";
                        html += "<option value='Apple14'>아이폰14시리즈</option>";

                    document.getElementById("phone_model").innerHTML = html;
                }else if(selectedValue =="Samsung"){

                    let html = "<option value=''>휴대폰시리즈선택</option>"; 
                        html += "<option value='Samsung_A'>삼성A시리즈</option>";
                        html += "<option value='Samsung_Fold'>삼성폴드시리즈</option>";
                        html += "<option value='Samsung_note20'>섬성NOTE20시리즈</option>";
                        html += "<option value='Samsung_S20'>섬성S20시리즈</option>";
                        html += "<option value='Samsung_S21'>섬성S21시리즈</option>";
                        html += "<option value='Samsung_S22'>섬성S22시리즈</option>";
                        html += "<option value='Samsung_S23'>섬성S23시리즈</option>";                          
                    document.getElementById("phone_model").innerHTML = html;
                }else if(selectedValue == "China"){
                             
                    let html = "<option value=''>휴대폰시리즈선택</option>"; 
                        html += "<option value='Xiaomi_note10'>샤오미노트10</option>";
                        html += "<option value='Xiaomi_note11'>샤오미노트11</option>";
                        html += "<option value='Xiaomi_other'>샤오미기타</option>";
                    document.getElementById("phone_model").innerHTML = html;
                    
                }
            }
        }

        //휴대폰모델선택부분
        let handelChangePhoneModel = function(event){
            let selectedValue = event.target.value;
            if(selectedValue != ""){
                let is = selectedValue.substring(0,1);
                if(is =="A"){
                    if(selectedValue == "Apple_xs"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='xs'>아이폰xs</option>";
                            html += "<option value='xsMax'>아이폰xs_Max</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Apple11"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='11'>아이폰11</option>";
                            html += "<option value='11Pro'>아이폰11Pro</option>";
                            html += "<option value='11ProMax'>아이폰11Pro_Max</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Apple12"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='12Mini'>아이폰12미니</option>";
                            html += "<option value='12'>아이폰12</option>";
                            html += "<option value='12Pro'>아이폰12Pro</option>";
                            html += "<option value='12ProMax'>아이폰12Pro_Max</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Apple13"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='13Mini'>아이폰13미니</option>";
                            html += "<option value='13'>아이폰13</option>";
                            html += "<option value='13Pro'>아이폰13Pro</option>";
                            html += "<option value='13ProMax'>아이폰13Pro_Max</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }
                    else if(selectedValue == "Apple14"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='14'>아이폰14</option>";
                            html += "<option value='14Plus'>아이폰14플러스</option>";
                            html += "<option value='14Pro'>아이폰14Pro</option>";
                            html += "<option value='14ProMax'>아이폰14Pro_Max</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }
                } else if(is == "S"){
                    if(selectedValue == "Samsung_A"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='A226'>삼성A226</option>";
                            html += "<option value='A236'>삼성A236</option>";
                            html += "<option value='A315'>삼성A315</option>";
                            html += "<option value='A325'>삼성A325</option>";
                            html += "<option value='A326'>삼성A326</option>";
                            html += "<option value='A33'>삼성A33</option>";
                            html += "<option value='A426'>삼성A426</option>";
                            html += "<option value='A51'>삼성A51</option>";
                            html += "<option value='A526'>삼성A526</option>";
                            html += "<option value='A528'>삼성A528</option>";
                            html += "<option value='A536'>삼성A536</option>";
                            html += "<option value='A826'>삼성A826(퀀텀2)</option>";
                            html += "<option value='A908'>삼성A908</option>";
                            html += "<option value='M236'>삼성M236(버디2)</option>";
                            html += "<option value='M336'>삼성M336(점프2)</option>";
                            html += "<option value='M536'>삼성M536(퀀텀3)</option>";
                            html += "<option value='E426'>삼성M536(와이드5)</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                        
                    }else if(selectedValue == "Samsung_Fold"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='Fold1'>삼성폴드1</option>";
                            html += "<option value='Zfold1'>삼성Z플립1</option>";
                            html += "<option value='Fold2'>삼성폴드2</option>";
                            html += "<option value='Zfold2'>삼성Z플립2</option>";
                            html += "<option value='Fold3'>삼성폴드3</option>";
                            html += "<option value='Zfold3'>삼성Z플립3</option>";
                            html += "<option value='Fold4'>삼성폴드4</option>";
                            html += "<option value='Zfold4'>삼성Z플립4</option>";                          
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Samsung_note20"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='Note20'>삼성노트20</option>";
                            html += "<option value='Note20Ultra'>삼성노트20울트라</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Samsung_S20"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='S20FE'>삼성S20FE</option>";
                            html += "<option value='S20'>삼성S20</option>";
                            html += "<option value='S20Plus'>삼성S20Plus</option>";
                            html += "<option value='S20Ultra'>삼성S20Ultra</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Samsung_S21"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='S21'>삼성S20</option>";
                            html += "<option value='S21Plus'>삼성S20Plus</option>";
                            html += "<option value='S21Ultra'>삼성S20Ultra</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Samsung_S22"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='S22'>삼성S22</option>";
                            html += "<option value='S22Plus'>삼성S22Plus</option>";
                            html += "<option value='S22Ultra'>삼성S22Ultra</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Samsung_S23"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='S23'>삼성S23</option>";
                            html += "<option value='S23Plus'>삼성S23Plus</option>";
                            html += "<option value='S23Ultra'>삼성S23Ultra</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }
                } else if(is == "X"){
                    if(selectedValue == "Xiaomi_note10"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='Xiaomi_note10'>샤오미노트10</option>";
                            html += "<option value='Xiaomi_note10Pro'>샤오미노트10프로</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Xiaomi_note11"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='Xiaomi_note11'>샤오미노트11</option>";
                            html += "<option value='Xiaomi_note11Pro'>샤오미노트11프로</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Xiaomi_note12"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='Xiaomi_note12'>샤오미노트12</option>";
                            html += "<option value='Xiaomi_note12Pro'>샤오미노트12프로</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "Xiaomi_other"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='11'>샤오미기타모델</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }else if(selectedValue == "chinaOther"){
                        let html = "<option value=''>휴대폰_모델선택</option>";
                            html += "<option value='11'>중국기타모델</option>";
                        document.getElementById("phone_modelName").innerHTML = html;
                    }
                }        
            }
        }

        //change 휴대폰타입부분 -> 휴대폰시리즈 자동입력부분
        let selectElementPhone_type = document.getElementById('phone_type');
        selectElementPhone_type.addEventListener("change",handelChangePhoneType);
        //change 휴대폰시리즈부분 -> 휴대폰모델명 자동입력부분
        let selectElement = document.getElementById('phone_model');
        selectElement.addEventListener("change",handelChangePhoneModel);

        //업데이트부분
        let phoneUpdate = function(button){
                        let clickButton = button.parentNode.parentNode.parentNode;
                        let phone_num = test.firstElementChild.querySelector('.phone_num').value;
                        console.log(test1);
                        }
        //삭제함수
        let phoneDelete = function(button){
            if (confirm("상품을 삭제하시겠습니까?")) {
                let phone_num = button.parentNode.parentNode.querySelector('.phone_num').value;
                    window.location.href = "/index.php/admin/Phone/phoneDelete.html?phone_num="+phone_num;
                } else {
                    alert("미삭제");
                }
            }
        //상태status 변경함수
        let phonStatus = function(button,status){               
            if (confirm("상품을 상태를 수정하겠습니까?")) {
                    let phone_num = button.parentNode.parentNode.querySelector('.phone_num').value;
                    alert(phone_num);
                    window.location.href = "/index.php/admin/Phone/phoneStatus.html?phone_num="+phone_num+"&status="+status;
                } else {
                    alert("수정실패");
                }
            }
        //상태같을때 부분
        let statusAlter = function(){
            alert("현재 판매상태와 동일함으로 수정할수 없습니다");
        }
        //검색부분
        let search = function(){
                let phone_type = document.getElementById('phone_type').value;
                let phone_model = document.getElementById('phone_model').value;
                let phone_modelName = document.getElementById('phone_modelName').value;
                let phone_status = document.getElementById('phone_status').value;
                let phone_shop = document.getElementById('phone_shop').value;
                window.location.href = "/index.php/admin/Phone/samsumg.html?phone_type="+phone_type+"&phone_status="+phone_status+"&phone_shop="+phone_shop+"&phone_model="+phone_model+"&phone_modelName="+phone_modelName;
            }
        
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
