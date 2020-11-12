<?php
//header
//include_once "app/site/paginas/includes/header.php";

//navegador
//include_once "app/site/paginas/includes/navegador.php";



$paginas= isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {
        
       // case 'inicial':
           // include_once "app/site/paginas/inicial.php";
         //   break;

        case 'cpanel':
            include_once "app/cpanel/paginas/login.php";
            break;

      //  case 'contato':
          //  include_once "app/site/paginas/contato.php";
           // break;
           
           // case 'validalogin':
              //  include_once "app/site/paginas/validalogin.php";
              //  break;

        default:
        include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}



//footer
//include_once "app/site/paginas/includes/footer.php";
?>