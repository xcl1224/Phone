<?php
/* Smarty version 3.1.30, created on 2023-05-08 09:04:28
  from "E:\PHP\Test\Home\View\Iphone\single.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6458bb1ced2463_26761935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '487d37ba1a57eaab4117c15f1601d41f14368bec' => 
    array (
      0 => 'E:\\PHP\\Test\\Home\\View\\Iphone\\single.html',
      1 => 1683529949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6458bb1ced2463_26761935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3163934536458bb1cd63816_32072393', "addCss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9694859736458bb1ced1d64_70769402', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addCss"} */
class Block_3163934536458bb1cd63816_32072393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
    .product-details-content .pro-details-same-style span {
        margin-top: 5px;
        color: #142d4c;
        margin-right: 30px;
    }
</style>
<?php
}
}
/* {/block "addCss"} */
/* {block "content"} */
class Block_9694859736458bb1ced1d64_70769402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgData']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['img']->value)) {?>
                                    <?php break 1;?>
                                <?php }?>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                        <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgData']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                                    <?php if (empty($_smarty_tpl->tpl_vars['img']->value)) {?>
                                        <?php break 1;?>
                                    <?php }?>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
                                    </div>                                  
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content ml-25px">
                            <h3 id="phone_title"><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_title'];?>
</h3>
                            <div class="pro-details-rating-wrap">
                                <span class="read-review"><a class="reviews"><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_content'];?>
</a></span>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0" style="margin-top: 23px!important;">
                                <span style="font-weight: bold;font-size: 22px;color:#f90000">价格</span>
                                <ul class="d-flex">
                                    <li>
                                        <span style="font-size: 22px;" id="price"><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_price'];?>
元</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>代购费用</span>
                                <ul class="d-flex">
                                    <li>
                                        <input type="hidden" id="totalPrice" value="<?php echo $_smarty_tpl->tpl_vars['phoneData']->value['totalPrice'];?>
">
                                        <span id="purchasing"><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['purchasing'];?>
元</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>发布日期</span>
                                <ul class="d-flex">
                                    <li>
                                        <span><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_datetime'];?>
</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>商品号码</span>
                                <ul class="d-flex">
                                    <li>
                                        <span><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['product_number'];?>
</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="pro-details-quality">
                                <div class="pro-details-cart">
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_num'];?>
" id="phone_num">
                                    <button class="add-cart" onclick="buy();">购买</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="pro-details-cart">
                                    <span class="add-cart" style="background-color: #eee; color: black;">观看数：<?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_hit'];?>
</span>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area start -->
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">手机参数</button>
                                <button data-bs-toggle="tab" data-bs-target="#des-details2">手机介绍</button>
                                <button data-bs-toggle="tab" data-bs-target="#des-details3">联系方式</button>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-anotherinfo-wrapper text-start">
                                        <ul>
                                            <li><span>型号</span><strong id="phone_modelName"><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_modelName'];?>
</strong></li>
                                            <li><span>处理器</span><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_cpu'];?>
</li>
                                            <li><span>运行内存</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_memory'];?>
</li>
                                            <li><span>储存内存</span><?php echo $_smarty_tpl->tpl_vars['phoneData']->value['storage_memory'];?>
</li>
                                            <li><span>屏幕尺寸</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['display_size'];?>
</li>
                                            <li><span>拍照像素</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['camera'];?>
</li>
                                            <li><span>电池容量</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['battery'];?>
</li>
                                            <li><span>手机颜色种类</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_coler'];?>
</li>
                                            <li><span>识别功能</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['recognition'];?>
</li>
                                            <li><span>防水性能</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['Waterproof'];?>
</li>
                                            <li><span>出厂日期</span> <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['makeDay'];?>
</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="des-details2" class="tab-pane">
                                    <div class="product-description anotherinfo-wrapper">
                                        <p>
                                            <?php echo $_smarty_tpl->tpl_vars['phoneData']->value['phone_manual'];?>

                                        </p>
                                    </div>
                                </div>
                                <div id="des-details3" class="tab-pane">
                                    <div class="row">
                                        <p>微信 ： xcl1224</p>
                                        <p>电话 ： 010-5678-6555</p>
                                        <p style="color: red;">购买时候增加代购费。代购费按照卖家的距离价格不同。代购价格在2.5万韩币~3.9万韩币不等</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            //구매
            let buy = function(){
                let phoneNum = document.getElementById('phone_num').value;
                let phoneModel = document.getElementById('phone_modelName').innerHTML;
                let totalPrice = document.getElementById('totalPrice').value;
                let prices = document.getElementById('price').innerHTML;
                let purchasing = document.getElementById('purchasing').innerHTML;
                let phone_title = document.getElementById('phone_title').innerHTML;
                window.location.href="/index.php/Home/BuyThings/index/phone_num/"+phoneNum+"/prices/"+prices+"/purchasing/"+purchasing+"/phone_title/"+phone_title+"/totalPrice/"+totalPrice+"/phoneModel/"+phoneModel+".html";
            } 
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
