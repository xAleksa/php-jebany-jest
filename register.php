<?php
session_start();

include_once("config.php");

$login = $_POST['login'];
$haslo = $_POST['haslo'];
$haslo1 = $_POST['haslo2'];


$haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);

$sql =$connect->query("SELECT * FROM uzytkownicy WHERE user='$login'");

$sprawdzenie =$sql->num_rows;

if($haslo != $haslo2)
{
    $_SESSION['error_haslo'] ='<span style="color:red">Podane hasła nie są identyczne!</span>';
    header('Location:rejestracja.php');
}
else
{
  if($sprawdzenie>0)
    {
        $_SESSION['error_login'] ='<span style="color:red">Istnieje już konto o takim loginie!</span>';
        header('Location:rejestracja.php');
    }  
    else
    {
        if($sql = $connect->query("INSERT INTO uzytkownicy VALUES (NULL, '$login', '$haslo_hash')"))
        {
            $_SESSION['success_rejestracja'] = '<span style="color:green">Udana rejestracja!</span>';
            header('Location:rejestracja1.php');
        }
        else
        {
        echo "Błąd połączenia"; 
        }
    }   
}

$connect->close();

?>