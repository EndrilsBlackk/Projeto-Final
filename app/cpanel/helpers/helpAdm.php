
<?php

function verificaSeLogado()
{
    
    $usuario = 'Yasuo';
    $senha = '87654321';

    if ($_POST['usuario'] == $usuario) {
        $_SESSION['usuario'] = $usuario;      
        return true;
    } else {
        echo 'Usuário e senha não confere';
    }
}
