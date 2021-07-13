<?php 
require_once("conexao.php"); 

$item_id = $_GET["id"];

$sql = "DELETE FROM item WHERE id=$item_id";
$stmt = $conn->prepare($sql);
$stmt->execute();

header("Location: ../home.php");
$conn=null;

die();

?>