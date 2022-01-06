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
    <div id="corpo_formulario" class="dd">
        <h1>Cadastrar</h1>
        <form method="POST">
            <input type="text" name="nome" onkeypress="return lettersOnly(event);" placeholder="Nome Completo" maxlength="30" minlength="5" autofocus required/>
            <input type="text" name="telefone" id="telefone" placeholder="telefone"  maxlength="30" autocomplete="off" required/>
            <input type="email" name="email" placeholder="Email" maxlength="40" autocomplete="off" required/>
            <input type="password" name="senha" placeholder="senha"maxlength="15" minlength="6" autocomplete="off" required/>
            <input type="password" name="confsenha" placeholder="confirmar senha"maxlength="15"minlength="6" autocomplete="off" required/>
            <input type="submit" value="Cadastrar"/>
            
        </form>
    </div>

<?php
    //verificar se a pessoa cliclou no botao

    if(isset($_POST['nome']))
    {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confsenha']);

        //verificar se o campo esta em  branco.

        if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
        {
            $u->conectar("barbearia","localhost","root","");

            if($u->msgErro == "") //esta tudo ok
            {
                if($senha == $confirmarSenha)
                {
                    if($u->cadastrar($nome,$telefone,$email,$senha))
                    {
                        ?>
                            <div  id="msgsucesso">
                                Cadastrado com sucesso! acesse para entrar...
                            </div>
                        <?php

                        header("location: login.php");
                        
                    
                    }   
                    else
                    {
                        ?>
                            <div class="msgErro">
                               Email ja Cadastrado!
                            </div>
                        <?php
                        
                    }

                }
                else
                {
                    ?>
                        <div class="msgErro">
                            Senha e Confirma senha são diferentes!
                        </div>
                    <?php
                    
                }
                
            }
            else
            {
                echo "Erro: ".$u->msgErro;
            }
        }
        else
        {
            ?>
                <div class="msgErro">
                    Preencha todos os campos!
                </div>
            <?php
           
        }
    } 



?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>

<script>
    $("#telefone").mask("(99)99999-9999");
</script>
</body>
</html>