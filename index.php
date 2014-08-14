<?php
include("mainfile.php");
$smarty->assign("function_name","員工課程查詢");
if ($_POST["query"]=="查詢"){
  $sql = "select * from emp_master where cname like '".$_POST["qemp"]."%'";
  $ers = $conn->execute($sql);
  $er = $ers->fetchrow();
  $eid = $er["id"];
  $smarty->assign("emp_data",$er);
  $did = getDid($eid);
  $dep_data = getDatabyid($did,"HR.dep_master");
  $smarty->assign("dep_data",$dep_data);
  $jid = getJid($eid);
  $job_data = getDatabyid($jid,"HR.job_master");
  $smarty->assign("job_data",$job_data);
  $whstr =" where eid =$eid ";
  $sql = "select * from HR.emp_course $whstr order by ctime DESC";
  if ($rs = $conn->execute($sql)){
    while($r = $rs->fetchrow()){
      $r["cdesc"] =$dep_data["dep_name"]."/".$emp_data["cname"];
      $course_data = getDatabyid($r["cid"],"HR.course_master");
      $r["course"] = $course_data["name"];
      $list[]= $r;
    }
  }
}
$smarty->assign("list",$list);
$menu_str = $smarty->fetch("menu.html");
$smarty->assign("menu_str",$menu_str);
$main_str = $smarty->fetch("index.html");
$smarty->assign("main_str",$main_str);
getHead();
getFoot();
?>
