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
            <input type="email" name="email" maxlength="40" placeholder="email" autocomplete="off" autofocus />
            
            <input type="submit" value="recuperar" class="bb" />
        
        </form>
    </div>

    
<?php
    if(isset($_POST['email']))
    {
        
        $email = addslashes($_POST['email']);
        
     

        //verificar se o campo esta em  branco.

        if(!empty($email))
        {
            $u->conectar("barbearia","localhost","root","");
            if($u->msgErro =="")
            {

                
                if($u->recupera($email))
                {
                    header("location: novaSenha.php");
                    
                }
                else
                {
                    ?>
                        <div class="msgErro">
                            Email não existe!
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
                    Preencha o campo porfavor!
                </div>
            <?php
        }
    }
?>
</body>
</html>