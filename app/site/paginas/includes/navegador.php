<div class="container/fluid">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand 
" href="#"> <img src="app/assets/img/mine.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg']== 'inicial') ? 'btn btn-outline-warning' : ''); ?>" href="?pg=inicial">Inicial </a></li>
          <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg']== 'produtos') ? 'btn btn-outline-warning' : ''); ?>" href="?pg=produtos">Produtos </a></li>
          <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg']== 'contato') ? 'btn btn-outline-warning' : ''); ?>" href="?pg=contato">Contato </a></li>

        </ul>
        
        <?php

if (isset($_SESSION[''])) { ?>
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="regi-user"></span> Login
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item text-danger" href="#"><span class="regi-exit"></span> Sair</a>
      </div>
    </li>
  </ul>
<?php
} else { ?>
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link btn btn-outline-warning" href="rotas.php?pg=cpanel">Administração do Site</a>
    </li>
  </ul>
<?php
}
?>

  </div>
</nav>
</div>
