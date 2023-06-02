<?php
/* Smarty version 3.1.30, created on 2023-05-31 13:03:28
  from "F:\PHP\Phone\admin\View\Phone\addSpec.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_647745a0191310_49324468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7996f42b7a0378a632374e3cb6b296ef55f4bc' => 
    array (
      0 => 'F:\\PHP\\Phone\\admin\\View\\Phone\\addSpec.html',
      1 => 1683113306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_647745a0191310_49324468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <!-- content -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1231128661647745a0190ab1_61894789', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_1231128661647745a0190ab1_61894789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content ">  
    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">
            <h4>휴대폰스펙 추가</h4>
            <div class="card">
                <div class="card-body">
                    <form class="was-validated" method="post" action="/index.php/admin/Phone/insertSpec.html" enctype="multipart/form-data">                      
                        <div class="mb-3">
                            <select name="phone_type" id="phone_type" class="form-select" required aria-label="select example">
                                <option value="">휴대폰_종류</option>
                                <option value="Apple">아이폰</option>
                                <option value="Samsung">삼성폰</option>
                                <option value="China">중국폰</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_종류를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="phone_model" id="phone_model" class="form-select" required aria-label="select example">
                                <option value="">휴대폰_시리즈</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_시리즈 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select id="phone_modelName" class="form-select" required aria-label="select example" name="phone_modelName">
                                <option value="">휴대폰_모델</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_모델 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="cpu" class="form-select" required aria-label="select example">
                                <option value="">CPU_종류</option>
                                <option value="A12处理器">아이폰xs_A12</option>
                                <option value="A13处理器">아이폰11_A13</option>
                                <option value="A14处理器">아이폰12_A14</option>
                                <option value="A15处理器">아이폰13_A15</option>
                                <option value="A16处理器">아이폰14_A16</option>
                                <option value="骁龙855+处理器_高端(7纳米)">삼성폴드1_퀄컴855</option>
                                <option value="骁龙865+处理器_高端(7纳米)">삼성NOTE20/폴드2/Z플립_퀄컴865+</option>
                                <option value="骁龙865处理器_高端(7纳米)">삼성S20_퀄컴865</option>
                                <option value="Exynos2100处理器_高端(5纳米)">삼성S21_Exynos2100</option>
                                <option value="Exynos2200处理器_高端(4纳米)">삼성S22_Exynos2200</option>
                                <option value="骁龙888处理器_高端(5纳米)">삼성폴드3/Z플립3_퀄컴888</option>
                                <option value="骁龙8Gen1处理器_高端(5纳米)">삼성폴드4/Z플립4_퀄컴8Gen1</option>
                                <option value="骁龙8Gen2处理器_高端(4纳米_特别制定版本_最强版本)">삼성S23_퀄컴8Gen2</option>
                                <option value="骁龙6系列处理器_中端">갤럭시A_퀄컴6시리즈</option>
                                <option value="骁龙7系列处理器_中端+处理器_中端">갤럭시A_퀄컴7시리즈</option>
                                <option value="天机系列处理器_中端+处理器_中端">갤럭시A_미디어택</option>        
                            </select>
                            <div class="invalid-feedback">CPU 종류를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="memory" class="form-select" required aria-label="select example">
                                <option value="">메모리 용량</option>
                                <option value="2GB">2GB</option>
                                <option value="3GB">3GB</option>
                                <option value="4GB">4GB</option>
                                <option value="6GB">6GB</option>
                                <option value="8GB">8GB</option>
                                <option value="12GB">12GB</option>
                                <option value="16GB">16GB</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_메모리 용량을 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="storage_memory" class="form-select" required aria-label="select example">
                                <option value="">저장 용량</option>
                                <option value="64GB">64GB</option>
                                <option value="128GB">128GB</option>
                                <option value="256GB">256GB</option>
                                <option value="512GB">512GB</option>
                                <option value="256GB/512GB">256GB/512GB</option>
                                <option value="64GB/128GB/256GB">64GB/128GB/256GB</option>
                                <option value="64GB/256GB/512GB">64GB/256GB/512GB</option>
                                <option value="128GB/256GB/512GB">128GB/256GB/512GB</option>
                                <option value="256GB/512GB/1T">256GB/512GB/1T</option>
                                <option value="128GB/256GB/512GB/1T">128GB/256GB/512GB/1T</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_저장 용량을 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="display_size" class="form-select" required aria-label="select example">
                                <option value="">디스플레이 크기</option>
                                <option value="屏幕5.4英寸">5.4인치(mini)</option>
                                <option value="屏幕5.8英寸">5.8인치(xs)</option>
                                <option value="屏幕6.1英寸">6.1인치(아이폰pro)</option>
                                <option value="屏幕6.4英寸">6.4인치</option>
                                <option value="屏幕6.5英寸">6.5인치(xsMax/11ProMax)</option>
                                <option value="屏幕6.6英寸">6.6인치(S모델+)</option>
                                <option value="屏幕6.7英寸">6.7인치(Z플립/12,13,14ProMax)</option>
                                <option value="屏幕6.8英寸">6.8인치(울트라)</option>
                                <option value="主幕7.6英寸/外屏6.2英寸">7.6인치(폴드)</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_디즈플레이 크기를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="camera" class="form-select" required aria-label="select example">
                                <option value="">카메라화소</option>
                                <option value="1200万像素">1200만(아이폰/Z플립/폴드)</option>
                                <option value="4800万像素">4800만(아이폰14)</option>
                                <option value="5000万像素">5000만(폴드4/s22,+/S23,+)</option>
                                <option value="6400万像素">6400만(s,s+시리즈)</option>
                                <option value="1亿800万像素">1억800만(울트라)</option>
                                <option value="2亿像素">1억(S23울트라)</option>
                                <option value="3200万像素">3200만화소(A시리즈)</option>
                                <option value="4800万像素">4800만화소(A시리즈)</option>
                                <option value="5400万像素">5400만화소(A시리즈)</option>
                                <option value="6400万像素">6400만화소(A시리즈)</option>
                            </select>
                            <div class="invalid-feedback">카메라화소를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="battery" class="form-select" required aria-label="select example">
                                <option value="">배터리용량</option>
                                <option value="电池容量_2658毫安">배터리-xs_2658毫安</option>
                                <option value="电池容量_3174毫安">배터리-xsMax_3174毫安</option>
                                <option value="电池容量_3110毫安">배터리-11_3110毫安</option>
                                <option value="电池容量_3046毫安">배터리-11pro_3046毫安</option>
                                <option value="电池容量_3969毫安">배터리-11proMax_3969毫安</option>
                                <option value="电池容量_2227毫安">배터리-12Mini_2227毫安</option>
                                <option value="电池容量_2815毫安">배터리-12&pro_2815毫安</option>
                                <option value="电池容量_3687毫安">배터리-12proMax_3687毫安</option>
                                <option value="电池容量_2406毫安">배터리-13Mini_2406毫安</option>
                                <option value="电池容量_3227毫安">배터리-13_3227毫安</option>
                                <option value="电池容量_3095毫安">배터리-13pro_3095毫安</option>
                                <option value="电池容量_4352毫安">배터리-13proMax_4352毫安</option>
                                <option value="电池容量_3279毫安">배터리-14_3279毫安</option>
                                <option value="电池容量_3200毫安">배터리-14pro_3200毫安</option>
                                <option value="电池容量_4325毫安">배터리-14Plus&ProMax_4325毫安</option>
                                <option value="电池容量_4000毫安">배터리-S20_4000毫安</option>
                                <option value="电池容量_4500毫安">배터리-S20플러스_4500毫安</option>
                                <option value="电池容量_4500毫安">배터리-S21_4000毫安</option>
                                <option value="电池容量_4800毫安">배터리-S21플러스_4800毫安</option>
                                <option value="电池容量_3700毫安">배터리-S22_3700毫安</option>
                                <option value="电池容量_4500毫安">배터리-S22플러스_4500毫安</option>
                                <option value="电池容量_3900毫安">배터리-S23_3900毫安</option>
                                <option value="电池容量_4700毫安">배터리-S23플러스_4700毫安</option>
                                <option value="电池容量_5000毫安">배터리-S21,22,23울트라_5000毫安</option>
                                <option value="电池容量_4500毫安">배터리-A시리즈_4500毫安</option>
                                <option value="电池容量_4700毫安">배터리-A시리즈_4700毫安</option>
                                <option value="电池容量_4700毫安">배터리-A시리즈_4800毫安</option>
                                <option value="电池容量_5000毫安">배터리-A시리즈_5000毫安</option>
                            </select>
                            <div class="invalid-feedback">배터리용량을 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone_coler" class="form-control"  placeholder="색상종류를 작성해주세요"  required>
                            <div class="invalid-feedback">색상종류를 작성해주세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="recognition"  class="form-select" required aria-label="select example">
                                <option value="">휴대폰 인식가능여부</option>
                                <option value="指纹识别">지문인식</option>
                                <option value="人脸识别">얼굴인식</option>
                                <option value="指纹识别,人脸识别">지문인식/얼굴인식</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_인식부위 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select name="Waterproof" name="Waterproof" class="form-select" required aria-label="select example">
                                <option value="">방수기능</option>
                                <option value="无">없음</option>
                                <option value="生活一般防水">일상생활방수</option>
                                <option value="IP65级 低压掉水防水-短时间">IP65</option>
                                <option value="IP66级 低压掉水防水-10分钟">IP66</option>
                                <option value="IP67级 1M以内防水(30分钟)">IP67</option>
                                <option value="IP68级 1M左右防水_长时间">IP68</option>
                                <option value="IP69级">IP69</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_방수 등급을 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="makeDay" class="form-control"  placeholder="휴대폰 제조날짜를 입력하세요"  required>
                            <div class="invalid-feedback">휴대폰 제조날짜를 입력하세요</div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="phone_manual" placeholder="휴대폰에관련된 자세한 내용을 작성하세요" required></textarea>
                            <div class="invalid-feedback">휴대폰에관련된 자세한 내용을 작성하세요</div>
                        </div>                  
                        <div class="mb-3">
                         <button class="btn btn-primary" type="submit">상품등록</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
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
    <?php echo '</script'; ?>
>
<!-- ./ content -->
<?php
}
}
/* {/block "content"} */
}
