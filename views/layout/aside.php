<!-- MENU -->
<div class="row">
  <div class="col">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Sistema de Actividades complementarias</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=base_url?>">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuarios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url?>usuarios/create">Agregar</a></li>
                <li><a class="dropdown-item" href="<?=base_url?>usuarios/read">Mostrar</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url?>help/index">Acerca de</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
			
<div id="content">
  <div class="row">
    <div class="col-12">