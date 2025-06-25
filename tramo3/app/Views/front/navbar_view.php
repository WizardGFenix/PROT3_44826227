<!--Navegacion-->
<?php
$session = session();
$nombre = $session->get('usuario');
$perfil_id = $session->get('perfil_id');
?>



<script src="<?= base_url('Assets/js/bootstrap.bundle.min.js') ?>"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/')?>">
        <img src="<?php echo base_url('Assets/img/loporogo.png')?>" alt="loporogo" width="75" height="30" class="img-fluid">
        <div class="text-center" >home</div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if($perfil_id == 1): ?>
      <div class="btn btn-light active btnUser btn-sm">
        <a href="">ADMIN: <?php echo $nombre ?></a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='login'>Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout')?>" tabindex="-1" aria-disabled="false">Cerrar sesion</a>
        </li>
      </ul>
    </div>
      <?php elseif ( $perfil_id == 2): ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="btn btn-ligth active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo $nombre ?></a>
      </div>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/') ?>">Catalogo</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout')?>" tabindex="-1" aria-disabled="false">Cerrar sesion</a>
        </li>
        
      </ul>
    </div>
      <?php else: ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login">Iniciar Sesion</a></li>
            <li><a class="dropdown-item" href="registro">Registrarse</a></li>
         
          </ul>
        </li>
     
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> 
        <?php endif; ?>
    </div>
  </div>
</nav>

<!--Navegacion-->

<script src="<?= base_url('Assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>