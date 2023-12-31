<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'database.php';

$cls = new database;

require "protection.php";
$id = $_GET['id'];

echo $id;

$link = $cls->GetLinkMySQLI();
$stmt = $link->prepare("DELETE FROM PRODUCT WHERE `ID_PRODUCT` = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$stmt->close();
$link->close();

header('Location: /preco.php');


?>