<?php /* Smarty version Smarty-3.1.18, created on 2014-08-05 13:58:35
         compiled from "/var/www/templates/course_main.html" */ ?>
<?php /*%%SmartyHeaderCode:206199055853d9f1909ad322-64186975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553e4cf1e755ea8ddd87c3e3961d65c2725f29f0' => 
    array (
      0 => '/var/www/templates/course_main.html',
      1 => 1407218305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206199055853d9f1909ad322-64186975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9f1911a2663_14755592',
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9f1911a2663_14755592')) {function content_53d9f1911a2663_14755592($_smarty_tpl) {?><form action="" method="post" enctype="multipart/form-data"> 
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th colspan="4">名稱</th>
    </tr>
    <tr>
      <td colspan="4"><input type="text" name="name" value="" style="width:98%;"></td>
    </tr>
    <tr>
      <th>年度</th>
      <th colspan="3">起迄</th>
    </tr>
    <tr>
      <td><input type="text" name="annual" value=""></td>
      <td colspan="3"><input type="text" name="sdate" value="">~
        <input type="text" name="edate" value="">
      </td>
    </tr>
    <tr>
      <th>時數</th>
      <th>人數</th>
      <th>費用</th>
      <th>講師</th>
    </tr>
    <tr>
      <td><input type="text" name="hours" value=""></td>
      <td><input type="text" name="hcount" value=""></td>
      <td><input type="text" name="fee" value=""></td>
      <td><input type="text" name="teacher" value=""></td>
    </tr>
    <tr>
      <th colspan="4">上課地址</th>
    </tr>
    <tr>
      <td colspan="4"><input type="text" name="addr" value="" style="width:98%;"></td>
    </tr>
    <tr>
      <th colspan="4">上課人員</th>
    </tr>
    <tr>
      <td colspan="4">
        <?php echo $_smarty_tpl->getSubTemplate ("course_main_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="submit" value="新增"></td>
    </tr>
  </table>
</form>
<div>
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;width:100%;">
    <tr>
      <th>名稱</th>
      <th>年度</th>
      <th>起迄</th>
      <th>時數</th>
      <th>人數</th>
      <th>費用</th>
      <th>講師</th>
      <th>上課地址</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['annual'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sdate'];?>
~<?php echo $_smarty_tpl->tpl_vars['item']->value['edate'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['hours'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['hcount'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['fee'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['teacher'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['addr'];?>
</td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }} ?>
