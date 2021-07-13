<?php 
require_once("conexao.php"); 

$id = $_GET["item-id"];
$nome = $_GET["item-name"];
$qtd = $_GET["item-qtd"];
$valor_unitario = $_GET["item-price"];
$data_entrada = $_GET["item-date"];

echo $id;
echo $nome;
echo $qtd;
echo $valor_unitario;
echo $data_entrada;

$sql = "UPDATE item SET nome=:nome, qtd=:qtd, valor_unitario=:valor_unitario, data_entrada=:data_entrada WHERE id=:id";
$stmt= $conn->prepare($sql);
$stmt->execute(array(
    ':id' => $id,
    ':nome' => $nome,
    ':qtd' => $qtd,
    ':valor_unitario' => $valor_unitario,
    ':data_entrada' => $data_entrada,
));

header("Location: ../home.php");
$conn=null;
die();
?>