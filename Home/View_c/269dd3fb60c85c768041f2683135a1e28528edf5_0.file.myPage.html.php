<?php
/* Smarty version 3.1.30, created on 2023-05-31 06:11:27
  from "D:\Coding\PHP\Test\Home\View\User\myPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6476e50fcafcb0_81671923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '269dd3fb60c85c768041f2683135a1e28528edf5' => 
    array (
      0 => 'D:\\Coding\\PHP\\Test\\Home\\View\\User\\myPage.html',
      1 => 1685513270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6476e50fcafcb0_81671923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4319481166476e50fcaf857_19532905', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_4319481166476e50fcaf857_19532905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Account</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Account</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- account area start -->
        <div class="account-dashboard pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#myPage" data-bs-toggle="tab" class="nav-link active">我的信息</a></li>
                                <li><a href="#buyThings" data-bs-toggle="tab" class="nav-link">购买信息</a></li>
                                <li><a href="#like" data-bs-toggle="tab" class="nav-link">我的收藏</a></li>
                                <li><a href="#changeInformation" data-bs-toggle="tab" class="nav-link">修改信息</a></li>
                                <li><a href="/index.php/Home/User/logOut.html" class="nav-link">退出登陆</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                            <div class="tab-pane active" id="myPage">
                                <p>在韩最全手机商城</p>
                                <h5 class="billing-address">个人信息</h5>
                                <p class="mb-2"><strong>Michael M Hoskins</strong></p>
                                <address>
                                    <span class="mb-1 d-inline-block"><strong>名字:</strong> Seattle</span>,
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>State:</strong> Washington(WA)</span>,
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>ZIP:</strong> 98101</span>,
                                    <br>
                                    <span><strong>Country:</strong> USA</span>
                                </address>
                            </div>
                            <div class="tab-pane fade show" id="buyThings">
                                <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
                                    <!-- Shop Bottom Area Start -->
                                    <div class="shop-bottom-area">
                                        <!-- Tab Content Area Start -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active mb-n-30px " id="shop-list">
                                                        <!-- 반복구간 시작--->
                                                        <div class="shop-list-wrapper mb-30px">
                                                            <div class="row">
                                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                                    <div class="product">
                                                                        <div class="thumb">
                                                                            <a href="single-product.html" class="image">
                                                                                <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                                <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                            </a>
                                                                            <span class="badges">
                                                                            <span class="new">New</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                                    <div class="content-desc-wrap">
                                                                        <div class="content">
                                                                            <span class="category"><a href="#">Accessories</a></span>
                                                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                                exercitation ullamco laboris </p>
                                                                        </div>
                                                                        <div class="box-inner">
                                                                            <span class="price">
                                                                            <span class="new">$38.50</span>
                                                                            </span>
                                                                            <div class="actions">
                                                                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                                    class="pe-7s-shopbag"></i></button>
                                                                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                                        class="pe-7s-like"></i></button>
                                                                                <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                                <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                                        class="pe-7s-refresh-2"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 반복구간 끝--->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab Content Area End -->
                                        <!--  Pagination Area Start -->
                                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                                            <div class="pages">
                                                <ul>
                                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                                    </li>
                                                    <li class="li"><a class="page-link" href="#">1</a></li>
                                                    <li class="li"><a class="page-link active" href="#">2</a></li>
                                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--  Pagination Area End -->
                                    </div>
                                    <!-- Shop Bottom Area End -->
                                </div>  
                            </div>
                            <div class="tab-pane fade show" id="like">
                                
                            </div>
                            <div class="tab-pane fade" id="changeInformation">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginActive">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                        name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                        name="id_gender"> Mrs.</span>
                                                </div> <br>
                                                <div class="default-form-box mb-20">
                                                    <label>First Name</label>
                                                    <input type="text" name="first-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Email</label>
                                                    <input type="text" name="email-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Password</label>
                                                    <input type="password" name="user-password">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Birthdate</label>
                                                    <input type="date" name="birthday">
                                                </div>
                                                <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                                <br>
                                                <label class="checkbox-default" for="offer">
                                                    <input type="checkbox" id="offer">
                                                    <span>Receive offers from our partners</span>
                                                </label>
                                                <br>
                                                <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                    <input type="checkbox" id="newsletter">
                                                    <span>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                        moment. For that purpose, please find our contact info in the
                                                        legal notice.</em></span>
                                                </label>
                                                <div class="save_button mt-3">
                                                    <button class="btn" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account area start -->
<?php
}
}
/* {/block "content"} */
}
