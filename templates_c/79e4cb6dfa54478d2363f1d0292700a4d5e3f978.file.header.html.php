<?php /* Smarty version Smarty-3.1.18, created on 2014-07-31 16:09:15
         compiled from "/var/www/templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:16747642253d9f18d2a6e35-70487816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e4cb6dfa54478d2363f1d0292700a4d5e3f978' => 
    array (
      0 => '/var/www/templates/header.html',
      1 => 1406794153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16747642253d9f18d2a6e35-70487816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9f18d412d23_75183712',
  'variables' => 
  array (
    'company_name' => 0,
    'menu_str' => 0,
    'function_name' => 0,
    'main_str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9f18d412d23_75183712')) {function content_53d9f18d412d23_75183712($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">                                                                                
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
</title>
</head>                    
<body>    
  <table>
    <tr valign="top">
      <td style="width:230px;"><?php echo $_smarty_tpl->tpl_vars['menu_str']->value;?>
</td>
      <td style="width:800px;">
    <div style="width:99%;text-align:center;height:30px;font-size:20px;padding-top:3px;" 
        class="ui-widget ui-widget-content">
        <?php echo $_smarty_tpl->tpl_vars['function_name']->value;?>

    </div>
          <?php echo $_smarty_tpl->tpl_vars['main_str']->value;?>

        </td>
    </tr>
<?php }} ?>
