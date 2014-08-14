<?php /* Smarty version Smarty-3.1.18, created on 2014-08-05 13:58:36
         compiled from "/var/www/templates/course_main_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:128642467053e0728c10c080-47770042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66bee375f00eb0d6ea1a88da399aa4aaf3387aeb' => 
    array (
      0 => '/var/www/templates/course_main_detail.html',
      1 => 1407218231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128642467053e0728c10c080-47770042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emp_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e0728c24dac9_51683858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e0728c24dac9_51683858')) {function content_53e0728c24dac9_51683858($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/includes/smarty/libs/plugins/function.html_options.php';
?>  <table class="ui-widget ui-widget-content" style="border-collapse: collapse;">
    <tr>
      <th>員工姓名</th>
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
      <td><input type="text" name="tdate[]"   value="" style="width:100px;"></td>
      <td><input type="text" name="tdep[]"    value="" style="width:100px;"></td>
      <td><input type="text" name="score[]"   value="" style="width:60px;"></td>
      <td><input type="text" name="hours[]"  value="" style="width:60px;"></td>
      <td><input type="text" name="cert[]"    value="" style="width:80px;"></td>
      <td><input type="text" name="creator[]" value="" style="width:80px;"></td>
    </tr>
    <?php endfor; endif; ?>
  </table>
<?php }} ?>
