<?php
include("mainfile.php");
$smarty->assign("function_name","員工資料維護");
$dep_options = genDepOption();
$smarty->assign("dep_options",$dep_options);
$job_options = genJobOption();
$smarty->assign("job_options",$job_options);
//if ($_POST["submit"]=="匯入"){
//  $sql = " select * from hr_data order by nid";
//  $sql = " select * from hr_data where emp_id !='A0015'";
//  $rs = $conn->execute($sql);
//  while($r = $rs->fetchrow()){
//    //emp_master
//    $emp_id = $r["emp_id"];
//    $cname = $r["cname"];
//    $edata["emp_id"] = $r["emp_id"];
//    $edata["cname"] = $r["cname"];
//    $edata["hiredate"] = $r["hiredate"];
//    write_to_table($edata,"HR.emp_master");
//    //emp id
//    $sql= "select * from emp_master where emp_id ='$emp_id'";
//    $ers = $conn->execute($sql);
//    $er = $ers->fetchrow();
//    $eid = $er["id"];
//    //dep
//    $dep_name = $r["dep"];
//    $sql = "select * from dep_master where dep_name='$dep_name'";
//    $drs = $conn->execute($sql);
//    $dr = $drs->fetchrow();
//    $did =  $dr["id"];
//    write_to_table(array("eid" => $eid ,"did" =>$did),"HR.emp_dep");
//
//    //job
//    $job_name = $r["job_name"];
//    $sql ="select * from job_master where job_name ='$job_name'";
//    $jrs = $conn->execute($sql);
//    $jr = $jrs->fetchrow();
//    $jid = $jr["id"];
//    write_to_table(array("eid"=>$eid ,"jid" =>$jid), "HR.emp_job");
//  }
//}
if ($_POST["submit"]=="新增"){
  //emp_master
  $fdata = array();
  $fdata["cname"] = $_POST["cname"];
  $fdata["emp_id"] = $_POST["emp_id"];
  $fdata["hiredate"] = $_POST["hiredate"];
  write_to_table($fdata,"HR.emp_master");
  $eid = $conn->Insert_ID();
  //emp_dep
  write_to_table(array("eid"=>$eid ,"did" => $_POST["did"]),"HR.emp_dep");
  //emp_job
  write_to_table(array("eid"=>$eid ,"jid" => $_POST["jid"]),"HR.emp_job");
}

//資料顯示
$sql = "select A.cname , A.emp_id ,A.hiredate
  ,D.dep_name ,E .job_name
  from emp_master A
  ,emp_dep B
  ,emp_job C
  ,dep_master D
  ,job_master E
  where A.id = B.eid
  AND A.id = C.eid
  AND B.did = D.id
  AND C.jid = E.id
  order by A.id";
if ($rs = $conn->execute($sql)){
  while($r = $rs->fetchrow()){
    $list[]= $r;
  }
}
$smarty->assign("list",$list);

$menu_str = $smarty->fetch("menu.html");
$smarty->assign("menu_str",$menu_str);
$main_str = $smarty->fetch("emp_main.html");
$smarty->assign("main_str",$main_str);
getHead();
getFoot();
?>
