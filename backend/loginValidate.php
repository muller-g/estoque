<?php 
require_once("conexaoUsuario.php"); 
session_start();
$userName = $_GET["username"];
$userPass = $_GET["userpass"];

if(isset($userName) && isset($userPass)){
    $stmt = $conn->query("SELECT * FROM usuario");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if($userName == $row['apelido_usuario'] && $userPass == $row['senha_usuario']){
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['usuario_apelido'] = $row['apelido_usuario'];
            header("Location: ../home.php");
        } else {
            header("Location: ../login.php");
        }
    }
} else {
    header("Location: ../login.php");
}
$conn=null;
?>