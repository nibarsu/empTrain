<?php /* Smarty version Smarty-3.1.18, created on 2014-07-31 16:40:53
         compiled from "/var/www/templates/job_main.html" */ ?>
<?php /*%%SmartyHeaderCode:32741466953da0115ea19c6-36751834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60561c2e78056982be85ad14c255d566098d7317' => 
    array (
      0 => '/var/www/templates/job_main.html',
      1 => 1406787971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32741466953da0115ea19c6-36751834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53da01168da9a9_04066819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53da01168da9a9_04066819')) {function content_53da01168da9a9_04066819($_smarty_tpl) {?><form action="" method="post" enctype="multipart/form-data"> 
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th>職稱代碼</th>
      <th>職稱名稱</th>
    </tr>
    <tr>
      <td><input type="text" name="job_code" value=""></td>
      <td><input type="text" name="job_name" value=""></td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="submit" value="新增"></td>
    </tr>
  </table>
</form>
<div>
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;width:100%;">
    <tr>
      <th>編號 </th>
      <th>職稱代碼 </th>
      <th>職稱名稱 </th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <tr>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['job_code'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['job_name'];?>
</td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }} ?>
