<?php
include("mainfile.php");
$smarty->assign("function_name","職稱資料維護");
if ($_POST["submit"]=="新增"){
  $fdata = array();
  $fdata["job_code"] = $_POST["job_code"];
  $fdata["job_name"] = $_POST["job_name"];
  write_to_table($fdata,"HR.job_master");
}

//資料顯示
$sql = "select * from job_master where 1 order by id";
if ($rs = $conn->execute($sql)){
  while($r = $rs->fetchrow()){
    $list[]= $r;
  }
}
$smarty->assign("list",$list);

$menu_str = $smarty->fetch("menu.html");
$smarty->assign("menu_str",$menu_str);
$main_str = $smarty->fetch("job_main.html");
$smarty->assign("main_str",$main_str);
getHead();
getFoot();
?>
