<?php
/* Smarty version 3.1.30, created on 2023-05-25 09:59:19
  from "D:\Coding\PHP\Test\admin\View\Phone\specList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_646f3177958c13_39809305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c3f4ebc03721d0e2a8064450aae9d10546547a' => 
    array (
      0 => 'D:\\Coding\\PHP\\Test\\admin\\View\\Phone\\specList.html',
      1 => 1683113355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_646f3177958c13_39809305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_948518851646f3177958789_28543174', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_948518851646f3177958789_28543174 extends Smarty_Internal_Block
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
                            <div class="d-none d-md-flex">휴대폰</div>
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
                            <div class="dropdown ms-auto">
                                <button type="button" onclick="search();" class="btn btn-primary btn-lg">상품검색</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specData']->value, 'spec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['spec']->value) {
?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-hover">                           
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">手机名称: <?php echo $_smarty_tpl->tpl_vars['spec']->value['phone_modelName'];?>
</li>
                                <li class="list-group-item">处理器: <?php echo $_smarty_tpl->tpl_vars['spec']->value['phone_cpu'];?>
</li>
                                <li class="list-group-item">运行内存: <?php echo $_smarty_tpl->tpl_vars['spec']->value['phone_memory'];?>
</li>
                                <li class="list-group-item">储存容量: <?php echo $_smarty_tpl->tpl_vars['spec']->value['storage_memory'];?>
</li>
                                <li class="list-group-item">屏幕: <?php echo $_smarty_tpl->tpl_vars['spec']->value['display_size'];?>
</li>
                                <li class="list-group-item">像素: <?php echo $_smarty_tpl->tpl_vars['spec']->value['camera'];?>
</li>
                                <li class="list-group-item">电池: <?php echo $_smarty_tpl->tpl_vars['spec']->value['battery'];?>
</li>
                                <li class="list-group-item">识别部位: <?php echo $_smarty_tpl->tpl_vars['spec']->value['recognition'];?>
</li>
                                <li class="list-group-item">防水: <?php echo $_smarty_tpl->tpl_vars['spec']->value['Waterproof'];?>
</li>
                                <li class="list-group-item">颜色: <?php echo $_smarty_tpl->tpl_vars['spec']->value['phone_coler'];?>
</li>
                                <li class="list-group-item">出厂日期: <?php echo $_smarty_tpl->tpl_vars['spec']->value['makeDay'];?>
</li>
                                <li class="list-group-item">
                                    <div class="card-body">
                                        <h5 class="card-title">详细介绍</h5>
                                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['spec']->value['phone_manual'];?>
</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body">
                                <div class="d-flex">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['spec']->value['spec_number'];?>
" class="spec_number">
                                    <span class="btn ms-auto">
                                        <button class="btn btn-outline-danger flex-shrink-0" onclick="deleteSpec(this);">
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
        //스펙삭제부분
        let deleteSpec = function(e){
            if(confirm("삭제를 진행하겠습니까?")){
                let spec_number = e.parentNode.parentNode.querySelector('.spec_number').value;
                window.location.href="/index.php/admin/Phone/deleteSpec.html?spec_number="+spec_number;
            }else{
                alert("삭제를 취소하겠습니다");
            }
        }
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

        //검색부분
        let search = function(){
            let phone_typeValue = document.getElementById('phone_type').value;
            let phone_modelValue = document.getElementById('phone_model').value;
            let phone_modelNameValue = document.getElementById('phone_modelName').value;
            window.location.href = "/index.php/admin/Phone/specList.html?phone_type="+phone_typeValue+"&phone_model="+phone_modelValue+"&phone_modelName="+phone_modelNameValue;
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
