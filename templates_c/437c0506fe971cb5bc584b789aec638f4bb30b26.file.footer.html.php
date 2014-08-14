<?php /* Smarty version Smarty-3.1.18, created on 2014-08-04 17:20:40
         compiled from "/var/www/templates/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:160438064153d9f18d4356e5-92837343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '437c0506fe971cb5bc584b789aec638f4bb30b26' => 
    array (
      0 => '/var/www/templates/footer.html',
      1 => 1407144034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160438064153d9f18d4356e5-92837343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d9f18d479660_64356130',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d9f18d479660_64356130')) {function content_53d9f18d479660_64356130($_smarty_tpl) {?>    <tr>
      <td colspan="2">&nbsp;</td>
    </tr> 
  </table>
</body>
</html>

<!--基本樣式-->
<!--<link type="text/css" href="css/basic.css" rel="stylesheet" />-->
<style>
  {padding:0;margin:0;}
  body{background-color:#8fbc8f}
  input{background-color:#c0c0c0}
</style>
<!--jquery ui-->
<link type="text/css" href="jqueryui/jquery-ui.min.css" rel="stylesheet" />
<script type="text/javascript" src="jqueryui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
<script type="text/JavaScript">
  $(document).ready(function(){ 
      //button
      $("a")
      .button()
      .click(function(even){
        even.prevenDefault();
        });
      //alert("test");
      $(".ui-widget.ui-widget-content th").addClass("ui-widget-header"); 
      $(".ui-widget.ui-widget-content td").addClass("ui-widget-content").css("text-align","center");
        $(".ui-widget.ui-widget-content tr").css("height","27px");
        });
$( "input[name='hiredate']" ).datepicker({dateFormat:"yy-mm-dd"});
$( "input[name='sdate']" ).datepicker({dateFormat:"yy-mm-dd"});
$( "input[name='edate']" ).datepicker({dateFormat:"yy-mm-dd"});
$( "input[name='tdate[]']" ).datepicker({dateFormat:"yy-mm-dd"});
//$("#functdiv").dialog();
</script>

<?php }} ?>
