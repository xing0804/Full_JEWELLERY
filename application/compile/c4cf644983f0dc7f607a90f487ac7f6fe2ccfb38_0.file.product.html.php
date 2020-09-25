<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 13:19:44
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\index\product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c9cf07ea4f7_97604871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4cf644983f0dc7f607a90f487ac7f6fe2ccfb38' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\index\\product.html',
      1 => 1600953581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c9cf07ea4f7_97604871 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>产品详情页</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/product.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/animate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/product.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- logo开始 -->
    <div class="logo">
        <a href="#">
            <img src="<?php echo IMG_ADD;?>
logo.jpg" alt="">
        </a>
    </div>
    <!-- logo结束 -->
    <!-- nav区开始 -->
    <div class="nav">
        <div class="navbox">
            <ul>
                <li>
                    <a href="/JEWELLERY/index.php/index/index/int">首页</a>
                    <i class="underline"></i>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['jumpurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                    <i class="underline"></i>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
    <!-- nav区结束 -->
    <!-- main -->
    <div class="main">
        <div class="back"><a href="/JEWELLERY/index.php/index/index/ShowJewellery"><—返回</a></div>
        <div class="swiper">
            <div class="swiper-img">
                <div class="imgbox">
                    <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cDovLzVkNjhkMjM5ZTViY2MudDc0LnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxOS8wOC81YjI3ZTEwZDM5YTlkNWEzM2Y5ZWI5Njg0ZThlMmQ5Yi02MDB4Nzc2LTkwLndlYnA_p_p100_p_3D.webp" alt="">
                </div>
                <div class="imgbox">
                    <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cDovLzVkNjhkMjM5ZTViY2MudDc0LnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxOS8wOC9jYTEyZWZiYWQyZDhhNDg3M2Q0YjNlOWY3YTFiZTgzNi02MDB4Nzc2LTkwLndlYnA_p_p100_p_3D.webp" alt="">
                </div>
                <div class="imgbox">
                    <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cDovLzVkNjhkMjM5ZTViY2MudDc0LnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxOS8wOC8zZTA4YjY2NzYwNWE3MDhiYzYwMDhhZTEyZWI2ZDkwZC02MDB4Nzc2LTkwLndlYnA_p_p100_p_3D.webp" alt="">
                </div>
                <div class="imgbox">
                    <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cDovLzVkNjhkMjM5ZTViY2MudDc0LnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxOS8wOC8yZGMxODA4NmRiMWM4ZmYxYTkyYzlmYWI5ZWRlOTE2Yi02MDB4Nzc2LTkwLndlYnA_p_p100_p_3D.webp" alt="">
                </div>
                <div class="imgbox">
                    <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cDovLzVkNjhkMjM5ZTViY2MudDc0LnFpZmVpeWUuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxOS8wOC81YjI3ZTEwZDM5YTlkNWEzM2Y5ZWI5Njg0ZThlMmQ5Yi02MDB4Nzc2LTkwLndlYnA_p_p100_p_3D.webp" alt="">
                </div>
            </div>
            <div class="swiper-btns clearfloat">
                <span class="swiper-btn"></span>
                <span class="swiper-btn"></span>
                <span class="swiper-btn"></span>
                <span class="swiper-btn"></span>
            </div>
        </div>
        <div class="detail">
            <div class="data-title"><?php echo $_smarty_tpl->tpl_vars['proData']->value['pname'];?>
</div>
            <div class="data-price">￥<?php echo $_smarty_tpl->tpl_vars['proData']->value['pprice'];?>
</div>
            <div class="data-text"><?php echo $_smarty_tpl->tpl_vars['proData']->value['pmsg'];?>
</div>
            <div class="data-attr">
                <div class="data-no">
                    <strong>产品编号：</strong>
                    <span><?php echo $_smarty_tpl->tpl_vars['proData']->value['pno'];?>
</span>
                </div>
                <div class="data-meteriall">
                    <strong>材质：</strong>
                    <span><?php echo $_smarty_tpl->tpl_vars['proData']->value['pmeterial'];?>
</span>
                </div>
                <div class="data-color">
                    <strong>颜色：</strong>
                    <span><?php echo $_smarty_tpl->tpl_vars['proData']->value['pcolor'];?>
</span>
                </div>
            </div>
            <div class="data-consult">
                <button class="data-consult-btn">理解咨询</button>
                <button class="data-consult-btn">联系我们</button>
            </div>
            <div class="data-introduce news news1">
                <div class="data-introduce-title news-title" data-num=0>
                    <span class="show-btn">+</span>
                    <span class="small-title">产品介绍</span>
                </div>
                <div class="data-introduce-content news-content" style="height: 0;">
                    <?php echo $_smarty_tpl->tpl_vars['proData']->value['pmsg'];?>

                </div>
            </div>
            <div class="data-pack news">
                <div class="data-pack-title news-title" data-num=0>
                    <span class="show-btn">+</span>
                    <span class="small-title">规格与包装</span>
                </div>
                <div class="data-pack-content news-content" style="height: 0;">
                    <span class="strong">主体</span>
<!--                    <span>适用人群：情侣</span>-->
<!--                    <span>圈口：活口</span>-->
<!--                    <span>镶嵌材质：其他</span>-->
<!--                    <span>材质：925银</span>-->
                    <?php echo $_smarty_tpl->tpl_vars['proData']->value['pmain'];?>

                    <span class="data-pack-content-two strong">包装清单</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['proData']->value['ppack'];?>
</span>
                </div>
                <div class="data-afterSale news">
                    <div class="data-afterSale-title news-title" data-num=0>
                        <span class="show-btn">+</span>
                        <span class="small-title">售后保障</span>
                    </div>
                    <div class="data-afterSale-content news-content" style="height: 0;">
                        <?php echo $_smarty_tpl->tpl_vars['proData']->value['psaleback'];?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main -->
    <!-- other -->
    <div class="other">
        <div class="other-title">其它产品</div>
        <div class="other-container">
            <div class="con-item img">
                <div class="item-img">
                    <a href="#">
                        <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvM2UwOGI2Njc2MDVhNzA4YmM2MDA4YWUxMmViNmQ5MGQtMzAweDQwMC05MC53ZWJw.webp"
                            alt="">
                    </a>
                </div>
                <div class="item-content">一生一世 - 耳钉</div>
            </div>
            <div class="con-item img">
                <div class="item-img">
                    <a href="#">
                        <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNWIyN2UxMGQzOWE5ZDVhMzNmOWViOTY4NGU4ZTJkOWItMzAweDQwMC05MC53ZWJw.webp"
                            alt="">
                    </a>
                </div>
                <div class="item-content">一生一世 – 珍珠吊坠</div>
            </div>
            <div class="con-item img">
                <div class="item-img">
                    <a href="#">
                        <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZjcyOGMxMzJlNDQyOGFiZTc5YWU4YjMyZGM4NGI2NGQtMzAweDQwMC05MC53ZWJw.webp"
                            alt="">
                    </a>
                </div>
                <div class="item-content">一生一世 - 戒指</div>
            </div>
            <div class="con-item img">
                <div class="item-img">
                    <a href="#">
                        <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvM2I3NDkwZmFhZDdiNGM3N2E4MTc1YmFkNWJkMDE3NmQtMzAweDQwMC05MC53ZWJw.webp"
                            alt="">
                    </a>
                </div>
                <div class="item-content">一生一世 - 珍珠耳钉</div>
            </div>
        </div>
    </div>
    <!-- other -->
    <div class="bottom">
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZDUxMmYxODMyMDMwMTQ1MThmZGJlMGZhNjljYjIzNDYtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvYzkwMWY2OGJlNTVlOGZlNjAxYjEyMWE1YWRjZDA4ZjUtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvODlhMTVhOTk1N2JhYWVhNGJjMzE0ZGE1NjczZWQwNTUtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNjhmZTgwNmJhNDIxNTYxNGQ3M2Q3ZTNkNTNlMjg2NWQtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNmZiZWRkMDI3NzgxZTI5NWY2NmI2Nzk0ZjRiYjhmNzctMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvMDEyZmMyMzgzZTFkYTY2ZWM3NjEyNmE1MTkzY2Q3ZjgtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvOTNmMjViNWM4MWZiZDdhNzVhYzU2MDEzN2Q0MWU5Y2MtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNGQzMDBkZmU0OGQ1YzczOWQ2YTAxNDRkODFhOWRlYTMtMzAweDMyNS05MC53ZWJw.webp"
                alt="">
        </div>
    </div>
    <!-- bottom结束 -->
    <!-- fotter开始 -->
    <div class="footer">
        <div class="footer-container">
            <span class="span1">版权所有 2013-2018 模板网站 沪ICP备0000000000-号</span>
            <div class="span2">
                <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZTUyMmYwOGUwZWYzYzE4ZDJmZjZhMTEwNDgwNThmODUtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp"
                    alt="">
            </div>
            <span class="span3">
                法律申明&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;服务条款&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;隐私政策
            </span>
        </div>
    </div>
    <!-- fotter结束 -->
    <!-- 返回顶部按钮 -->
    <div class="top">
        <span>></span>
    </div>
</body>
</html><?php }
}
