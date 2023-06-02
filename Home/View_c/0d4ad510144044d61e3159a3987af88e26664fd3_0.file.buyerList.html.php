<?php
/* Smarty version 3.1.30, created on 2023-05-31 13:47:51
  from "F:\PHP\Phone\admin\View\Buyer\buyerList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64775007458946_84751918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4ad510144044d61e3159a3987af88e26664fd3' => 
    array (
      0 => 'F:\\PHP\\Phone\\admin\\View\\Buyer\\buyerList.html',
      1 => 1685540863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_64775007458946_84751918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_927051031647750074502f5_09294181', "addScript");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159447149647750074585d3_09874925', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addScript"} */
class Block_927051031647750074502f5_09294181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- daterangepicker 라이브러리 불러오기 -->
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?php echo ADMIN_CSS_PATH;?>
/daterangepicker.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.4.min.js"><?php echo '</script'; ?>
>
    <!-- Datepicker -->
    <?php echo '<script'; ?>
 src="<?php echo ADMIN_JS_PATH;?>
/daterangepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo ADMIN_JS_PATH;?>
/datepicker.js"><?php echo '</script'; ?>
>
    <style type="text/css">
		.table.table-custom tbody tr:last-child td {
			border-bottom: 1px solid rgba(0,0,0,.125);
		}

	</style>
<?php
}
}
/* {/block "addScript"} */
/* {block "content"} */
class Block_1159447149647750074585d3_09874925 extends Smarty_Internal_Block
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
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
        </div>
   
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="mb-3 mb-md-0">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <select class="form-select" id="buyType">
                                        <option value="">구매방법</option>
                                        <option value="到店取">매장방문</option>
                                        <option value="邮寄手机">우편발송</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" id="isDeposit">
                                        <option value="">결제상태</option>
                                        <option value="0">미결제</option>
                                        <option value="1">결제완료</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="productNumber" placeholder="주문번호">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="phoneNumber"  placeholder="전화번호">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" name="daterange" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown ms-auto">
                        <button type="button" class="btn btn-dark" onclick="search();">검색</button>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="table-responsive" style="margin-top:30px;">
            <div class="row">
                <div class="col-md-12">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buyerData']->value, 'buyer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['buyer']->value) {
?>
                    <div class="card mb-4">
                        <div class="card-body" style="background-color: #fff; border-radius: 1rem;">
                            <div class="d-flex gap-4 align-items-center" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#<?php echo $_smarty_tpl->tpl_vars['buyer']->value['productNumber'];?>
" role="button">
                                <div><strong>상품번호</strong>: <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['productNumber'];?>
</span></div>
                                <div><strong>이름</strong>: <?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyUser'];?>
</div>
                                <div class="ms-auto"><strong>전화번호</strong>: <?php echo $_smarty_tpl->tpl_vars['buyer']->value['phoneNumber'];?>
</div>
                                <div class="ms-auto"><strong>구매일</strong>: <?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyDate'];?>
</div>
                                <div class="bi bi-chevron-down ms-auto"></div>
                            </div>
                            <div class="collapse mt-4" id="<?php echo $_smarty_tpl->tpl_vars['buyer']->value['productNumber'];?>
">
                                <hr class="mb-0">
                                <div class="table-responsive">
                                    <table class="table table-custom mb-0">
                                        <thead>
                                        <tr>
                                            <th>상품번호</th>
                                            <th>유저아이디</th>
                                            <th>구매타이틀</th>
                                            <th>구매모델</th>                                
                                            <th>구매방법</th>
                                            <th>WeChat</th>                                                                                     
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>                                           
                                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['productNumber'];?>
</a>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['userId'];?>
</td>
                                            <td><a href="/index.php/admin/Buyer/phoneDetail/phone_num/<?php echo $_smarty_tpl->tpl_vars['buyer']->value['phone_num'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['phone_title'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['phoneModel'];?>
</td>
                                            <td><span class="badge bg-danger" style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyType'];?>
</span></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['weixin'];?>
</td>
                                        </tr>                    
                                        </tbody>
                                        <thead>
                                        <tr>
                                            <th>주소</th>
                                            <th>휴대폰가격</th>
                                            <th>구매대행가격</th>
                                            <th>총금액</th>
                                            <th>결제상태</th>
                                            <th class="text-end">수정</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['buyer']->value['adress'];?>

                                            </td>
                                            <td><span class="text-success"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['prices'];?>
</span></td>
                                            <td><span class="text-success"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['purchasing'];?>
</span></td>
                                            <td><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['totalPrice'];?>
</span></td>
                                            <td class="td_isDeposit">
                                                <span class="badge bg-success span_isDeposit" style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['isDeposit'];?>
</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex">
                                                    <div class="dropdown ms-auto">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <input type="hidden" class="buyNum" value="<?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyNum'];?>
">
                                                            <span  class="dropdown-item" onclick="deleteBuyer(this);">삭제</span>
                                                            <span  class="dropdown-item" onclick="updateIsDeposit('결제완료',this);">결제완료</span>
                                                            <span  class="dropdown-item" onclick="updateIsDeposit('미결제',this);">미결제</span>
                                                            <span  class="dropdown-item" onclick="printerBuyer(this);">프린터</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>                    
                                        </tbody>
                                    </table>
                                </div>
                                <div>입금승인시간: <a href="#"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['depositDate'];?>
</a></div>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    
        <nav class="mt-4" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

            </ul>
        </nav>
    
        </div>
        <!-- ./ content -->
        <?php echo '<script'; ?>
 type="text/javascript">
            // daterangepicker 인스턴스 생성
            let startDate = "";
            let endDate = "";
            $('input[name="daterange"]').daterangepicker({
              locale: {
                format: 'YYYY년 M월 D일',
                separator: ' - ',
                applyLabel: '적용',
                cancelLabel: '취소',
                fromLabel: '시작일',
                toLabel: '종료일',
                customRangeLabel: '사용자 설정',
                weekLabel: '주',
                daysOfWeek: ['일', '월', '화', '수', '목', '금', '토'],
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                firstDay: 0
              }
            });
            $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
                 startDate = picker.startDate.format('YYYY-MM-DD');
                 endDate = picker.endDate.format('YYYY-MM-DD');
            });
            
            //검색
            let search = function(){
                let buyType = document.getElementById('buyType').value;
                let isDeposit = document.getElementById('isDeposit').value;
                let productNumber = document.getElementById('productNumber').value;
                let phoneNumber = document.getElementById('phoneNumber').value;
                window.location.href = "/index.php/admin/Buyer/buyList.html?buyType="+buyType+"&isDeposit="+isDeposit+"&productNumber="+productNumber+"&phoneNumber="+phoneNumber+"&startDate="+startDate+"&endDate="+endDate;
            }

            //입금상태 수정
            let requestRunning = false;
            let updateIsDeposit = function(IsDeposit,clButton){
                if(confirm("구매상품에 대하여 "+IsDeposit+" 처리할까요?")){
                    if(requestRunning){
                        alert("상태 수정중입니다.잠시후 시도해주세요");
                        return;
                    }
                    requestRunning = true;
                    let buyNum = clButton.parentNode.querySelector('.buyNum').value;
                    $.ajax({
                        url:"/index.php/admin/Buyer/updateIsDeposit.html",
                        method : 'POST',
                        data : {
                            IsDeposit,
                            buyNum
                        },
                        success : function(response){
                            if(response == 1){
                                let trNode = clButton.parentNode.parentNode.parentNode.parentNode.parentNode;
                                trNode.querySelector('.td_isDeposit').querySelector('.span_isDeposit').innerHTML = IsDeposit;
                                alert("입금상태가_("+IsDeposit+')_수정완료하였습니다');
                            }else{
                                alert('똑같은 상태로 수정이 불가능합니다');
                            }
                        },
                        error : function(jqXHR, textStatus, errorThrown){
                            console.log(textStatus, errorThrown);
                            alert('에러발생');
                        },
                        complete : function(){
                            requestRunning = false;
                        }
                    });              
                }
            }

            //구매내역 삭제
            let deleteBuyer = function(clButton){
                if(confirm('구매상품을 삭제하겠습니까?')){
                    let buyNum = clButton.parentNode.querySelector('.buyNum').value;
                    window.location.href="/index.php/admin/Buyer/buyerDelete/buyNum/"+buyNum+".html";
                }
            }
            //프린터 하기
            let printerBuyer = function(clButton){
                let buyNum = clButton.parentNode.querySelector('.buyNum').value;
                window.location.href="/index.php/admin/Buyer/printBuyer/buyNum/"+buyNum+".html";
            }
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
