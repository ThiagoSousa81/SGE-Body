<?php

if(!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['ID_USER'])) {
  //die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
  header("Location: /login.php");
}
?>