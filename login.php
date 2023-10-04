<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles_login.css">
</head>
<body>
    <header>
        <a href="login.html">Serviços de TI<a>
    </header>

<main class="centro">
    <form action="bd_services_ti.sql" class="center-box" method="post">
        <div>
            <h1>Login</h1>
        </div>

        <div class="box-input">
            <input name="e_mail" type="e_mail" placeholder="E-mail">
        </div>

        <div class="box-input">
            <input name="senha" type="password" placeholder="senha">
        </div>

        <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
        <div class='box-input'>
            Usuário ou senha inválido(s)
        </div>

        <? } ?>

        <div class="box-input">
            <button name="entrar" type="submit" >Entrar</button>
        </div>

        <div class="box-input">
            <p>Cliqui aqui para
                <a href="cadastro_cliente.php">Cadastre-se como cliente.</a>                  
            </p>
        </div>

        <div class="box-input">

             <p>Cliqui aqui para
                <a href="cadastro_tecnico.php">Cadastre-se como técnico.</a>                  
            </p>


        <div>

        
    </form>
</main>





    


</body>
</html>