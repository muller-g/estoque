<?php 
session_start();
require_once("conexao.php"); 

$item_name = $_GET["item-name"];
$item_qtd = $_GET["item-qtd"];
$item_price = $_GET["item-price"];
$item_date = $_GET["item-date"];

$sql = "INSERT INTO item (nome, qtd, valor_unitario, data_entrada) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$item_name, $item_qtd, $item_price, $item_date]);

header("Location: ../home.php");
$conn=null;
die();

?>