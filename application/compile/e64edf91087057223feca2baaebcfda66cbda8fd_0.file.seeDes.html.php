<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 10:29:05
  from 'D:\Full_Stack\php\server\JEWELLERY\application\template\admin\seeDes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f560b712dace1_66787095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64edf91087057223feca2baaebcfda66cbda8fd' => 
    array (
      0 => 'D:\\Full_Stack\\php\\server\\JEWELLERY\\application\\template\\admin\\seeDes.html',
      1 => 1599474515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f560b712dace1_66787095 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看设计师</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="">

        <div class="form-group">
            <label for="dname">设计师姓名</label>
            <input type="text" class="form-control" id="dname" name="dname" readonly value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dname'];?>
">
        </div>
        <div class="form-group">
            <label for="dposition">设计师职位</label>
            <input type="text" class="form-control" id="dposition" name="dposition" readonly value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dposition'];?>
">
        </div>

        <div class="form-group">
            <label for="dimgurl">设计师图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['dimgurl'];?>
" alt="" style="display:block;width: 200px;height: 200px" id="dimgurl">
        </div>

    </form>
</div>

</body>
</html><?php }
}
