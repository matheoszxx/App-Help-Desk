<?php

    session_start();


    //variavel para verificar se foi autenticado
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    //usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@test.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@test.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@test.com.br', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@test.com.br', 'senha' => '123456', 'perfil_id' => 2)

    );

    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

    }

    if($usuario_autenticado){
        echo 'Usuario autenticado com sucesso!';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
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