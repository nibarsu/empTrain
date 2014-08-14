<?php /* Smarty version Smarty-3.1.18, created on 2014-07-31 15:59:29
         compiled from "/var/www/templates/dep_main.html" */ ?>
<?php /*%%SmartyHeaderCode:208839380653d9f761b2e0b9-31868481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b148a3c37739b31f503a017fc9f93e1ffe8b392' => 
    array (
      0 => '/var/www/templates/dep_main.html',
      1 => 1406787597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208839380653d9f761b2e0b9-31868481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dep_data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9f7621cd9c2_55603973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9f7621cd9c2_55603973')) {function content_53d9f7621cd9c2_55603973($_smarty_tpl) {?><form action="" method="post" enctype="multipart/form-data"> 
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th>部門代碼</th>
      <th>部門名稱</th>
    </tr>
    <tr>
      <td><input type="text" name="dep_code" value=""></td>
      <td><input type="text" name="dep_name" value=""></td>
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
      <th>部門代碼 </th>
      <th>部門名稱 </th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dep_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <tr>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['dep_code'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['dep_name'];?>
</td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }} ?>
