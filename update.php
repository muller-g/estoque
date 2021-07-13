<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/main-update.css">
    <title>Atualizar Item</title>
</head>
<body>
    <div class="left-menu">
        <a href="home.php">Inicio</a>
        <a href="login.php">Sair</a>
    </div>
    <div class="main">
        <div class="main-update">
            <div class="modal-form">
                <form action="backend/editItem.php" method="get">
                    <?php  
                    require_once("backend/conexao.php"); 
                    
                    $id = $_GET["id"];
                    
                    $stmt = $conn->query("SELECT * FROM item WHERE id = $id");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<legend>Nome do Item</legend>";
                        echo "<input type='text' name='item-name' id='item-name' item-name value='".$row['nome']."'>";
                        echo "<div class='form-foot'>";
                            echo "<legend>Quantidade</legend>";
                            echo "<input type='number' name='item-qtd' id='item-qtd' item-qtd value='".$row['qtd']."'>";
                            echo "<legend>Valor unitário</legend>";
                            echo "<input type='text' name='item-price' id='item-price' item-price value='".$row['valor_unitario']."'>";
                            echo "<legend>Data de entrada</legend>";
                            echo "<input type='date' name='item-date' id='item-date' item-date value='".$row['data_entrada']."'>";
                            echo "<input type='hidden' id='item-id' name='item-id' value='$id'>";
                        echo "</div>";
                    }?>
                    <div class="button-modal">
                        <input type="submit" value="Atualizar" class="btn-register">
                        <a href="home.php" class="btn-cancel" a-cancel>Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>