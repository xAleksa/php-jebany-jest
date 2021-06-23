<?php
 
    session_start();
     
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: zamow1.php');
        exit();
    }
    else
    {
      header('Location: niestety.php');
      exit();
    }
 
?>