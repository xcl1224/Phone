<?php
/* Smarty version 3.1.30, created on 2023-05-25 07:14:10
  from "D:\Coding\PHP\Test\admin\View\Phone\addPhone.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_646f0ac239fa22_74113113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495ca4eefde67b3d155186e8eba33e568a6c6dbf' => 
    array (
      0 => 'D:\\Coding\\PHP\\Test\\admin\\View\\Phone\\addPhone.html',
      1 => 1683113306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_646f0ac239fa22_74113113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1697858569646f0ac239e715_49975987', "addScript");
?>

<!-- content -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_759257186646f0ac239f434_10716232', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addScript"} */
class Block_1697858569646f0ac239e715_49975987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>

  src="https://code.jquery.com/jquery-3.6.4.slim.js"
  integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4="
  crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "addScript"} */
/* {block "content"} */
class Block_759257186646f0ac239f434_10716232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content ">  
    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">
            <h4>휴대폰상품 추가</h4>
            <div class="card">
                <div class="card-body">
                    <form class="was-validated" method="post" action="/index.php/admin/Phone/insertPhoneData.html" enctype="multipart/form-data">                      
                        <div class="mb-3">
                            <select class="form-select" required aria-label="select example" name="phone_shop">
                                <option value="">구매앱</option>
                                <option value="1">당근마켓</option>
                                <option value="2">번개장터</option>
                                <option value="3">중고나라</option>
                            </select>
                            <div class="invalid-feedback">판매앱_종류를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select id="phone_type" class="form-select" required aria-label="select example" name="phone_type">
                                <option value="">휴대폰_종류선택</option>
                                <option value="Apple">아이폰</option>
                                <option value="Samsung">삼성폰</option>
                                <option value="China">중국폰</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_종류를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select id="phone_model" class="form-select" required aria-label="select example" name="phone_model">
                                <option value="">휴대폰_시리즈선택</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_시리즈 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <select id="phone_modelName" class="form-select" required aria-label="select example" name="phone_modelName">
                                <option value="">휴대폰_모델선택</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_모델 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone_name" class="form-control" placeholder="판매앱_판매자이름"  required>
                            <div class="invalid-feedback">판매앱_판매자이름</div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone_title" class="form-control" placeholder="판매제목작성"  required>
                            <div class="invalid-feedback">판매제목을 작성해주세요</div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone_price" id="phone_price" class="form-control"  placeholder="휴대폰가격"  required>
                            <div class="invalid-feedback">휴대폰가격</div>
                        </div>
                        <div class="mb-3">
                            <select id="phone_type" class="form-select" required aria-label="select example" name="purchasing">
                                <option value="">구매대행가격</option>
                                <option value="26,000">2만6000</option>
                                <option value="30,000">3만</option>
                                <option value="35,000">3만5000</option>
                                <option value="39,000">3만9000</option>
                            </select>
                            <div class="invalid-feedback">휴대폰_종류를 선택하세요</div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="phone_content" name="phone_content" placeholder="휴대폰상세내용작성" required></textarea>
                            <div class="invalid-feedback">휴대폰 상세내용을 작성해주세요</div>
                        </div> 
                        <div class="mb-3">
                            <input type="file" name="img[]" class="form-control" aria-label="file example"  id="formFileMultiple" multiple required>
                            <div class="invalid-feedback">휴대폰사진파일을 업로드해주세요</div>
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
        //textarea 엔터 입력시 <br>
		const textarea = document.getElementById('phone_content');
		textarea.addEventListener("keydown", function(e) {
			if (e.keyCode === 13) { // Enter key pressed
				e.preventDefault(); // Prevents the default behavior of adding a new line
				var cursorPosition = this.selectionStart;
				this.value = this.value.substring(0, cursorPosition) + "<br>" + this.value.substring(cursorPosition);
				this.selectionEnd = cursorPosition + 4; // Sets the cursor position after the added <br> tag
			}
		});
        //가격입금부분
        $(document).ready(function() {
            $('#phone_price').on('input', function() {
                // 입력된 값에서 숫자 이외의 문자열을 모두 제거
                let inputValue = $(this).val().replace(/\D/g,'');
                // 천 단위로 구분된 문자열로 변경
                inputValue = inputValue.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                // 변경된 값을 다시 입력 필드에 설정
                $(this).val(inputValue);
            });
        });

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
                        html += "<option value='Xiaomi_note12'>샤오미노트12</option>";
                        html += "<option value='Xiaomi_other'>샤오미기타</option>";
                        html += "<option value='chinaOther'>기타중국폰</option>";
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
