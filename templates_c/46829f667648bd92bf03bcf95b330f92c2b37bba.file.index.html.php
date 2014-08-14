<?php /* Smarty version Smarty-3.1.18, created on 2014-08-04 17:55:35
         compiled from "/var/www/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:149799341053d9f18d26f332-25326717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46829f667648bd92bf03bcf95b330f92c2b37bba' => 
    array (
      0 => '/var/www/templates/index.html',
      1 => 1407146134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149799341053d9f18d26f332-25326717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9f18d286e79_16834179',
  'variables' => 
  array (
    'emp_data' => 0,
    'dep_data' => 0,
    'job_data' => 0,
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9f18d286e79_16834179')) {function content_53d9f18d286e79_16834179($_smarty_tpl) {?><form action="" method="post" enctype="multipart/form-data"> 
<table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th>姓名</th> 
      <td><input type="text" name="qemp" value="<?php echo $_smarty_tpl->tpl_vars['emp_data']->value['cname'];?>
"></td>
      <th>到職日期</th>
      <td><div name="hiredate"><?php echo $_smarty_tpl->tpl_vars['emp_data']->value['hiredate'];?>
</div></td>
    </tr>
    <tr>
      <th>任職單位</th> 
      <td><div name="dep_name"><?php echo $_smarty_tpl->tpl_vars['dep_data']->value['dep_name'];?>
</div></td>
      <th>職位</th>
      <td><div name="job_name"><?php echo $_smarty_tpl->tpl_vars['job_data']->value['job_name'];?>
</div></td>
    </tr>
    <tr>
    <td colspan="4"><input type="submit" name="query" value="查詢"></td>
    </tr>
  </table>
</form>

<div>
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th>員工姓名</th>
      <th>課程名稱</th>
      <th>上課日期</th>
      <th>訓練單位</th>
      <th>分數</th>
      <th>時數</th>
      <th>證照管理</th>
      <th>輸入人員</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <tr>
      <td style="width:150px;">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['cdesc'];?>

      </td>
      <td style="width:200px;">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['course'];?>

      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tdate'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tdep'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['hours'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cert'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['creator'];?>
</td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }} ?>
