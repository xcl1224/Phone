<?php
/* Smarty version 3.1.30, created on 2023-06-01 05:07:25
  from "D:\Coding\PHP\Test\admin\View\Buyer\singleThing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6478278d69e627_19024321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017cb563b5a8d0457b0284f5c8e2a363ce123954' => 
    array (
      0 => 'D:\\Coding\\PHP\\Test\\admin\\View\\Buyer\\singleThing.html',
      1 => 1685596039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6478278d69e627_19024321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6471381846478278d68be33_74456665', "addcss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1363012106478278d69d674_68488476', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1109350096478278d69e371_19780707', "addJsCode");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addcss"} */
class Block_6471381846478278d68be33_74456665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo ADMIN_CSS_PATH;?>
/slick-theme.css">

<!-- Rating -->
<link rel="stylesheet" href="<?php echo ADMIN_CSS_PATH;?>
/rating.min.css" type="text/css">
<?php
}
}
/* {/block "addcss"} */
/* {block "content"} */
class Block_1363012106478278d69d674_68488476 extends Smarty_Internal_Block
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
                        <i class="bi bi-globe2 small me-2"></i> 휴대폰
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">상세페이지</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="slick-wrapper">
                                <div class="slider-for mb-3">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgData']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                        <?php if (empty($_smarty_tpl->tpl_vars['img']->value)) {?>
                                            <?php break 1;?>
                                        <?php }?>
                                        <div class="slick-slide-item">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="w-100 rounded" alt="image">
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </div>
                                <div class="slick-nav-wrapper">
                                    <div class="slider-nav">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgData']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                            <?php if (empty($_smarty_tpl->tpl_vars['img']->value)) {?>
                                                <?php break 1;?>
                                            <?php }?>
                                            <div class="slick-slide-item m-2">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="w-100 rounded" alt="image">
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between align-items-start mt-4 mt-md-0">
                                <div>
                                    <div class="small text-muted mb-2">Technology Products</div>
                                    <h2><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_title'];?>
</h2>
                                    <p>
                                        <?php if ($_smarty_tpl->tpl_vars['phoneData']->value['phone_status'] == 0) {?>
                                        <span class="badge bg-success">판매중</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phoneData']->value['phone_status'] == 1) {?>
                                        <span class="badge bg-success">판매완료</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phoneData']->value['phone_status'] == 2) {?>
                                        <span class="badge bg-success">예약중</span>
                                        <?php }?>
                                    </p>
                                    <div class="d-flex gap-3 mb-3 align-items-center">
                                        <h4 class="mb-0">휴대폰 가격 : $<?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_price'];?>
</h4>
                                    </div>
                                    <div class="d-flex gap-3 mb-3 align-items-center">
                                        <h4 class="mb-0">구매대행 가격 : $<?php echo $_smarty_tpl->tpl_vars['phoneData']->value['purchasing'];?>
</h4>
                                    </div>
                                    <div class="d-flex gap-3 mb-3 align-items-center">
                                        <h4 class="mb-0">총 가격 : $<?php echo $_smarty_tpl->tpl_vars['phoneData']->value['totalPrice'];?>
</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-icon flex-shrink-0">
                                    <i class="bi bi-heart-fill text-danger"></i> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_hit'];?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">휴대폰소개</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">거래처</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sss-tab" data-bs-toggle="tab" href="#sss" role="tab" aria-controls="sss" aria-selected="false">모델정보</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_title'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_content'];?>
</p>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            판매앱
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <?php if ($_smarty_tpl->tpl_vars['phoneData']->value['phone_shop'] == 1) {?>
                                        <div class="accordion-body">
                                            당근마켓
                                        </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phoneData']->value['phone_shop'] == 2) {?>
                                        <div class="accordion-body">
                                            번개장터
                                        </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['phoneData']->value['phone_shop'] == 3) {?>
                                        <div class="accordion-body">
                                            중고나라
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            판매자 이름
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_name'];?>
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sss" role="tabpanel" aria-labelledby="sss-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            휴대폰 타입
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_type'];?>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            모델 시리즈
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_model'];?>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            휴대폰명
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_modelName'];?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
/* {block "addJsCode"} */
class Block_1109350096478278d69e371_19780707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Examples -->
    <?php echo '<script'; ?>
 src="<?php echo ADMIN_JS_PATH;?>
/product-detail.js"><?php echo '</script'; ?>
>

    <!-- Rating -->
    <?php echo '<script'; ?>
 src="<?php echo ADMIN_JS_PATH;?>
/jquery.rating.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "addJsCode"} */
}
