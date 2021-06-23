<?php
  session_start();

  if (file_exists("config.php")) 
  {
    require_once("config.php");
    require_once("main.php");
  }
?>