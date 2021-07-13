<?php 
require_once("conexao.php"); 
error_reporting(0);

$count = 1;
$name = $_GET["search-input"];

if(isset($name)){
    $stmt = $conn->query("SELECT * FROM item WHERE nome LIKE  '%$name%'");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        echo "<tr>";
            echo "<td>".$count."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['qtd']."</td>";
            echo "<td>R$ ".$row['valor_unitario']."</td>";
            echo "<td>".$row['data_entrada']."</td>";
            echo "<td><a href='backend/removeItem.php?id=$id' class='btn-edit' btn-edit>X</a></td>";
            echo "<td><a href='update.php?id=$id' class='btn-edit' btn-edit>Mais +</a></td>";
        echo "</tr>";
        $count++;
    }
} else {
    $stmt = $conn->query("SELECT * FROM item");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        echo "<tr>";
            echo "<td>".$count."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['qtd']."</td>";
            echo "<td>R$ ".$row['valor_unitario']."</td>";
            echo "<td>".$row['data_entrada']."</td>";
            echo "<td><a href='backend/removeItem.php?id=$id' class='btn-edit' btn-edit>X</a></td>";
            echo "<td><a href='update.php?id=$id' class='btn-edit' btn-edit>Mais +</a></td>";
        echo "</tr>";
        $count++;
    } 
}
$conn=null;

?>