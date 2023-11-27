<?php

session_start();
unset($_SESSION['artista']);
unset($_SESSION['senha']);
header('Location: login.php');

?>