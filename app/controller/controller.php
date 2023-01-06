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

 if(isset($_POST["show"])){
   $search=$_POST["search"];
   $rows=$myada->getSpecifikData("SELECT * FROM myjoke WHERE name LIKE ? ",array("%".$_POST["search"]."%"));
 }else{
   $rows=$myada->getData("SELECT * FROM myjoke");
 }

 if(isset($_POST["update"])){
   $id=$_POST['product-id'];
   $name=$_POST["joke-name"];
   $content=$_POST["joke-content"];
   try{   
      $myada->updatetData("UPDATE myjoke set name=?,content=? where id= ?",array($name,$content,$id));
      header('location:index.php');
   }catch(exception $e){
      echo "error ".$e->getMessage();
   }
}

?>