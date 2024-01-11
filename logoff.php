<?php
    
    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover indices do array de sessão => unset() 
    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */


    //destruir a variavel de sessão => session_destroy()
    session_destroy();
    //aqui faz o redirecionamento
    header('Location: index.php');
?>