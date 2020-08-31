<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 03:22:08
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\seeDym.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4c6ce0865110_47086076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a4ea53cd25644c2319312ee2eea50466ebfc50' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\seeDym.html',
      1 => 1598844106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c6ce0865110_47086076 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加动态</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="">
        <div class="form-group">
            <label for="tid">动态类型</label>
            <select class="form-control" id="tid" name="tid" readonly>
                <option>珠宝养护</option>
                <option>媒体宣传</option>
                <option>行业风向</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dtitle">动态标题</label>
            <input type="text" class="form-control" id="dtitle" name="dtitle" placeholder="动态标题" readonly value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dtitle'];?>
">
        </div>
        <div class="form-group">
            <label for="dmsg">动态内容</label>
            <textarea class="form-control" id="dmsg" name="dmsg" rows="3" readonly><?php echo $_smarty_tpl->tpl_vars['data']->value['dmsg'];?>
</textarea>
        </div>
        <div class="form-group">
            <label for="dimgurl">动态图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['dimgurl'];?>
" alt="" style="display:block;width: 200px;height: 200px" id="dimgurl">
        </div>

    </form>
</div>

</body>
</html><?php }
}
