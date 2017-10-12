<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

if (session_destroy()){
  header("location: ../../");
}

?>
