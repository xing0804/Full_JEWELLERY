<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-10 12:51:21
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5a2149b3bc69_39472192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726d68ab44907c1cd3327cd3e91a6d08ffb55c12' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\index\\index.html',
      1 => 1599741480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5a2149b3bc69_39472192 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEWELLERY练习页面</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
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
index/index.js"><?php echo '</script'; ?>
>
</head>

<body>
    <!-- logo开始 -->
    <div class="logo">
        <a href="#">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvOTI5MTM3MTRiOGVkYTc2NTJmYmYyOTEwMzU0Njk2MjQtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
        </a>
    </div>
    <!-- logo结束 -->
    <!-- nav区开始 -->
    <div class="nav">
        <div class="navbox">
            <ul>
                <li>
                    <a href="index.html">首页</a>
                    <i class="underline" style="display: block;"></i>
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
    <!-- banner区开始 -->
    <div class="banner">
        <div class="banner-container">
            <a href="/JEWELLERY/index.php/index/index/ShowList?name=<?php echo $_smarty_tpl->tpl_vars['bigData']->value['name'];?>
">
                <div class="img1 img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['bigData']->value['himgurl'];?>
" alt="">
                    <span class="banner-title"><?php echo $_smarty_tpl->tpl_vars['bigData']->value['name'];?>
</span>
                    <span class="banner-translate"><?php echo $_smarty_tpl->tpl_vars['bigData']->value['ename'];?>
</span>
                </div>
            </a>

            <div class="small-img">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smallData']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <a href="/JEWELLERY/index.php/index/index/ShowList?name=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
                    <div class="img2 img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['himgurl'];?>
"
                             alt="">
                        <span class="banner-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                        <span class="banner-translate"><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</span>
                    </div>
                </a>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </div>
    <!-- banner区结束 -->
    <!-- main开始 -->
    <div class="main">
        <div class="mian-box1">
            <div class="main-title">
                <div class="title-box">
                    <span class="title-icon">2020</span>
                    <span class="title-content">春季新品</span>
                </div>
                <div class="title-container">
                    <span class="title-container-one">奇妙地调配婚纱礼衣与珠宝饰品，能让新娘在婚礼上愈加出彩。那么一起来看看婚纱礼衣与珠宝饰品的调配技巧吧。</span>
                    <span
                        class="title-container-one">婚纱礼衣与珍珠饰品的调配技巧，首先要断定配饰与礼衣的主副之分，若是新娘配戴款式简略的珍珠饰品，则可以挑选款式花俏的婚纱礼衣；若是新娘挑选的饰品款式较为奢华，婚纱礼衣的款式则以素雅为宜。</span>
                </div>
            </div>
        </div>

        <div class="main-container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <div class="container-item img">
                <a href="/JEWELLERY/index.php/index/index/showPro?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">
                    <div class="item-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pimgurl'];?>
"
                            alt="">
                    </div>
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['pname'];?>
</span>
                </a>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
    <!-- main结束 -->
    <!-- contact开始 -->
    <div class="contact">
        <div class="contact-title">
            VIP高级定制
        </div>
        <div class="contact-text">
            <span>我们的设计师将与您携手打造定制属于您自己的举世无双</span>
            <span>彰显个性,承载记忆,代代相传！</span>
        </div>
        <div class="contact-input">
            <div class="input-left">
                <input type="email">
                <span class="span1">邮箱地址</span>
                <span class="span2">*</span>
            </div>
            <div class="input-right">
                <input type="button" value="提交发送">
            </div>
        </div>
    </div>
    <!-- contact结束 -->
    <!-- bottom开始 -->
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
