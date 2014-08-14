<?php /* Smarty version Smarty-3.1.18, created on 2014-08-04 15:30:40
         compiled from "/var/www/templates/emp_main.html" */ ?>
<?php /*%%SmartyHeaderCode:93441005753d9ff2c79d2c2-46616586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab957f042f2687d13b4e78d33fef9d5c372d41bb' => 
    array (
      0 => '/var/www/templates/emp_main.html',
      1 => 1407136442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93441005753d9ff2c79d2c2-46616586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9ff2cb18c49_00138454',
  'variables' => 
  array (
    'dep_options' => 0,
    'job_options' => 0,
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9ff2cb18c49_00138454')) {function content_53d9ff2cb18c49_00138454($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/includes/smarty/libs/plugins/function.html_options.php';
?><form action="" method="post" enctype="multipart/form-data"> 
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th>姓名</th>
      <th>工號(數字)</th>
      <th>到職日</th>
      <th>部門</th>
      <th>職稱</th>
    </tr>
    <tr>
      <td><input type="text" name="cname" value=""></td>
      <td><input type="text" name="emp_id" value=""></td>
      <td><input type="text" name="hiredate" value=""></td>
      <td><select name="did">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['dep_options']->value),$_smarty_tpl);?>

        </select>
      </td>
      <td><select name="jid">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['job_options']->value),$_smarty_tpl);?>

        </select>
      </td>
    </tr>
    <tr>
      <td colspan="5"><input type="submit" name="submit" value="新增">
        <!--input type="submit" name="submit" value="匯入"-->
      </td>
    </tr>
  </table>
</form>
<div>
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;width:100%;">
    <tr>
      <th>姓名</th>
      <th>工號</th>
      <th>到職日</th>
      <th>部門</th>
      <th>職稱</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <tr>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['cname'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['emp_id'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['hiredate'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['dep_name'];?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['item']->value['job_name'];?>
</td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }} ?>
