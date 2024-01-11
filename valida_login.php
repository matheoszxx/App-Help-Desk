<?php

    session_start();


    //variavel para verificar se foi autenticado
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@test.com.br', 'senha' => '123456'),
        array('email' => 'user@test.com.br', 'senha' => 'abcd')
    );

    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }

    }

    if($usuario_autenticado){
        echo 'Usuario autenticado com sucesso!';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        //retorna para a página index.php   
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    /*
    print_r($_GET);
    
    echo '<br>';

    echo $_GET['email'];

    echo '<br>';

    echo $_GET['senha'];
    */
    /*
    print_r($_POST);

    echo '<br>';

    echo $_POST['email'];

    echo '<br>';

    echo $_POST['senha'];
    */

?>