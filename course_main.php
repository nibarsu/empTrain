<?php
include("mainfile.php");
//mysql_connect($db_host, $db_user, $db_passwd);
//mysql_select_db($dn_name);
//$result = mysql_query("SELECT `name` FROM `users` WHERE `location` = '$location'");
//
//while ($row = mysql_fetch_array($result,  MYSQL_ASSOC)) {
//  echo $row['name'];
//}
//
//mysql_free_result($result);

$smarty->assign("function_name","課程資料維護");
$dep_options = genDepOption();
$smarty->assign("dep_options",$dep_options);
$job_options = genJobOption();
$smarty->assign("job_options",$job_options);
$emp_options = genEmpOpts();
$emp_options = array_merge(array(""=>""),$emp_options);
$smarty->assign("emp_options",$emp_options);
if ($_POST["submit"]=="新增"){
  //emp_master
  $fdata = array();
  $fdata["name"] = $_POST["name"];
  $fdata["annual"] = $_POST["annual"];
  $fdata["sdate"] = $_POST["sdate"];
  $fdata["edate"] = $_POST["edate"];
  $fdata["hours"] = $_POST["hours"];
  $fdata["hcount"] = $_POST["hcount"];
  $fdata["fee"] = $_POST["fee"];
  $fdata["teacher"] = $_POST["teacher"];
  $fdata["addr"] = $_POST["addr"];
  $fdata["train_unit"] = $_POST["train_unit"];
  write_to_table($fdata,"HR.course_master");
  $cid = $conn->Insert_ID();
  $ctime = date("Y-m-d H:i:s");

  foreach($_POST["eid"] as $key => $val){
    $cdata =array();
    if ($val){
      $cdata["eid"]   = $_POST["eid"][$key];
      $cdata["cid"]   = $cid;
      //$cdata["tdate"]   = $_POST["tdate"][$key];
      $cdata["tdate"]   = $_POST["sdate"];
      $cdata["tdep"]   = $_POST["tdep"][$key];
      $cdata["score"]   = $_POST["score"][$key];
      $cdata["hours"]   = $_POST["hours"][$key];
      $cdata["cert"]   = $_POST["cert"][$key];
      $cdata["creator"]   = $_POST["creator"][$key];
      $cdata["ctime"]   = $ctime;
      write_to_table($cdata,"HR.emp_course");
    } 
  }
  //foreach($_POST["emp_list"] as $emp_id){
  //  if ($emp_id){
  //    $edata =array();
  //    $edata[
  //    write_to_table($fdata,"HR.course_master");

  //  }
  //}
}

//資料顯示
$sql = "select * from HR.course_master order by id";
if ($rs = $conn->execute($sql)){
  while($r = $rs->fetchrow()){
    $list[]= $r;
  }
}
$smarty->assign("list",$list);

$menu_str = $smarty->fetch("menu.html");
$smarty->assign("menu_str",$menu_str);
$main_str = $smarty->fetch("course_main.html");
$smarty->assign("main_str",$main_str);
getHead();
getFoot();
?>
