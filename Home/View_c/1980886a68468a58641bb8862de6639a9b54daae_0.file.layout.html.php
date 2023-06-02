<?php
/* Smarty version 3.1.30, created on 2023-05-31 12:56:10
  from "F:\PHP\Phone\Home\View\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_647743ea252bb7_17827573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1980886a68468a58641bb8862de6639a9b54daae' => 
    array (
      0 => 'F:\\PHP\\Phone\\Home\\View\\layout.html',
      1 => 1685530624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647743ea252bb7_17827573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart – Electronics eCommerce HTML Template</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <!-- <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/font.awesome.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/venobox.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/jquery-ui.min.css"> -->
    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/style.css"> -->
    <!-- Minify Version -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/plugins.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/style.min.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_642671168647743ea1e7bb9_60171676', "addCss");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1687199103647743ea1ebdb6_17841589', "addScript");
?>

</head>

<body>
    <div class="main-wrapper">
        <header>
            <!-- Header top area start -->
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="welcome-text">
                                <p>在韩最全手机店</p>
                            </div>
                        </div>
                        <div class="col d-none d-lg-block">
                            <div class="top-nav">
                                <ul>
                                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> 客服电话 ：010-5678-6555</a></li>
                                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> 客服微信 : xcl1224</a></li>
                                    <?php if (isset($_SESSION['userId'])) {?>
                                    <li><a href="/index.php/Home/User.html"><i class="fa fa-user"></i> 我的信息 </a></li>
                                    <?php } else { ?>
                                    <li><a href="/index.php/Home/User/loginPage.html"><i class="fa fa-user"></i> 登录 </a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end -->
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="index.html"><img src="<?php echo IMG_PATH;?>
/logo/logo.png" alt="Site Logo" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="index.html"><img src="<?php echo IMG_PATH;?>
/logo/logo.png" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li class="dropdown"><a href="/">Home</a>
                                </li>
                                <li><a href="/index.php/Home/About.html">关于我们</a></li>
                                <li><a href="/index.php/Home/Samsung.html">三星手机</a></li>
                                <li><a href="/index.php/Home/Iphone.html">苹果手机</a></li>
                                <li><a href="/index.php/Home/ChinaPhone.html">中国手机</a></li>
                                <li class="dropdown position-static"><a href="#">手机服务<i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">手机配件</a></li>
                                                <li><a href="404.html">蓝牙耳机</a></li>
                                                <li><a href="order-tracking.html">手机壳</a></li>
                                                <li><a href="faq.html">充电器</a></li>
                                                <li><a href="coming-soon.html">数据线</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">手机卡套餐</a></li>
                                                <li><a href="cart.html">알뜰폰合约套餐</a></li>
                                                <li><a href="checkout.html">手机套餐卡</a></li>
                                                <li><a href="compare.html">优惠手机卡套餐</a></li>

                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">合约手机</a></li>
                                                <li><a href="my-account.html">SK通信社</a></li>
                                                <li><a href="login.html">LG通信社</a></li>
                                                <li><a href="empty-cart.html">KT通信社</a></li>
                                            </ul>
                                            <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="<?php echo IMG_PATH;?>
/banner/menu-banner.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">联系我们</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
        </header>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Wishlist Start -->
        <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
            <div class="inner">
                <div class="head">
                    <span class="title">Wishlist</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img src="<?php echo IMG_PATH;?>
/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="<?php echo IMG_PATH;?>
/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="<?php echo IMG_PATH;?>
/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Wishlist End -->
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img src="<?php echo IMG_PATH;?>
/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="<?php echo IMG_PATH;?>
/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="<?php echo IMG_PATH;?>
/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons mt-30px">
                        <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="user-panel">
                <ul>
                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                    <li><a href="/index.php/Home/User/login.html"><i class="fa fa-user"></i>登录</a></li>
                </ul>
            </div>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="/"><span class="menu-text">Home</span></a>
                        </li>
                        <li><a href="/index.php/About.html">关于我们</a></li>
                        <li><a href="/index.php/Samsung.html">三星手机</a></li>
                        <li><a href="/index.php/Iphone.html">苹果手机</a></li>
                        <li><a href="/index.php/ChinaPhone.html">中国手机</a></li>
                        <li>
                            <a href="#"><span class="#">手机服务</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">手机配件</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">蓝牙耳机</a></li>
                                        <li><a href="order-tracking.html">手机壳</a></li>
                                        <li><a href="faq.html">充电器</a></li>
                                        <li><a href="coming-soon.html">数据线</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">手机卡套餐</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">알뜰폰合约套餐</a></li>
                                        <li><a href="checkout.html">手机套餐卡</a></li>
                                        <li><a href="compare.html">优惠手机卡套餐</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">合约手机</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="my-account.html">KT通信社</a></li>
                                        <li><a href="login.html">LG通信社</a></li>
                                        <li><a href="empty-cart.html">KT通信社</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">联系我们</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-auto">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas Menu End -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1678414683647743ea247da2_02353039', "content");
?>

        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="<?php echo IMG_PATH;?>
/logo/footer-logo.png" alt=""></a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">My Account</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: Your Address Goes Here.</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                        <p class="mail"><a href="https://demo@example.com"> demo@example.com</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633955321647743ea24a977_53776754', "modal");
?>

    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <!-- <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/vendor/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/vendor/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/vendor/jquery-migrate-3.3.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/vendor/modernizr-3.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins/jquery.countdown.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins/swiper-bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins/scrollUp.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins/venobox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins/mailchimp-ajax.js"><?php echo '</script'; ?>
> -->

    <!-- Minify Version -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/vendor.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/plugins.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/main.min.js"><?php echo '</script'; ?>
>

    <!--Main JS (Common Activation Codes)-->
    <!-- <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/main.js"><?php echo '</script'; ?>
> -->
</body>

</html><?php }
/* {block "addCss"} */
class Block_642671168647743ea1e7bb9_60171676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "addCss"} */
/* {block "addScript"} */
class Block_1687199103647743ea1ebdb6_17841589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "addScript"} */
/* {block "content"} */
class Block_1678414683647743ea247da2_02353039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_1633955321647743ea24a977_53776754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "modal"} */
}
