<?php
/* Smarty version 3.1.30, created on 2023-05-25 08:28:57
  from "D:\Coding\PHP\Test\admin\View\Buyer\printBuyer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_646f1c49b3ac50_56875133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8339b2cf88e3915603c2b1e60603b39ed332fa' => 
    array (
      0 => 'D:\\Coding\\PHP\\Test\\admin\\View\\Buyer\\printBuyer.html',
      1 => 1684130306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_646f1c49b3ac50_56875133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_457571069646f1c49b334e3_38336584', "addcss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_619838074646f1c49b3a8d1_81900205', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addcss"} */
class Block_457571069646f1c49b334e3_38336584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .table thead th {
        color: #f50d0d;
        font-size: 14px;
    }
</style>
<?php
}
}
/* {/block "addcss"} */
/* {block "content"} */
class Block_619838074646f1c49b3a8d1_81900205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- content -->
<div class="content ">
        
    <div class="d-flex gap-3 mb-4 d-print-none">
        <button onclick="javascript:window.print()" class="btn btn-outline-secondary d-none d-md-block btn-icon">
            <i class="bi bi-printer"></i> Print
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="invoice">
                <div class="d-md-flex justify-content-between align-items-center mb-4">
                    <div>상품번호 No : <span style="color: #f50d0d;"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['productNumber'];?>
</span></div>
                    <div>구매일자 : <span style="color: #f50d0d;"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyDate'];?>
</span></div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <strong>구매주소</strong>
                        </p>
                        <p><?php echo $_smarty_tpl->tpl_vars['buyer']->value['adress'];?>
</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-start text-md-end" style="text-align: left!important;">
                            <strong>우편번호</strong>
                        </p>
                        <p><?php echo $_smarty_tpl->tpl_vars['buyer']->value['postNum'];?>
</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-4 mt-4" style="font-size: 15px;">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>구매휴대폰 제목</th>
                            <th class="text-end"></th>
                            <th class="text-end"></th>
                            <th class="text-end"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-end">
                            <td class="text-start"></td>
                            <td class="text-start"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['phone_title'];?>
</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>구매자이름</th>
                                <th class="text-end">유저아이디</th>
                                <th class="text-end">구매모델</th>
                                <th class="text-end">구매방법</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-end">
                                <td class="text-start"></td>
                                <td class="text-start"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyUser'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['userId'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['phoneModel'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['buyType'];?>
</td>
                            </tr>
                        </tbody>
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>휴대폰번호</th>
                                <th class="text-end">WeChat</th>
                                <th class="text-end">결제상태</th>
                                <th class="text-end">결제시간</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-end">
                                <td class="text-start"></td>
                                <td class="text-start"><?php echo $_smarty_tpl->tpl_vars['buyer']->value['phoneNumber'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['weixin'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['isDeposit'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['buyer']->value['depositDate'];?>
</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <p>휴대폰 가격: <?php echo $_smarty_tpl->tpl_vars['buyer']->value['prices'];?>
</p>
                    <p>구매대행가 : <?php echo $_smarty_tpl->tpl_vars['buyer']->value['purchasing'];?>
</p>
                    <h4 class="fw-bold">총가격: <?php echo $_smarty_tpl->tpl_vars['buyer']->value['totalPrice'];?>
</h4>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- ./ content -->

<?php
}
}
/* {/block "content"} */
}
