<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="backend/loginValidate.php" method="get">
            <div class="form-input-up">
                <legend>Usuário: </legend>
                <input type="text" name="username" id="username" class="input-login">
            </div>
            <div class="form-input-down">
                <legend>Senha: </legend>
                <input type="password" name="userpass" id="userpass" class="input-login">
            </div>
            <input type="submit" value="Entrar" class="input-submit">
        </form>
    </div>
</body>
</html>