<?php
    require_once 'CLASSES/usuario.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets/css/styleLogin.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Poppins:wght@300;400;600;700&display=swap"
    rel="stylesheet"/>

    <title>Barbearia Hermanos</title>
</head>
<body>
    <div id="corpo_formulario">
        <h1>Recuperar Senha</h1>
        <form method="POST">
           
            <input type="password" name="senha" maxlength="15" placeholder="Nova senha" autocomplete="off" autofocus />
            <input type="password" name="confSenha" maxlength="15" placeholder="confirma senha" autocomplete="off" autofocus />
            <input type="submit" value="Salvar nova Senha" class="bb" />
        
        </form>
    </div>




</body>
</html>