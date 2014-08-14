<?php /* Smarty version Smarty-3.1.18, created on 2014-08-04 17:01:22
         compiled from "/var/www/templates/course_emp.html" */ ?>
<?php /*%%SmartyHeaderCode:117035036953df3e2e9b1bf7-40470132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60a1a6a67d1e328249a3ab67ef9a3a08b210a1e' => 
    array (
      0 => '/var/www/templates/course_emp.html',
      1 => 1407142881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117035036953df3e2e9b1bf7-40470132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53df3e2f0098a5_54088639',
  'variables' => 
  array (
    'emp_options' => 0,
    'course_options' => 0,
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53df3e2f0098a5_54088639')) {function content_53df3e2f0098a5_54088639($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/includes/smarty/libs/plugins/function.html_options.php';
?><form action="" method="post" enctype="multipart/form-data"> 
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
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['name'] = 'cloop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['loop'] = is_array($_loop=10) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cloop']['total']);
?>
    <tr>
      <td>
        <select name="eid[]" style="width:150px;">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['emp_options']->value),$_smarty_tpl);?>

        </select>
      </td>
      <td>
        <select name="cid[]" style="width:200px;">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['course_options']->value),$_smarty_tpl);?>

        </select>
      </td>
      <td><input type="text" name="tdate[]"   value="" style="width:100px;"></td>
      <td><input type="text" name="tdep[]"    value="" style="width:100px;"></td>
      <td><input type="text" name="score[]"   value="" style="width:60px;"></td>
      <td><input type="text" name="hours[]"  value="" style="width:60px;"></td>
      <td><input type="text" name="cert[]"    value="" style="width:80px;"></td>
      <td><input type="text" name="creator[]" value="" style="width:80px;"></td>
    </tr>
    <?php endfor; endif; ?>
    <tr>
      <td colspan="8" style="text-align:center;">
        <input type="submit" name="submit" value="新增">
      </td>
    </tr>
  </table>
</form>
<hr>
<div>
  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th style="width:150px;">員工姓名</th>
      <th style="width:200px;">課程名稱</th>
      <th style="width:100px;">上課日期</th>
      <th style="width:100px;">訓練單位</th>
      <th style="width:60px;">分數</th>
      <th style="width:60px;">時數</th>
      <th style="width:80px;">證照管理</th>
      <th style="width:80px;">輸入人員</th>
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
