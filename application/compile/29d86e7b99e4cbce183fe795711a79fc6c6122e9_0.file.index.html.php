<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 00:36:07
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d97778b1fe7_02545682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d86e7b99e4cbce183fe795711a79fc6c6122e9' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\index.html',
      1 => 1598920287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d97778b1fe7_02545682 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台首页</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        .header{
            width: 100%;
            height: 100px;
            background-color: #FBD7BF;
            position: relative;
        }
        .title{
            display: block;
            height: 20px;
            width: 600px;
            font-size: 30px;
            position: absolute;
            top: 40px;
            left: 50px;
            color: #9B410E;
            font-family: "方正大标宋简体";
        }
        .uname{
            display: block;
            height: 20px;
            width: 80px;
            font-size: 10px;
            color: #9B410E;
            position: absolute;
            top: 40px;
            right: 100px;
            line-height: 20px;

        }
        .out{
            display: block;
            height: 20px;
            width: 50px;
            font-size: 10px;
            color: #9B410E;
            position: absolute;
            top: 40px;
            right: 50px;
            line-height: 20px;
        }
        .bottom div{
            width: 100%;
            height: 50px;
            background-color: #FDECE4;
            font-size: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            line-height: 50px;
            color: #9B410E;
        }
        .main{
            width: 100%;
            height: 500px;
        }
        .left{
            width: 20%;
            height: 100%;
            border-right: 3px solid #FBD7BF;
            float: left;
            box-sizing: border-box;
        }
        .right{
            width: 80%;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }
        iframe{
            width: 100%;
            height: 100%;
        }
        .father{
            width: 100%;
            height: 40px;
            background-color: #FDECE4;
            text-align: center;
            line-height: 40px;
            font-family: "华文仿宋";
            font-size: 16px;
            color: #9B410E;
            font-weight: bold;
            cursor: pointer;
            overflow: hidden;
        }

        .son li a{
            color: #9B410E;
        }
        .more{
            display: inline-block;

            font-size: 16px;
            margin-left: 50px;
            font-weight: bold;
        }
        @keyframes show{
            0%{
                height: 40px;
            }
            100%{
                height: 120px;
            }
        }
        @keyframes show2{
            0%{
                height: 120px;
            }
            100%{
                height: 40px;
            }
        }
    </style>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="header">
    <span class="title">欢迎使用JEWELLERY后台管理系统</span>
    <span class="uname">您好：<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
    <a href="/JEWELLERY/index.php/admin/index/logout" class="out">退出登陆></a>
</div>
<div class="main">
    <div class="left">
        <ul>
            <li class="father father1">
                <span>用户管理</span>
                <span class="more more1">></span>
                <ul class="son son1">
                    <li><a href="admin.html" target="main">添加用户</a></li>
                    <li><a href="http://baidu.com" target="main">修改用户</a></li>
                </ul>
            </li>
            <li class="father">
                <span>栏目管理</span>
                <span class="more">></span>
                <ul class="son">
                    <li><a href="/JEWELLERY/index.php/admin/category/int" target="main">查看栏目</a></li>
                    <li><a href="/JEWELLERY/index.php/admin/category/int" target="main">修改栏目</a></li>
                </ul>
            </li>
            <li class="father">
                <span>系列管理</span>
                <span class="more">></span>
                <ul class="son">
                    <li><a href="/JEWELLERY/index.php/admin/series/add" target="main">添加系列</a></li>
                    <li><a href="/JEWELLERY/index.php/admin/series/showSeries" target="main">查看系列</a></li>
                </ul>
            </li>
            <li class="father">
                <span>类型管理</span>
                <span class="more">></span>
                <ul class="son">
                    <li><a href="/JEWELLERY/index.php/admin/type/add" target="main">添加类型</a></li>
                    <li><a href="/JEWELLERY/index.php/admin/type/showList" target="main">查看类型</a></li>
                </ul>
            </li>
            <li class="father">
                <span>产品管理</span>
                <span class="more">></span>
                <ul class="son">
                    <li><a href="/JEWELLERY/index.php/admin/product/add" target="main">添加产品</a></li>
                    <li><a href="/JEWELLERY/index.php/admin/product/showProduct" target="main">查看产品</a></li>
                </ul>
            </li>
            <li class="father">
                <span>动态管理</span>
                <span class="more">></span>
                <ul class="son">
                    <li><a href="/JEWELLERY/index.php/admin/dynamic/add" target="main">添加动态</a></li>
                    <li><a href="/JEWELLERY/index.php/admin/dynamic/showDym" target="main">查看动态</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    <div>版权信息：xxxxxx   xxxxxxx有限公司   联系方式：xxxxxx</div>
</div>

</body>
</html><?php }
}
