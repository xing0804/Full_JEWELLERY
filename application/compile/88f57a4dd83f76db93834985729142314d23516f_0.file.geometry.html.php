<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 12:25:56
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\index\geometry.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c9054dc5e14_48677358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88f57a4dd83f76db93834985729142314d23516f' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\index\\geometry.html',
      1 => 1600869630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c9054dc5e14_48677358 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>几何系列</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/geometry.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/animate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/geometry.js"><?php echo '</script'; ?>
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
    <!-- container -->
    <div class="container">
        <div class="con-top" tid="<?php echo $_smarty_tpl->tpl_vars['listData']->value['lname'];?>
">
            <div class="title">
                <?php echo $_smarty_tpl->tpl_vars['listData']->value['lname'];?>

            </div>
            <div class="text">
                <?php echo $_smarty_tpl->tpl_vars['listData']->value['lmsg'];?>

            </div>
            <div class="search-input">
                <div class="input-left">
                    <input type="text" placeholder="产品名称" name="searchName" class="searchCon">
                </div>
                <div class="input-right" >
                    <button class="searchBtn">
                        <img src="<?php echo IMG_ADD;?>
search.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="con-main">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="con-item img">
            <div class="item-img">
                <a href="/JEWELLERY/index.php/index/index/showPro?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pimgurl'];?>
"
                        alt="">
                </a>
            </div>
            <div class="item-content"><?php echo $_smarty_tpl->tpl_vars['v']->value['pname'];?>
</div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <!-- container -->
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
