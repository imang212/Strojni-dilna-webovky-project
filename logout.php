<?php
session_start();
unset($_SESSION['nick']);
unset($_SESSION['email']);
unset($_SESSION['success']);
unset($_SESSION['ucet']);
header('Location: ../Strojni%20dilna%20webovky/main.php');
?>