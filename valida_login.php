<?php

    //autwenticação de usuario
    $cliente_autenticado = false;

    //usuarios do sistema - teste.
    $cliente_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '12345'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    /*
    echo '<pre>';
    print_r($cliente_app);
    echo '</pre>';
    */
    foreach($cliente_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $cliente_autenticado = true;
        }
    }

    if($cliente_autenticado){
        echo "Usuário Autenticado.";
    }else{
        echo "Erro de Autenticação.";
    }


?>