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
    <title>Início</title>
    <?php
    session_start();
    if(!isset ($_SESSION['usuario_apelido']) == true){
        unset($_SESSION['usuario_apelido']);
        header('location:login.php');
    }
    $logado = $_SESSION['usuario_apelido'];
    ?>
</head>
<body>
    <div class="left-menu">
        <a href="home.php">Inicio</a>
        <a href="backend/logout.php">Sair</a>
    </div>
    <div class="main">
        <div class="main-title">
            <a href="#" a-open>Adicionar Item +</a>
            <form action="home.php?search-input=" method="get">
                <input type="text" name="search-input" id="search-input">
                <button class="search-button">Buscar</button>
            </form>
        </div>
        <div class="main-table">
            <table>
                <tbody table-js>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>QTD</th>
                        <th>VAL. UNITÁRIO</th>
                        <th>DATA ENTRADA</th>
                        <th>DELETAR</th>
                        <th></th>
                    </tr>
                        <?php require_once("backend/getItem.php");
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-total">
        <div class="modal-form">
            <legend>Nome do Item</legend>
            <form action="backend/addItem.php" method="get">
                <input type="text" name="item-name" id="item-name" item-name>
                <div class="form-foot">
                    <legend>Quantidade</legend>
                    <input type="number" name="item-qtd" id="item-qtd" item-qtd>
                    <legend>Valor unitário</legend>
                    <input type="text" name="item-price" id="item-price" item-price>
                    <legend>Data de entrada</legend>
                    <input type="date" name="item-date" id="item-date" item-date>
                </div>
                <div class="button-modal">
                    <input type="submit" value="Cadastrar" class="btn-register">
                    <a href="#" class="btn-cancel" a-cancel>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="js/modal.js"></script>
</body>
</html>