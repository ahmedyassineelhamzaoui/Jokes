<?php
require_once('../classes/crud.class.php');
if(isset($_POST["add"])) addJock();
if(isset($_POST["delete"])) deleteJock();
if(isset($_POST["update"])) updateJock();



function addJock(){
  $name=$_POST["name"];
  $content=$_POST["content"];
   
}
function deleteJock(){
    $id=$_POST["id"];
}
function  updateJock(){
    $id=$_POST["id"];

}
?>