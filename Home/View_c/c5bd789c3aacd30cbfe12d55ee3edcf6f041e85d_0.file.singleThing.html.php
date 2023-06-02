<?php
/* Smarty version 3.1.30, created on 2023-05-31 14:58:29
  from "F:\PHP\Phone\admin\View\Buyer\singleThing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6477609538b627_42821805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5bd789c3aacd30cbfe12d55ee3edcf6f041e85d' => 
    array (
      0 => 'F:\\PHP\\Phone\\admin\\View\\Buyer\\singleThing.html',
      1 => 1685545103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.html' => 1,
  ),
),false)) {
function content_6477609538b627_42821805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56298246364776095382557_22741442', "addcss");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15166877046477609538a972_05932727', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7452774226477609538b417_11844283', "addJsCode");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "addcss"} */
class Block_56298246364776095382557_22741442 extends Smarty_Internal_Block
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
class Block_15166877046477609538a972_05932727 extends Smarty_Internal_Block
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
                                    <h2>Ultimate Ears Wonderboom</h2>
                                    <p>
                                        <span class="badge bg-success">In stock</span>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda
                                        autem eaque error explicabo fugiat iusto necessitatibus, temporibus. Laudantium,
                                        voluptate?</p>
                                    <div class="d-flex gap-3 mb-3 align-items-center">
                                        <h4 class="text-muted mb-0">
                                            <del>$699,99</del>
                                        </h4>
                                        <h4 class="mb-0">$499,90</h4>
                                    </div>
                                    <div class="d-flex gap-2 mb-3">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-muted"></i>
                                        <span>(3)</span>
                                    </div>
                                    <p>Features:</p>
                                    <p>It is a long established fact that a reader will be distracted.
                                        Contrary to popular belief, Lorem Ipsum is not text.
                                        There are many variations of passages of Lorem.</p>
                                    <form class="mt-4">
                                        <div class="row row-cols-lg-auto">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" value="1">
                                                    <button class="btn btn-primary" type="button">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="#" class="btn btn-icon flex-shrink-0">
                                    <i class="bi bi-heart-fill text-danger"></i> 50
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
                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Descriptions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sss-tab" data-bs-toggle="tab" href="#sss" role="tab" aria-controls="sss" aria-selected="false">SSS</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="font-weight-bold">Where was he raised?</p>
                            <p>Vivamus ultricies augue vitae commodo condimentum. Nullamfaucibus eros eu mauris
                                feugiat, eget consectetur tortor tempus. Sed volutpatmollis dui eget fringilla.
                                Vestibulum blandit urna ut tellus lobortis tristique.Vestibulum ante ipsum
                                primis in
                                faucibus orci luctus et ultrices posuere cubiliaCurae; Pellentesque quis cursus
                                mauris. Nam in ornare erat. Vestibulum convallisenim ac massa dapibus
                                consectetur.
                                Maecenas facilisis eros ac felis mattis, egetauctor sapien varius.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores
                                dolorum
                                earum fugiat nostrum obcaecati, quis ratione rerum sapiente soluta!</p>
                            <p class="font-weight-bold">Chemicals in</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur,
                                reiciendis!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi, aperiam
                                corporis, dolorum fugiat fugit maxime nisi optio quo similique sit sunt tempora.
                                Commodi culpa debitis deleniti dolore maiores, maxime praesentium. Autem dicta
                                dolore ipsum molestiae quae, quasi soluta tempora.</p>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-5">
                                        <div class="display-6">4.0</div>
                                        <div class="d-flex gap-2 my-3">
                                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                                            <span>(3)</span>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush mb-4">
                                        <div class="list-group-item d-flex px-0">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-text bg-purple rounded-circle">R</span>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Rodger Stutely</h5>
                                                <div class="d-flex gap-2 mb-3">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-muted"></i>
                                                </div>
                                                <div>I love your products. It is very easy and fun to use this panel. I would
                                                    recommend it
                                                    to
                                                    everyone.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-text bg-orange rounded-circle">C</span>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Corly Hailston</h5>
                                                <div class="d-flex gap-2 mb-3">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                </div>
                                                <div>I love your products. It is very easy and fun to use this panel. I would
                                                    recommend it
                                                    to
                                                    everyone.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="static/picture/man_avatar2.jpg" class="rounded-circle" alt="image">
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Hurleigh Smallcomb</h5>
                                                <div class="d-flex gap-2 mb-3">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                </div>
                                                <div>I love your products. It is very easy and fun to use this panel. I would
                                                    recommend it
                                                    to
                                                    everyone.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Comment:</label>
                                            <textarea rows="3" class="form-control" placeholder="Your opinion on the product"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Rate:</label>
                                            <div class="d-flex align-items-center">
                                                <div class="rating-example"></div>
                                                <div class="live-rating ms-3"></div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3" type="button" id="button-addon2">Send Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sss" role="tabpanel" aria-labelledby="sss-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How are the delivery processes carried out?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">It has survived not only five centuries, but
                                            also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of
                                            Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is there a payment option at the door?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">It has survived not only five centuries, but
                                            also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of
                                            Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How many can I order at the same time?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">It has survived not only five centuries, but
                                            also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of
                                            Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.
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
class Block_7452774226477609538b417_11844283 extends Smarty_Internal_Block
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
