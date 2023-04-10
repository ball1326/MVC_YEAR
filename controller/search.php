<?php 
include_once "model/ConDB.php";
include_once "model/Course.php";
$key=$_GET["keywords"];
// echo $key;

$obj_name=new Course();
  $rs2=$obj_name->getCourseforyear($key);
  foreach ($rs2 as $result2){
    include "view/showcardsearch.php";
  }
?>