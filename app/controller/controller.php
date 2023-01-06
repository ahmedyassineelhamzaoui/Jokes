<?php
require_once('./../app/classes/crud.class.php');
//  {addJock();}

$myada=new Alltraitment();
 if(isset($_POST["add"])){
    $name=$_POST["joke-name"];
    $content=$_POST["joke-content"];
    $myada->insertData('INSERT INTO myjoke(name,content) VALUES(?,?)',array($name,$content));
 }
 if(isset($_POST["delete"])){
    $id=$_POST["id-card"];
    $myada->deleteData('DELETE FROM myjoke WHERE id=?',array($id));

 }


 if(isset($_POST["update-joke"])){
    $id=$_POST["id"];
    $name=$_POST["new_name"];
    $content=$_POST["new_conetnt"];
   //  $param=$myada->getData("SELECT *");
   //  $myada->updatetData('UPDATE myjoke SET name=?,content=? WHERE id=?',array($name,$content,$id));
 }

 $rows=$myada->getData("SELECT * FROM myjoke");


?>