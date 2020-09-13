<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 13:06:01
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\index\contact.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f563039a7bb30_43291938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3732f4920e4091c4d51f325a11284c1af58f12f6' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\index\\contact.html',
      1 => 1599483958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f563039a7bb30_43291938 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>联系我们</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/contact.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/animate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/contact.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://webapi.amap.com/maps?v=1.4.13&key=09e3c0a00b6c5b81ed5802e3c7ae377b"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://a.amap.com/jsapi_demos/static/demo-center/js/demoutils.js"><?php echo '</script'; ?>
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
    <!-- map区开始 -->
    <div id="map">

    </div>
    <!-- map区结束 -->
    <!-- container开始 -->
    <div class="container">
        <div class="con-item">
            <div class="item-icon">
                <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZWQ4OTJmZDgyZDg1YTYzNGUyMTc4NTQ3ZjYyYjNiZTctNTV4NTUtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
            </div>
            <div class="item-content">
                <span class="item-title">
                    深圳市门店
                </span>
                <div class="item-text">
                    <span>A. 朝阳区南京路SOHO大厦东区6号楼</span>  
                    <span>E. Creative_design@email.com</span>
                    <span>
                        P. +86 4006-285-729</span>
                </div>
            </div>
            
        </div>
        <div class="con-item">
            <div class="item-icon">
                <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZWQ4OTJmZDgyZDg1YTYzNGUyMTc4NTQ3ZjYyYjNiZTctNTV4NTUtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
            </div>
            <div class="item-content">
                <span class="item-title">
                    重庆市门店
                </span>
                <div class="item-text">
                    <span>A. 朝阳区南京路SOHO大厦东区6号楼</span>  
                    <span>E. Creative_design@email.com</span>
                    <span>
                        P. +86 4006-285-729</span>
                </div>
            </div>
            
        </div>
        <div class="con-item">
            <div class="item-icon">
                <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZWQ4OTJmZDgyZDg1YTYzNGUyMTc4NTQ3ZjYyYjNiZTctNTV4NTUtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
            </div>
            <div class="item-content">
                <span class="item-title">
                    上海市门店
                </span>
                <div class="item-text">
                    <span>A. 朝阳区南京路SOHO大厦东区6号楼</span>  
                    <span>E. Creative_design@email.com</span>
                    <span>
                        P. +86 4006-285-729</span>
                </div>
            </div>
            
        </div>
    </div>

    <!-- container结束 -->
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
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZDUxMmYxODMyMDMwMTQ1MThmZGJlMGZhNjljYjIzNDYtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvYzkwMWY2OGJlNTVlOGZlNjAxYjEyMWE1YWRjZDA4ZjUtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvODlhMTVhOTk1N2JhYWVhNGJjMzE0ZGE1NjczZWQwNTUtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNjhmZTgwNmJhNDIxNTYxNGQ3M2Q3ZTNkNTNlMjg2NWQtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNmZiZWRkMDI3NzgxZTI5NWY2NmI2Nzk0ZjRiYjhmNzctMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvMDEyZmMyMzgzZTFkYTY2ZWM3NjEyNmE1MTkzY2Q3ZjgtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvOTNmMjViNWM4MWZiZDdhNzVhYzU2MDEzN2Q0MWU5Y2MtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
        <div class="bottom-item">
            <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvNGQzMDBkZmU0OGQ1YzczOWQ2YTAxNDRkODFhOWRlYTMtMzAweDMyNS05MC53ZWJw.webp" alt="">
        </div>
    </div>
    <!-- bottom结束 -->
    <!-- fotter开始 -->
    <div class="footer">
        <div class="footer-container">
            <span class="span1">版权所有 2013-2018 模板网站  沪ICP备0000000000-号</span>
            <div class="span2">
                <img src="https://ccdn.goodq.top/caches/bd1cf84aefb8c117a6cc8b69507f83e3/aHR0cHM6Ly81ZDY4ZDIzOWU1YmNjLnQ3NC5xaWZlaXllLmNvbS9xZnktY29udGVudC91cGxvYWRzLzIwMTkvMDgvZTUyMmYwOGUwZWYzYzE4ZDJmZjZhMTEwNDgwNThmODUtOTAud2VicA_p_p100_p_3D_p_p100_p_3D.webp" alt="">
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
