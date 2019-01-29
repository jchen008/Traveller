<?php
session_start();
if (!empty($_SESSION["username"])) {
  //echo 'Session is active';
  echo 'Hi, '.$_SESSION["username"];
}else{
     echo 'login';
}
?>