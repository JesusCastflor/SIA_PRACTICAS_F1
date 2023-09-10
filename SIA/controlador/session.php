<?php
session_start();
if(!isset($_SESSION['ID_Vendedor']))
{
    header('Location:../index.php'); 
}
?>
