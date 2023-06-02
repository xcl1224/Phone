<?php
/* Smarty version 3.1.30, created on 2023-05-26 12:36:00
  from "F:\PHP\Phone\Home\View\Iphone\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6470a7b06bf599_66296897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03d491347c2e627ce7f4a58768ed28622e23900e' => 
    array (
      0 => 'F:\\PHP\\Phone\\Home\\View\\Iphone\\index.html',
      1 => 1683091361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6470a7b06bf599_66296897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17592782796470a7b06bf155_09975367', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_17592782796470a7b06bf155_09975367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Product Page</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- Shop Page Start  -->
        <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                        <div class="shop-sidebar-wrap">
                            <div class="sidebar-widget">
                                <h4 class="sidebar-title">苹果手机</h4>
                                <div class="sidebar-widget-size">
                                    <ul>
                                        <?php if (isset($_smarty_tpl->tpl_vars['phone_total']->value)) {?>
                                        <li><a href="/index.php/Home/Samsung.html" class="selected m-0"> 全部<span>(<?php echo $_smarty_tpl->tpl_vars['phone_total']->value;?>
)</span></a></li>
                                        <?php } else { ?>
                                        <li><a class="selected m-0"> 全部<span>(0)</span></a></li>
                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple_xs'])) {?>
                                        <li><a href="/index.php/Home/Iphone.html?phone_model=Apple_xs" class="selected m-0"> 苹果xs系列手机<sapn>(<?php echo $_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple_xs'];?>
)</sapn></a></li>
                                        <?php } else { ?>
                                        <li><a class="selected m-0"> 苹果xs系列手机<sapn>(0)</sapn></a></li>
                                        <?php }?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple11'])) {?>
                                        <li><a href="/index.php/Home/Iphone.html?phone_model=Apple11" class="selected m-0"> 苹果11系列手机<sapn>(<?php echo $_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple11'];?>
)</sapn></a></li>
                                        <?php } else { ?>
                                        <li><a class="selected m-0"> 苹果11系列手机<span>(0)</span></a></li>
                                        <?php }?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple12'])) {?>
                                        <li><a href="/index.php/Home/Iphone.html?phone_model=Apple12" class="selected m-0"> 苹果12系列手机<sapn>(<?php echo $_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple12'];?>
)</sapn></a></li>
                                        <?php } else { ?>
                                        <li><a class="selected m-0"> 苹果12系列手机<sapn>(0)</sapn></a></li>
                                        <?php }?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple13'])) {?>
                                        <li><a href="/index.php/Home/Iphone.html?phone_model=Apple13" class="selected m-0"> 苹果13系列手机<span>(<?php echo $_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple13'];?>
)</sapn></a></li>
                                        <?php } else { ?>
                                        <li><a class="selected m-0"> 苹果13系列手机<span>(0)</span></a></li>
                                        <?php }?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple14'])) {?>
                                        <li><a href="/index.php/Home/Iphone.html?phone_model=Apple14" class="selected m-0"> 苹果14系列手机<span>(<?php echo $_smarty_tpl->tpl_vars['phoneModelCount']->value['Apple14'];?>
)</span></a></li>
                                        <?php } else { ?>
                                        <li><a  class="selected m-0"> 苹果14系列手机<span>(0)</span></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                        
                        <!-- Shop Bottom Area Start -->
                        <div class="shop-bottom-area">
                            <!-- Tab Content Area Start -->
                            <div class="row">
                                <div class="col">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="shop-grid">
                                            <div class="row mb-n-30px">
                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['phoneData']->value, 'phone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
?>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                            <span class="sale">阅读</span>
                                                            <span class="new"><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_hit'];?>
</span>
                                                            </span>
                                                        <div class="thumb">
                                                            <a href="/index.php/Home/Iphone/single.html?phone_num=<?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_num'];?>
" class="image">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_img'];?>
" alt="Product" />
                                                                <img class="hover-image" src="<?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_img'];?>
" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="/index.php/Home/Samsung/single.html?phone_num=<?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_title'];?>

                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new"><?php echo $_smarty_tpl->tpl_vars['phone']->value['phone_price'];?>
元</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
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
                                </div>
                            </div>
                            <!-- Tab Content Area End -->
                            <!--  Pagination Area Start -->
                            <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                                <div class="pages">
                                    <ul>
                                        <?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>

                                    </ul>
                                </div>
                            </div>
                            <!--  Pagination Area End -->
                        </div>
                        <!-- Shop Bottom Area End -->

                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Page End  -->
<?php
}
}
/* {/block "content"} */
}
