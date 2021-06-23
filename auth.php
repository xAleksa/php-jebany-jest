<?php
session_start();
     
    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: czesci.php');
        exit();
    }
 
    require_once "connect.php";
 
    $connect = @new mysqli($host, $db_user, $db_password, $db_name);
     
    if ($connect->connect_errno!=0)
    {
        echo "Error: ".$connect->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
         
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
     
        if ($rezultat = @$connect->query(
        sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
        mysqli_real_escape_string($connect,$login),
        mysqli_real_escape_string($connect,$haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $_SESSION['zalogowany'] = true;
                 
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];
               
                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: czesci.php');
                 
            } else {
                 
                $_SESSION['blad'] = '<h2>Błąd!<h1>';
                header('Location: log.php');
                 
            }
             
        }
         
        $connect->close();
    }
    ?>