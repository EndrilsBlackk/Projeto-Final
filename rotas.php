<?php


// if (!isset($_SESSION['usuario'])) {
//     $usuario = 'Yasuo';
//     $senha = '87654321';
//     $projeto = ' Projeto Final';

//     session_start();

//     $_SESSION['usuario'] = $usuario;
//     $_SESSION['email'] = $senha;
//     $_SESSION['projeto'] = $projeto;
    

    


//     switch ($_GET['pg']) {
//         case 'cpanel':
//             include_once "app/cpanel/index.php";
//             break;
       
//             case 'login':
//             include_once "app/cpanel/index.php";
//             break;

//         default:
//             # code...
//             break;
//     }
// } else {
//     include_once "app/cpanel/paginas/login.php";
// };

include_once "app/cpanel/helpers/helpAdm.php";

session_start();

$pg = 'cpanel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}

if (isset($_SESSION['usuario'])) {
    
      switch ($pg) {
          case 'cpanel':
          break;
          
          include_once "app/cpanel/paginas/includes/header.php";
          include_once "app/cpanel/paginas/includes/rodape.php";
          include_once "app/cpanel/paginas/includes/navegacao.php";
          include_once "app/cpanel/paginas/inicial.php";  
        


          case 'produtos':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/produtos.php";
            include_once "app/cpanel/paginas/includes/rodape.php";
            break;

          case 'contato':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/contatos.php";
            include_once "app/cpanel/paginas/includes/rodape.php";
            break;

          case 'sair':
          session_destroy();
          Header('Location: ' . $_SERVER['PHP_SELF']);
          break; 
        
          default:
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/inicial.php";
            include_once "app/cpanel/paginas/includes/rodape.php";
            break;
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (verificaSeLogado()) {
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/rodape.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/inicial.php";  
        }
       
} else {
    include_once "app/cpanel/paginas/login.php";
}
}
?>