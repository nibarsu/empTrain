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

$smarty->assign("function_name","員工課程維護");
$emp_options = genEmpOpts();
$smarty->assign("emp_options",$emp_options);
$course_options = genCourseOpts();
$smarty->assign("course_options",$course_options);
if ($_POST["submit"]=="新增"){
  $ctime = date("Y-m-d H:i:s");
  foreach($_POST["eid"] as $key => $val){
    $cdata =array();
    if ($_POST["tdate"][$key]){
      $cdata["eid"]   = $_POST["eid"][$key];
      $cdata["cid"]   = $_POST["cid"][$key];
      $cdata["tdate"]   = $_POST["tdate"][$key];
      $cdata["tdep"]   = $_POST["tdep"][$key];
      $cdata["score"]   = $_POST["score"][$key];
      $cdata["hours"]   = $_POST["hours"][$key];
      $cdata["cert"]   = $_POST["cert"][$key];
      $cdata["creator"]   = $_POST["creator"][$key];
      $cdata["ctime"]   = $ctime;
      write_to_table($cdata,"HR.emp_course");
    } 
  }
}

//資料顯示
$sql = "select * from HR.emp_course order by id";
if ($rs = $conn->execute($sql)){
  while($r = $rs->fetchrow()){
    $emp_data = getDatabyid($r["eid"],"HR.emp_master");
    $did = getDid($r["eid"]);
    $dep_data = getDatabyid($did,"HR.dep_master");
    $r["cdesc"] =$dep_data["dep_name"]."/".$emp_data["cname"];
    $course_data = getDatabyid($r["cid"],"HR.course_master");
    $r["course"] = $course_data["name"];
    $list[]= $r;
  }
}
$smarty->assign("list",$list);

$menu_str = $smarty->fetch("menu.html");
$smarty->assign("menu_str",$menu_str);
$main_str = $smarty->fetch("course_emp.html");
$smarty->assign("main_str",$main_str);
getHead();
getFoot();
?>
