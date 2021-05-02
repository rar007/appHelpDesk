<?php
    session_start();
    $usuario_autenticado = false;
    $usuario_sistema = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abc')
    );
    
    foreach($usuario_sistema as $user)
    {
        
        if(($user['email'] == $_POST['email']) && ($user['senha'] == $_POST['senha']))
        {
            $usuario_autenticado = true;
            //header('Location: index.php?login=erro');
        }

        
    }

    if($usuario_autenticado){
        echo "Usuario autenticado com sucesso";
        $_SESSION['autenticado'] = 'SIM';
    }
    else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }