<?php
//常用工具

function getHead(){
  global $smarty;
  $smarty->display("header.html");
}

function getFoot(){
  global $smarty;
  $smarty->display("footer.html");
}

function getMenu(){
  global $smarty;
  $smarty->display("menu.html");
}



function write_to_table($data = array(), $table_name ,$conn="") {
  if ($conn == "") global $conn ;
  if ( sizeof($data)==0 ) return ;
  $pkey = $pdata = array() ; 
  foreach( $data as $key => $val ) { 
    $pkey[] = "`".$key."`" ; 
    $pdata[] = addslashes($val) ; 
  }        
  $sql = " insert into " . $table_name . " ( "  . implode( ',' , $pkey )  ." ) values ('" . implode("','", $pdata) . "')" ;
  // tep_db_query($sql);  
  // die($sql);
  $r = $conn->Execute($sql);
  if (!$r) {
    print "ERROR-- $sql";
    exit();
  }     
  return ;                                                                                                                   
}     


function update_to_table($data = array(), $table_name, $whereData = array(),$conn="") {
  if ($conn == "")global $conn ;
  if ( sizeof($data)==0 ) return ;

  $sql = " update ".$table_name." set  " ;
  $count = 0;
  foreach( $data as $key => $val ) {
    $count++;
    if ($count == 1) {
      $sql = $sql.$key." = '".$val."'";
    } else {
      $sql = $sql.", ".$key." = '".$val."'";
    }
  }    

  $wcount = 0;
  foreach( $whereData as $key => $val ) {
    $wcount++;
    if ($wcount == 1) {
      $sql = $sql." where  ".$key." = '".$val."' ";
    } else {
      $sql = $sql." and  ".$key." = '".$val."' ";
    }
  }    

  //echo "update_to_table() ============== sql = ".$sql."<br>";exit;

  $r = $conn->Execute($sql);
  if (!$r) {
    print "ERROR-- $sql";
    exit();
  } 
  return ;
} 

function get_conn(){
  //$db_name  資料庫名稱
  require_once("includes/adodb/adodb.inc.php");
  //帳密
  //require_once("includes/conndb.php");
  $dbtype = "mysqli";
  $dbhost = "localhost";
  $dbuser = "hruser";
  $dbpasswd = "W4rhc2J9MY";
  $dbname   = "HR";
  //die("$dbhost,$dbuser,$dbpasswd,$dbname");
  $conn = ADONewConnection($dbtype);
  $conn->Connect($dbhost,$dbuser,$dbpasswd,$dbname);
  //切換資料庫  應只有mysql有用到
  $conn->debug=0;
  $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
  return $conn;
}

function genDepOption(){
  global $conn;
  $sql = "select id,dep_name from dep_master order by id";
  $rs = $conn->execute($sql);
  while($r = $rs->fetchrow()){
    $dep_option[$r["id"]]=$r["dep_name"];
  }
  return $dep_option;
}
function genJobOption(){
  global $conn;
  $sql = "select id,job_name from job_master order by id";
  $rs = $conn->execute($sql);
  while($r = $rs->fetchrow()){
    $option[$r["id"]]=$r["job_name"];
  }
  return $option;
}

function genCourseOpts(){
  global $conn;
  $sql = "select * from course_master  order by id";
  $rs = $conn->execute($sql);
  while($r = $rs->fetchrow()){
    $option[$r["id"]] = $r["name"];
  }
  return $option;
}

function genEmpOpts(){
  global $conn;
  $sql = "select * from emp_master order by emp_id";
  $rs = $conn->execute($sql);
  while($r = $rs->fetchrow()){
    $option[$r["id"]] = $r["cname"];
  }
  return $option;
}

function getDatabyid($id ,$table){
  global $conn;
  $r = array();
  $sql = "select * from $table where id =$id";
  $rs = $conn->execute($sql);
  $r = $rs->fetchrow();
  return $r;

}

function getDid($eid){
  global $conn;
  $id =0;
  $sql = "select * from emp_dep where eid=$eid";
  $rs = $conn->execute($sql);
  $r = $rs->fetchrow();
  $id = ($r["did"])?$r["did"]:0;
  return $id;
}

function getJid($eid){
  global $conn;
  $id =0;
  $sql = "select * from emp_job where eid=$eid";
  $rs = $conn->execute($sql);
  $r = $rs->fetchrow();
  $id = ($r["jid"])?$r["jid"]:0;
  return $id;
}
?>
