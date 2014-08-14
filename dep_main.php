<?php
include("mainfile.php");
$smarty->assign("function_name","部門資料維護");
if ($_POST["submit"]=="新增"){
  $fdata = array();
  $fdata["dep_code"] = $_POST["dep_code"];
  $fdata["dep_name"] = $_POST["dep_name"];
  write_to_table($fdata,"HR.dep_master");
}

//資料顯示
$sql = "select * from dep_master where 1 order by id";
if ($rs = $conn->execute($sql)){
  while($r = $rs->fetchrow()){
    $dep_data[]= $r;
  }
}
$smarty->assign("dep_data",$dep_data);

$menu_str = $smarty->fetch("menu.html");
$smarty->assign("menu_str",$menu_str);
$main_str = $smarty->fetch("dep_main.html");
$smarty->assign("main_str",$main_str);
getHead();
getFoot();
?>
